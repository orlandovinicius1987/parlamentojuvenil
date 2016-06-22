<script>
    if (jQuery("#vue-admin-index").length)
    {
        var vueAdminIndex = new Vue({
            el: '#vue-admin-index',

            data: {
                total: 0,
                subscriptions: [],
                hash: '',
                cancelled: 0,
                citiesIn: 0,
                citiesOut: 0,
                filterSchools : false,
                orderby: 'city',
                ordertype: 1,
            },

            methods: {
                __formatDates: function () {
                    var items = clone(this.subscriptions);

                    items.forEach(function(object)
                    {
                        object.formatteddate = this.__formatDate(object.lastsubscription);
                        object.lastsubscription = new Date(object.lastsubscription).getTime() / 1000;
                        object.index = Date.now();
                    }.bind(this));

                    this.subscriptions = clone(items);

                    this._digest();

//                    setTimeout(function ()
//                    {
//                        vueAdminIndex.__formatDates();
//                    }, 1000);
                },

                __fetchSubscriptions: function() {
                    this.$http.get('/subscriptions' , function(subscriptions) {
                        this.subscriptions = subscriptions;
                        this.__formatDates();
                        this.__countSubscriptions();
                    });
                },

                __countSubscriptions: function () {
                    this.total = 0;
                    this.cancelled = 0;

                    this.subscriptions.forEach(function(item) {
                        vueAdminIndex.$data.total += item.subscriptioncount;
                        vueAdminIndex.$data.cancelled += item.cancelledcount;
                        vueAdminIndex.$data.citiesIn = item.citiesin;
                        vueAdminIndex.$data.citiesOut = item.citiesout;
                    })
                },

                __clickFilterSchools: function() {
                    this.filterSchools = !this.filterSchools;
                },

                __changeOrder: function(field) {

                    if (this.orderby == field)
                    {
                        this.ordertype = this.ordertype * -1;

                        return;
                    }

                    this.ordertype = 1;

                    this.orderby = field;
                },

                __formatDate: function(date)
                {
                    return date;
                },
            },

            ready: function ()
            {
                this.__fetchSubscriptions();
            }
        });
    }
</script>


