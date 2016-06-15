<section id="projects" class="fundo-azul">
    <div id="projects-feed" class="carousel slide projects-feed" data-interval="false">
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

                                <div class="col-xs-12 col-sm-5 nopadding">
                                    <img src="{!! make_image_url($congressman['photo']) !!}" alt="" class="">
                                </div>

                                <div class="col-xs-12 col-sm-7 nopadding conteudo">
                                    <div class="titulo-projeto">Projeto de Lei Nº 51212/2016 </div>
                                    <div class="corpo-projeto">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue tellus felis, ut semper nulla ultricies fermentum. Morbi aliquam mi id posuere elementum. Donec fermentum vel augue vel congue. Aenean at lorem a odio mattis tempor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed venenatis ut mi pretium ultricies. Morbi non metus accumsan, condimentum odio at, euismod libero. Vivamus ut fermentum velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                                        <p>Nam elementum odio et justo tempor rhoncus. Phasellus malesuada, tortor vitae faucibus cursus, est neque semper arcu, non suscipit nunc magna sed quam. Curabitur vel auctor tellus. Donec rutrum mollis lacinia. Phasellus vel arcu id ante sollicitudin tincidunt. Curabitur porta diam augue. Fusce et porta libero, id rhoncus sapien.</p></div>
                                </div>

                            </div>

                        </div>

                        <?php $active = ''; ?>
                    @endforeach

                </div>
                <a class="projects-control-left" href="#projects-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="projects-control-right" href="#projects-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section><!--/#projects-feed-->
