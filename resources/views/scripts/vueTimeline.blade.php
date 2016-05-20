<script>
    var subscribe = new Vue({
        el: '#timeline',

        data:
        {
            year: 2016,
            address: null,
            timeline: null,
            now: null,
            timeOffset: 0,
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0,
        },

        methods:
        {
            __nowW3c: function () {
                return Date.parse(new Date().toUTCString());
            },

            __calculateTimeOffset: function (now)
            {
                var serverTimeMillisGMT = Date.parse(new Date(now).toUTCString());
                var localMillisUTC = this.__nowW3c();

                this.timeOffset = serverTimeMillisGMT -  localMillisUTC;
            },

            __findNextEvent: function ()
            {
                var now = this.__nowW3c();
                var selected = false;

                this.timeline.forEach(function(object)
                {
                    var startDate = Date.parse(new Date(object.startW3c).toUTCString());
                    object.selected = false;

                    if (startDate >= now && ! selected)
                    {
                        object.selected = true;
                        selected = true;
                    }
                }.bind(this));
            },

            __findSelectedEvent: function ()
            {
                var selected = null;

                this.timeline.forEach(function(object)
                {
                    console.log(object.selected);
                    if (object.selected)
                    {
                        selected = object;
                    }
                }.bind(this));

                return selected;
            },

            __updateTimer: function ()
            {
                setTimeout(function ()
                {
                    this.__updateTimer();
                }.bind(this), 1000)

                if (! this.timeline)
                {
                    return false;
                }

                var event = this.__findSelectedEvent();

                console.log(this.timeline);
                console.log(event);

                var eventStart = Date.parse(new Date(event.startW3c).toUTCString());
                var now = this.__nowW3c();

                this.seconds = (eventStart + this.timeOffset - now) / 1000;

                this.days = Math.floor(this.seconds / (60 * 60 * 24)); //calculate the number of days
                this.seconds -= this.days * 60 * 60 * 24; //update the seconds variable with no. of days removed

                this.hours = Math.floor(this.seconds / (60 * 60));
                this.seconds -= this.hours * 60 * 60; //update the seconds variable with no. of hours removed

                this.minutes = Math.floor(this.seconds / 60);
                this.seconds -= this.minutes * 60; //update the seconds variable with no. of minutes removed
            },

            __fetchTimeline: function()
            {
                if (this.year)
                {
                    this.$http.get('/api/v1/timeline/' + this.year, function(timeline)
                    {
                        this.timeline = timeline.lines;

                        this.now = timeline.now;

                        this.__calculateTimeOffset(timeline.now);

                        this.__findNextEvent();
                    }.bind(this));
                }
            },

            __isCurrentCountdownEvent: function(item)
            {
                return item.selected;
            },
        },

        ready: function()
        {
            this.__fetchTimeline();
            this.__updateTimer();
        },
    });
</script>
