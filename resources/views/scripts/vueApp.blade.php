<script>
    var emptySchool = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

    var subscribe = new Vue({
        el: '#subscribe',

        data: {
            address: null,
            address_complement: null,
            address_neighborhood: null,
            address_city: null,
            cpf: null,
            schools: emptySchool,
            cpfValid: false,
            zipValid: false
        },

        methods: {
            fetchSchools: function()
            {
                if (this.city)
                {
                    this.$data.schools.length = 0;
                    this.$data.schools = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

                    this.$http.get('/schools/' + this.city, function(schools) {
                        schools.forEach(newSchool);
                    });
                }
            },

            checkCpf: function()
            {
                var cpf = jQuery('#cpf').val();

                cpf = cpf.split('.').join("");
                cpf = cpf.split('-').join("");
                cpf = cpf.split('_').join("");

                this.cpfValid = TestaCPF(cpf);

                console.log(this.cpfValid);
            },

            checkZip: function()
            {
                var zip = jQuery('#zip_code').val();

                zip = zip.split('.').join("");
                zip = zip.split('-').join("");
                zip = zip.split('_').join("");

                if (zip.length == 8)
                {
                    this.zipValid = true;

                    this.$http.get('http://viacep.com.br/ws/'+zip+'/json/', function(zip)
                    {
                        if (zip.localidade)
                        {
                            this.address_city = zip.localidade;
                            this.address = zip.logradouro;
                            this.address_neighborhood = zip.bairro;
                        }
                    });
                }
            }
        }
    });

    Vue.transition('stagger', {
        stagger: function (index) {
            return Math.min(300, index * 50)
        }
    });

    function newSchool(element, index, array)
    {
        subscribe.$data.schools.push({value: element.name, text: element.name});
    }

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
            ordertype: '',
        },

        methods: {
            __formatDates: function () {
                var items = clone(this.subscriptions);

                items.forEach(function(object) {
                    if ( ! object.lastsubscription)
                    {
                        object.lastsubscription = '1970-10-31 09:35:13';
                    }
                    object.formatteddate = this.__formatDate(object.lastsubscription);
                    object.index = Date.now();
                }.bind(this));

                this.subscriptions = clone(items);

                this._digest();

                setTimeout(function ()
                {
                    vueAdminIndex.__formatDates();
                }, 1000);
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
                    this.ordertype = this.ordertype == '' ? 'reverse' : '';

                    return;
                }

                this.orderby = field;
            },

            __formatDate: function(date) {
//                if ( ! date)
//                {
//                    return '';
//                }
//
//                var rWhen = ' atrás';
//
//                var present = moment();
//
//                date = moment(date).subtract(3, 'hours');
//
//                var rDate = date.format("DD/MM/YYYY");
//                var rTime = date.format("HH:mm");
//
//                var rDays = present.diff(date, 'days');
//
//                present = present.subtract(rDays, 'days');
//                var rHours = present.diff(date, 'hours');
//
//                present = present.subtract(rHours, 'hours');
//                var rMinutes = present.diff(date, 'minutes');
//
//                present = present.subtract(rMinutes, 'minutes');
//                var rSeconds = present.diff(date, 'seconds');
//
//                isTooOld = rDays > 15000;
//
//                rDays = rDays ? rDays + " dia"+(rDays > 1 ? 's' : '') : '';
//
//                rHours = rHours ? (rDays ? ", " : "") + rHours + " hora"+(rHours > 1 ? 's' : '') : '';
//
//                rMinutes = rMinutes ? (rDays || rHours ? ", " : "") + rMinutes + " minuto"+(rMinutes > 1 ? 's' : '') : '';
//
//                rSeconds = rSeconds ? (rDays || rHours || rMinutes ? ", " : "") + rSeconds + " segundo"+(rSeconds > 1 ? 's' : '') : '';
//
//                if ((rDays + rHours + rMinutes) == '')
//                {
//                    rWhen = rSeconds + " atrás";
//                }
//
//                if (isTooOld)
//                {
//                    return '';
//                }
//
//                return rDays + rHours + rMinutes + rWhen + " (" + rDate + " às " + rTime + ")";

                return '';
            }
        }
    });

    var vueGallery = new Vue({
        el: '#vue-gallery',

        data: {

        },

        methods: {
            __show: function (which) {
                jQuery('#more-gallery-'+which).show();

                jQuery('#more-gallery-'+which+'-button').hide('slow');

                jQuery('html, body').animate({
                    scrollTop: jQuery(window).scrollTop() + 100
                });
            }
        }
    });

    Vue.filter('moreThanOneSchool', function (value) {
        if (vueAdminIndex.$data.filterSchools)
        {
            return value.filter(schoolGreaterThanOne);
        }

        return value;
    });

    Vue.filter('sort', function (value)
    {
        var sorter = function(a, b)
        {
            var va = (a === null) ? "" : "" + a,
                    vb = (b === null) ? "" : "" + b;

            return va > vb ? 1 : ( va === vb ? 0 : -1 );
        };

        if (vueAdminIndex.$data.orderType == 'reverse')
        {
            return value.reverse(sorter);
        }

        return value.sort(sorter);
    });

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

        this.pusherChannel = this.pusher.subscribe('subscription.updated');

        this.pusherChannel.bind('App\\Events\\SubscriptionUpdated', function(message) {
            vueAdminIndex.__fetchSubscriptions();
        });

        console.log('Pusher loaded');
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

    startFetchSubscriptionsClock();
</script>
