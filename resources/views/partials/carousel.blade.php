<?php $active = 'active'; ?>

@foreach ($congressmen as $link)
    <div class="item {{ $active }}">
        <img src="{{ $link }}" alt="">
        <div class="carousel-caption">
            <p>"O Parlamento Juvenil mudou a minha vida"</p>
            <p class="carousel-name">João da Silva, Magé, Parlamentar Juvenil na 6a Edição</p>
        </div>
    </div>
    <?php $active = ''; ?>
@endforeach


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
