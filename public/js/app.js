var emptySchool = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

var subscribe = new Vue({
    el: '#subscribe',

    data: {
        name: '',
        city: '',
        school: '',
        registration: '',
        gender: '',
        email: '',
        phone: '',
        schools: emptySchool
    },

    methods: {
        fetchSchools: function() {
            if (this.city)
            {
                this.$data.schools.length = 0;
                this.$data.schools = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

                this.$http.get('/schools/' + this.city, function(schools) {
                    schools.forEach(newSchool);
                })
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
