<script>
    function schoolGreaterThanOne(school)
    {
        return school.schoolcount > 1;
    }

    function startFetchSubscriptionsClock()
    {
        vueAdminIndex.__fetchSubscriptions();
    }

    function loadPusher()
    {
        this.pusher = new Pusher('2c6e7075be562704023d');

        this.pusherChannel = this.pusher.subscribe('subscriptions');

        this.pusherChannel.bind('App\\Events\\SubscriptionWasUpdated', function(message)
        {
            vueAdminIndex.__fetchSubscriptions();
        });

        this.pusherChannel.bind('App\\Events\\SubscriptionWasCreated', function(message)
        {
            vueAdminIndex.__fetchSubscriptions();
            vueMap.__scheduleFetch();
        });
    }

    function clone(obj)
    {
        if (null == obj || "object" != typeof obj) return obj;
        var copy = obj.constructor();
        for (var attr in obj) {
            if (obj.hasOwnProperty(attr)) copy[attr] = obj[attr];
        }
        return copy;
    }

    function isEmpty(obj)
    {
        return Object.keys(obj).length == 0;
    }
</script>
