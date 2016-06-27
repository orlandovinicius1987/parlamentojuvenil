
<section id="twitter"  class="fundo-azul">
    <div id="twitter-feed" class="carousel slide" data-interval="false">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="text-center carousel-inner center-block quadro-amarelo borda-preta">

                    <?php $active = 'active'; ?>

                    @foreach ($carrousel as $congressman)

                    <div class="item {{ $active }}">
                        <img class="foto" src="{!! make_image_url($congressman['photo']) !!}" alt="">
                        <p class="depoimento">&ldquo;{{ $congressman['testimonial'] }}"</p>
                        <p class="nome">{{ $congressman['name'] }}</p>
                        <p class="edicao">{{ $congressman['editions'] }}</p>
                        <p class="cidade">{{ $congressman['city'] }}</p>
                    </div>


                   {{-- <div class="item">
                        <img src="images/twitter/depoimento2.png" alt="">
                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                        <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
                    </div>
                    <div class="item">
                        <img src="images/twitter/depoimento3.png" alt="">
                        <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                        <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
                    </div>
--}}

                        <?php $active = ''; ?>
                    @endforeach
                </div>
                <a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>




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
