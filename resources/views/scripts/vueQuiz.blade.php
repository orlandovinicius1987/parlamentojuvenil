<!-- template for the modal component -->
<script type="x/template" id="modal-template">
    <div class="modal-mask" v-show="show" transition="modal">
        <div class="modal-wrapper">
            <div class="modal-container">

                <div class="modal-header">
                    <slot name="header">
                        default header
                    </slot>
                </div>

                <div class="modal-body">
                    <slot name="body">
                        default body
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        default footer
                        <button class="modal-default-button"
                        @click="show = false">
                        OK
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
</script>

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


