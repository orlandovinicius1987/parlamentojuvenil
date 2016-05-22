<script>
    function isEmpty(obj)
    {
        return Object.keys(obj).length == 0;
    }

    var subscribe = new Vue(
    {
        el: '#vue-google-map',

        data: {
            schools: null,
            markers: [],
            timeout: 5000,
        },

        methods: {
            __createMarkers: function ()
            {
                this.schools.forEach(function(school)
                {
                    var found = this.__findMarkerByName(school.name);
                    var marker = null;

                    if (isEmpty(found))
                    {
                        var LatLng = {
                            lat: parseFloat(school.latitude),
                            lng: parseFloat(school.longitude),
                        };

                        var schoolInfo =
                                '<div id="info-window" class="info-window">' +
                                '      <div id="siteNotice"></div>' +
                                '      <h1 id="firstHeading" class="firstHeading">'+school.name+'</h1>' +
                                '      <div id="bodyContent">' +
                                '            <p>Inscrições: '+school.subscriptioncount+'</p>' +
                                '            <p>Cidade: '+school.city+'</p>' +
                                '            <p>Bairro: '+school.neighborhood+'</p>' +
                                '      </div>' +
                                '</div>';

                        marker = createGoogleMapsMarker(LatLng, school.name, schoolInfo);

                        if (marker)
                        {
                            var marker =
                            {
                                id: school.id,
                                school: school.name,
                            }

                            this.markers.push(marker);
                        }
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

            __scheduleFetch: function()
            {
                setTimeout(function ()
                {
                    this.__fetchSubscriptions();
                }.bind(this), this.timeout);
            },

            __fetchSubscriptions: function()
            {
                this.$http.get('/subscriptions/schools', function(schools)
                {
                    this.schools = schools;

                    this.$nextTick(function ()
                    {
                        this.__createMarkers();
                    }.bind(this))
                }.bind(this));

                this.__scheduleFetch();
            },
        },

        ready: function()
        {
            this.__fetchSubscriptions();
        },
    });
</script>
