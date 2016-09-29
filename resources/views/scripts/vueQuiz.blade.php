@include('scripts.components.modal.template')

<script>
    // register modal component
    Vue.component('modal', {
        template: '#modal-template',
        props: {
            show: {
                type: Boolean,
                required: true,
                twoWay: true
            }
        }
    })

    if (jQuery("#vue-quiz").length)
    {
        var vueQuiz = new Vue({
            el: '#vue-quiz',

            data: {
                id: '{{ $itemId }}',
                baseUrl: '{{ route('quiz.index', ['year' => 2016]) }}',
                currentQuestion: 0,
                quiz: null,
                askForConfirmation: false,
            },

            methods: {
                loadQuestions: function () {
                    this.$http.get(this.baseUrl+'/'+this.id+'/questions', function (quiz)
                    {
                        this.quiz = quiz;
                    });
                },

                answerQuestion: function (answer) {
                    this.askForConfirmation = true;
                },

                sendAnsweredQuestion: function (answer) {
                    this.$http.get(this.baseUrl+'/'+this.id+'/answer/'+this.currentQuestion+'/'+answer, function (result)
                    {

                    });

                    this.currentQuestion++;
                },
            },
            
            ready: function() {
                this.loadQuestions();
            }
        });
    }
</script>


