<script>
    function isEmpty(obj)
    {
        return Object.keys(obj).length == 0;
    }

    var subscribe = new Vue(
    {
        el: '#vue-google-map',

        data: {
            subscriptions: null,
            markers: [],
        },

        methods: {
            __createMarkers: function ()
            {
                this.subscriptions.forEach(function(subscription)
                {
                    console.log(subscription.id);
                    console.log(subscription.school_record);

                    var found = this.__findMarkerByName('CE ANTONIO DIAS LIMA');

                    if (isEmpty(found))
                    {
                        var LatLng = {
                            lat: subscription.school_record.latitude,
                            lng: subscription.school_record.longitude
                        };

                        marker = createMarker(map, LatLng, subscription.school);

//                        var marker = new googleMaps.maps.Marker(
//                        {
//                            position: ,
//                            map: map,
//                            title: ,
//                            icon: '/pj2016/images/google-marker.png'
//                        });

                        var object =
                        {
                            id: subscription.school_record.id,
                            school: subscription.school,
                            marker: marker,
                        }

                        this.markers.push(marker);
                    }
                }.bind(this));
            },

            __findMarkerByName: function(name)
            {
                return this.markers.filter(function(obj)
                {
                    if (obj.school == name)
                    {
                        return obj;
                    }
                });
            },

            __fetchSubscriptions: function()
            {
                this.$http.get('/subscriptions/all', function(subscriptions)
                {
                    this.subscriptions = subscriptions;

                    this.$nextTick(function ()
                    {
                        this.__createMarkers();
                    }.bind(this))
                }.bind(this));
            },
        },

        ready: function()
        {
            this.__fetchSubscriptions();
        },
    });
</script>
