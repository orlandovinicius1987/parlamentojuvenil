<section id="depoimentos" class="fundo-azul">
    <div id="depoimentos-feed" class="carousel slide depoimentos-feed" data-interval="false">
        {{--<div class="depo">--}}
        {{--<img class="img-responsive" src="/pj2016/images/twit.png" alt="twit">--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="text-center carousel-inner borda-preta">
                    <?php $active = 'active'; ?>

                    @foreach ($carrousel as $congressman)
                        <div class="item {{ $active }}">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 depoimentos-foto">
                                    <img src="{!! make_image_url($congressman['photo']) !!}" alt="" class="img-responsive">
                                </div>
                                <div class="col-xs-12 col-lg-8">
                                    <p class="depoimento">"{{ $congressman['testimonial'] }}"</p>
                                    <p class="nome">{{ $congressman['name'] }}</p>
                                    <p class="edicao">{{ $congressman['editions'] }}</p>
                                    <p class="cidade">{{ $congressman['city'] }}</p>
                                </div>
                            </div>

                        </div>

                        <?php $active = ''; ?>
                    @endforeach

                </div>
                <a class="depoimentos-control-left" href="#depoimentos-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="depoimentos-control-right" href="#depoimentos-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section><!--/#depoimentos-feed-->
