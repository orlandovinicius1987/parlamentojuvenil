<script>
    if (jQuery("#vue-quiz").length)
    {
        var vueQuiz = new Vue({
            el: '#vue-quiz',

            data: {
                id: '{{ $itemId }}',
                baseUrl: '{{ route('quiz.index', ['year' => 2016]) }}',
                currentQuestion: 0,
                questions: [],
            },

            methods: {
                loadQuestions: function () {
                    this.$http.get(this.baseUrl+'/'+this.id+'/questions', function (questions)
                    {
                        this.questions = questions;
                    });
                }
            },
            
            ready: function() {
                this.loadQuestions();
            }
        });
    }
</script>
