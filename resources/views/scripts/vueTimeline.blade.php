<script>
    var subscribe = new Vue({
        el: '#timeline',

        data:
        {
            year: 2016,
            address: null,
            timeline: [],
        },

        methods:
        {
            __fetchTimeline: function()
            {
                if (this.year)
                {
                    this.$http.get('/api/v1/timeline/' + this.year, function(timeline)
                    {
                        console.log(timeline);

                        this.timeline = timeline;
                    }.bind(this));
                }
            },
        },

        ready: function()
        {
            this.__fetchTimeline();
        },
    });
</script>
