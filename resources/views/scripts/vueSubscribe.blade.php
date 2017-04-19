<script>
    Vue.config.devtools = true

    if (jQuery("#subscribe").length)
    {
        var emptySchool = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

        var vueSubscribe = new Vue({
            el: '#subscribe',

            data: {
                cpf: '',
                cpfValid: false,
                cpfWasChecked: false,
                zipValid: false,
                address: "{!! old('address') ?: $student->address !!}",
                address_complement: "{!! old('address_complement') ?: $student->address_complement !!}",
                address_neighborhood: "{!! old('address_neighborhood') ?: $student->address_neighborhood !!}",
                address_city: "{!! old('address_city') ?: $student->address_city !!}",
                cpf: "{!! old('cpf') ?: $student->cpf !!}",
                birthdate: "{!! old('birthdate') ?: $student->birthdate !!}",
                city: "{!! old('city') ?: $student ? mb_strtoclean($student->city) : '' !!}",
                facebook: "{!! old('facebook') ?: $student->facebook !!}",
                social_name: "{!! old('social_name') ?: $student->social_name !!}",
                id_issuer: "{!! old('id_issuer') ?: $student->id_issuer !!}",
                registration: "{!! old('registration') ?: $student->registration !!}",
                email: "{!! old('email') ?: $student->email !!}",
                grade: "{!! old('grade') ?: $student->grade !!}",
                phone_home: "{!! old('phone_home') ?: $student->phone_home !!}",
                phone_cellular: "{!! old('phone_cellular') ?: $student->phone_cellular !!}",
                name: "{!! old('name') ?: $student->name !!}",
                zip_code: "{!! old('zip_code') ?: $student->zip_code !!}",
                gender: "{!! old('gender') ?: $student->gender !!}",
                gender2: "{!! old('gender2') ?: $student->gender2 !!}",
                id_number: "{!! old('id_number') ?: $student->id_number !!}",
                schools: emptySchool,
                elected: "{!! old('elected') ?: $student->elected !!}",
                school: "{!! old('school') ?: $student->school !!}",
            },

            methods: {
                checkCpf: function()
                {
                    var cpf = this.cpf.split('.').join("").split('-').join("").split('_').join("");

                    this.cpfValid = TestaCPF(cpf);

                    this.cpfWasChecked = true;
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

                        this.$http.get('http://viacep.com.br/ws/'+zip+'/json/').then(
                            function(response)
                            {
                                if (response.body.localidade)
                                {
                                    this.address_city = response.body.localidade;
                                    this.address = response.body.logradouro;
                                    this.address_neighborhood = response.body.bairro;
                                }
                            },

                            this.__requestError
                        );
                    }
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);
                },

                __fetchSchools: function (event)
                {
                    if (this.city)
                    {
                        console.log('fetchSchools/'+this.city);

                        this.$http.get('/schools/' + this.city).then(
                            function (response)
                            {
                                console.log(response);

                                this.schools = response.body;
                            },

                            this.__requestError
                        );
                    }
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);
                },

                __cityChanged: function (event)
                {
                    var city = '{!! old('city') ?: (isset($subscription) ? $subscription->city : '') !!}';

                    if (this.city !== city)
                    {
                        this.school = '';
                    }

                    this.__fetchSchools();
                },
            },

            watch: {
                city: function() {
                    this.__fetchSchools()
                },
            },

            mounted: function ()
            {
                this.__fetchSchools();
            },
        });
    }
</script>
