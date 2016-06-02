<script>
    if (jQuery("#vue-congressmen").length)
    {
        var vueCongressmen = new Vue(
        {
            el: '#vue-congressmen',

            data: {
                searchText: '',
                congressmen: [],
            },

            methods: {
                __fetchCongressmen: function() {
                    this.$http.get('/api/v1/congressmen/2015' , function(congressmen) {
                        this.congressmen = congressmen;
                    });
                },
            },

            ready: function ()
            {
                this.__fetchCongressmen();
            }
        });
    }
</script>


