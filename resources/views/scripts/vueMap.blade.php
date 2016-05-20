<script>
    var subscribe = new Vue(
    {
        el: '#vue-google-map',

        data: {
            subscriptions: null,
            markers: [],
        },

        methods: {
            __fetchSubscriptions: function()
            {
                if (this.city)
                {
                    this.$http.get('/subscriptions', function(subscriptions)
                    {
                        this.$set(this.subscriptions, subscriptions);

                        this.$nextTick(function ()
                        {
                            this.__createMarkers();
                        }.bind(this))
                    });
                }
            },
        },

        ready: function()
        {
            this.__fetchSubscriptions();
        },
    });
</script>
