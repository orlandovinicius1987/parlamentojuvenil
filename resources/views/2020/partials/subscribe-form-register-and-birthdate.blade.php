@extends( get_current_year().'.layouts.layout')

@section('contents')
    {{--@include('2016.partials.header-fixed')--}}


    <div class="container-fluid">

        <section id="subscribe" class="fundo-inscricao">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="subscribe-title">Insira os dados para a sua identificação:</h1>
                </div>
            </div>



            <div class="row">
                <form id="login" method="POST" action="{{ route('auth.student.login') }}">
                    <div class="form-subscribe-registration">

                        <div class="col-12">

                            {!! csrf_field() !!}

                            <label for="registration" class="control-label">Digite sua matrícula</label>
                            <input
                                    v-model="name"
                                    type="text"
                                    class="form-control input-lg"
                                    value="{{ Input::old('name') }}"
                                    placeholder="Digite sua matrícula"
                                    name="registration"
                                    id="registration"
                                    required data-validation-required-message="Por favor digite seu nome."
                            >
                        </div>

                        <div class="col-12 text-left">
                            <label for="birthdate" class="control-label">Data de nascimento</label>
                            <input
                                    v-model="birthdate"
                                    type="text"
                                    class="form-control input-lg"
                                    value="{{ Input::old('birthdate') }}"
                                    placeholder="Data de nascimento"
                                    name="birthdate"
                                    id="birthdate"
                                    required
                                    data-validation-required-message="Por favor digite sua data de nascimento."
                            >
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center mt-5">
                            <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </section>




    </div>




@stop

