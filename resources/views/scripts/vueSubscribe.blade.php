<script>
    Vue.config.devtools = true

    if (jQuery("#subscribe").length)
    {
        var emptySchool = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

        var vueSubscribe = new Vue({
            el: '#subscribe',

            data: {
                cpfValid: false,
                zipValid: false,
                address: "{{ $currentStudent->address or '' }}",
                address_complement: "{{ $currentStudent->address_complement or '' }}",
                address_neighborhood: "{{ $currentStudent->address_neighborhood or '' }}",
                address_city: "{{ $currentStudent->address_city or '' }}",
                cpf: "{{ $currentStudent->cpf or '' }}",
                birthdate: "{{ $currentStudent->birthdate or '' }}",
                city: "{{ $currentStudent->city or '' }}",
                facebook: "{{ $currentStudent->facebook or '' }}",
                social_name: "{{ $currentStudent->social_name or '' }}",
                id_issuer: "{{ $currentStudent->id_issuer or '' }}",
                registration: "{{ $currentStudent->registration or '' }}",
                email: "{{ $currentStudent->email or '' }}",
                grade: "{{ $currentStudent->grade or '' }}",
                phone_home: "{{ $currentStudent->phone_home or '' }}",
                phone_cellular: "{{ $currentStudent->phone_cellular or '' }}",
                name: "{{ $currentStudent->name or '' }}",
                zip_code: "{{ $currentStudent->zip_code or '' }}",
                gender: "{{ $currentStudent->gender or '' }}",
                gender2: "{{ $currentStudent->gender2 or '' }}",
                id_number: "{{ $currentStudent->id_number or '' }}",
                schools: emptySchool,
                elected: "{{ $currentStudent->elected or '' }}",
                school: "{{ $currentStudent->school or '' }}",
            },

            methods: {
                checkCpf: function()
                {
                    var cpf = jQuery('#cpf').val();

                    cpf = cpf.split('.').join("");
                    cpf = cpf.split('-').join("");
                    cpf = cpf.split('_').join("");

                    this.cpfValid = TestaCPF(cpf);
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
                },

                __fetchSchools: function (event)
                {
                    if (this.city)
                    {
                        this.$http.get('/schools/' + this.city, function (schools)
                        {
                            this.schools = schools;
                        });
                    }
                },

                __cityChanged: function (event)
                {
                    var city = '{{ Input::old('city') ?: (isset($subscription) ? $subscription->city : '') }}';

                    if (this.city !== city)
                    {
                        this.school = '';
                    }

                    this.__fetchSchools();
                },
            },

            watch: {
                'city': '__cityChanged',
            },

            ready: function ()
            {
                this.__fetchSchools();
            },
        });
    }
</script>
