<!-- template for the modal component -->
<script type="x/template" id="modal-template">
    <div class="modal-mask" v-show="show" transition="modal">
        <div class="modal-wrapper">
            <div class="modal-container">
                <div class="modal-header">
                    <slot name="header">
                        Resposta
                    </slot>
                </div>

                <div class="modal-body">
                    <slot name="body">
                        Confirma o envio desta resposta?
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        <button class="modal-default-button"
                        @click="this.$root.sendAnsweredQuestion()">
                        SIM
                        </button>

                        <button class="modal-default-button"
                        @click="this.$root.cancelAnswer()">
                        NÃO
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
</script>
