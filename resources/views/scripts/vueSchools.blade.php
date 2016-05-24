<script>
    if (jQuery("#vue-schools").length)
    {
        var emptySchool = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

        var vueSchools = new Vue(
        {
            el: '#vue-schools',

            data: {
                city: null,
                schools: emptySchool,
                school: '{{ isset($subscription) ? $subscription->school : '' }}',
            },

            methods: {
                __fetchSchools: function ()
                {
                    if (this.city)
                    {
                        this.$data.schools.length = 0;
                        this.$data.schools = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

                        this.$http.get('/schools/' + this.city, function (schools)
                        {
                            schools.forEach(newSchool);
                        });
                    }
                },

                __cityChanged: function ()
                {
                    this.school = '';

                    this.__fetchSchools();
                },
            },

            ready: function ()
            {
                this.__fetchSchools();
            }
        });

        function newSchool(element, index, array)
        {
            vueSchools.$data.schools.push({value: element.name, text: element.name});
        }
    }
</script>
