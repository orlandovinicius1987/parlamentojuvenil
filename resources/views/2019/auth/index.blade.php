@extends( get_current_year().'.layouts.layout')

@section('contents')
    <section id="identify" class="identify-yourself">
        <div class="container">
            <div class="row text-center">
                <div class="offset-md-4 col-md-4">
                    <div>

                        <h3 class="identify-title">
                            @if (loggedUser()->is_voting)
                                Para votar você precisa se identificar.</h3>
                            @elseif (loggedUser()->is_flag_contest_subscribing)
                                Para inscrever a sua bandeira você precisa se identificar.
                            @elseif (loggedUser()->is_flag_contest_voting)
                                Para votar em uma bandeira você precisa se identificar.
                            @elseif (loggedUser()->is_training)
                                Para acessar o site da capacitação on-line, você precisa ser um(a) parlamentar juvenil. Por favor identifique-se:
                            @else
                                Identifique-se
                            @endif
                        </h3>
                    </div>

                    <div class="social-login">
                        <a href="{{ route('auth.social.redirect', ['facebook']) }}" class="btn btn-block btn-social btn-facebook">
                            <span class="fab fa-fw fa-facebook-f"></span>
                            Entrar com Facebook
                        </a>

                        <a href="{{ route('auth.social.redirect', ['twitter']) }}"  class="btn btn-block btn-social btn-twitter" >
                            <span class="fab fa-fw fa-twitter"></span>
                            Entrar com Twitter
                        </a>
                        <a href="{{ route('auth.social.redirect', ['instagram']) }}"  class="btn btn-block btn-social btn-instagram">
                            <span class="fab fa-fw fa-instagram"></span>
                            Entrar com Instagram
                        </a>
                        <a href="{{ route('auth.social.redirect', ['linkedin']) }}"  class="btn btn-block btn-social btn-linkedin">
                            <span class="fab fa-fw fa-linkedin"></span>
                            Entrar com Linkedin
                        </a>
                        <a href="{{ route('auth.social.redirect', ['youtube']) }}" class="btn btn-block btn-social btn-youtube" >
                            <span class="fab fa-fw fa-youtube-square"></span>
                            Entrar com Youtube
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="offset-md-3 col-md-6">
                    <div class="nao-possui-redes">
                        <a href="naotenhorede.html"><p><a href="{{ route('auth.login.email') }}">Caso você não esteja em nenhuma dessas redes sociais, clique aqui.</a></p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
