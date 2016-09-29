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
                resultUrl: '{{ route('quiz.result', ['year' => 2016, 'id' => $itemId ]) }}',
                currentQuestion: 0,
                quiz: null,
                askForConfirmation: false,
                currentAnswer: null,
            },

            methods: {
                loadQuestions: function () {
                    this.$http.get(this.baseUrl+'/'+this.id+'/questions', function (quiz)
                    {
                        this.quiz = quiz;
                    });
                },

                answerQuestion: function (answer) {
                    this.currentAnswer = answer;
                    this.askForConfirmation = true;
                },

                cancelAnswer: function () {
                    this.askForConfirmation = false
                },

                sendAnsweredQuestion: function (answer) {
                    this.$http.get(this.baseUrl+'/'+this.id+'/answer/'+this.currentQuestion+'/'+this.currentAnswer);

                    this.askForConfirmation = false;

                    if (this.currentQuestion+1 >= Object.keys(this.quiz.questions).length)
                    {
                        console.log('GO!');
                        window.location = this.resultUrl;
                    }
                    else
                    {
                        this.currentQuestion++;
                    }
                },
            },
            
            ready: function() {
                this.loadQuestions();
            }
        });
    }
</script>


