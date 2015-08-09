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
        subscriptions: []
    },

    methods: {
        __fetchSubscriptions: function() {
            console.log('fetching 2...');

            this.$http.get('/subscriptions' , function(subscriptions) {
                this.subscriptions = subscriptions;
            });
        }
    }
});

function startFetchSubscriptionsClock()
{
    vueAdminIndex.__fetchSubscriptions();

    setTimeout(function ()
    {
        startFetchSubscriptionsClock();
    }, 5000);
}

startFetchSubscriptionsClock();
