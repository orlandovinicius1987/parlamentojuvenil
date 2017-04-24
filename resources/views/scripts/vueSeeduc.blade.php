<script>
    if (jQuery("#vue-admin-seeduc").length)
    {
        var vueSeeduc = new Vue({
            el: '#vue-admin-seeduc',

            data: {
                registration: '',
                birthdate: '',
                name: '',
                students: [],
                searching: false,
            },

            methods: {
                __search: function () {
                    this.searching = true;

                    var url = '/api/v1/search/seeduc?registration='+this.registration+'&birthdate='+this.birthdate+'&name='+this.name;

                    this.$http.get(url).then(
                        function(response) {
                            this.searching = false;

                            this.students = response.body;
                        },

                        this.__requestError
                    );
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);

                    this.searching = false;
                },
            },
        });
    }
</script>


