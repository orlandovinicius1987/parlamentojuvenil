<!-- testimonials -->
<section id="testimonials">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="3"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="4"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="5"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="6"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php $active = 'active'; ?>

                        @foreach ($carrousel as $congressman)
                            <div class="item {{ $active }}">
                                <img src="{{ $congressman['url'] }}" alt="">
                                <div class="carousel-caption">
                                    <p>"O Parlamento Juvenil mudou a minha vida"</p>
                                    <p class="carousel-name">{{ $congressman['name'] }}, {{ $congressman['city'] }}, Parlamentar Juvenil na 6a Edição</p>
                                </div>
                            </div>
                            <?php $active = ''; ?>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


{{--<div class="item active">--}}
    {{--<img src="http://parlamentojuvenil.aloalerj.com/files/Applications/ParlamentoJuvenil/parlamentares/fotos/alex.jpg" alt="">--}}
    {{--<div class="carousel-caption">--}}
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, soluta.</p>--}}
        {{--<p class="carousel-name">Richard Miles, SomeCompany.com</p>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="item">--}}
    {{--<img src="http://parlamentojuvenil.aloalerj.com/files/Applications/ParlamentoJuvenil/parlamentares/fotos/mari.jpg" alt="">--}}
    {{--<div class="carousel-caption">--}}
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet et nisi omnis similique.</p>--}}
        {{--<p class="carousel-name">Jonnie Doe, SomeCompany.com</p>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="item">--}}
    {{--<img src="http://parlamentojuvenil.aloalerj.com/files/Applications/ParlamentoJuvenil/parlamentares/fotos/ka.jpg" alt="">--}}
    {{--<div class="carousel-caption">--}}
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>--}}
        {{--<p class="carousel-name">Jane Roe, SomeCompany.com</p>--}}
    {{--</div>--}}
{{--</div>--}}
