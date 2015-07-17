<!-- Portfolio Grid Section -->
<section id="portfolio" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <h1 class="heading">Parlamentares da {{ $edition }}a Edição</h1>
            </div>
        </div>
    </div>
</section>

<div class="portfolio">
    <div class="container-fluid">
        <div class="row">
            <?php $count = 1; ?>
            @foreach ($congressmen[$edition] as $link)
                <div class="col-sm-6 col-md-2 portfolio-item no-pad">
                    <a data-target="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-vimeo-square fa-4x"></i>
                            </div>
                        </div>
                        <img src="{{ $link }}" class="img-responsive" alt="">
                    </a>
                </div>

                @if ($count % 6 == 0)
                    </div>
                    <div class="row">
                @endif

                <?php $count++;?>
            @endforeach
        </div>
    </div>
</div>


{{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
    {{--<a data-target="#portfolioModal1" class="portfolio-link" data-toggle="modal">--}}
        {{--<div class="caption">--}}
            {{--<div class="caption-content">--}}
                {{--<i class="fa fa-youtube-square fa-4x"></i>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<img src="img/3.jpg" class="img-responsive" alt="">--}}
    {{--</a>--}}
{{--</div>--}}
{{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
    {{--<a data-target="#portfolioModal2" class="portfolio-link" data-toggle="modal">--}}
        {{--<div class="caption">--}}
            {{--<div class="caption-content">--}}
                {{--<i class="fa fa-vimeo-square fa-4x"></i>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<img src="img/1.jpg" class="img-responsive" alt="">--}}
    {{--</a>--}}
{{--</div>--}}
{{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
    {{--<a data-target="#portfolioModal3" class="portfolio-link" data-toggle="modal">--}}
        {{--<div class="caption">--}}
            {{--<div class="caption-content">--}}
                {{--<i class="fa fa-picture-o fa-4x"></i>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<img src="img/5.jpg" class="img-responsive" alt="">--}}
    {{--</a>--}}
{{--</div>--}}
{{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
    {{--<a data-target="#portfolioModal4" class="portfolio-link" data-toggle="modal">--}}
        {{--<div class="caption">--}}
            {{--<div class="caption-content">--}}
                {{--<i class="fa fa-picture-o fa-3x"></i>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<img src="img/8.jpg" class="img-responsive" alt="">--}}
    {{--</a>--}}
{{--</div>--}}

{{--<div class="row">--}}
    {{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
        {{--<a data-target="#portfolioModal5" class="portfolio-link" data-toggle="modal">--}}
            {{--<div class="caption">--}}
                {{--<div class="caption-content">--}}
                    {{--<i class="fa fa-picture-o fa-3x"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<img src="img/7.jpg" class="img-responsive" alt="">--}}
        {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
        {{--<a data-target="#portfolioModal6" class="portfolio-link" data-toggle="modal">--}}
            {{--<div class="caption">--}}
                {{--<div class="caption-content">--}}
                    {{--<i class="fa fa-picture-o fa-3x"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<img src="img/6.jpg" class="img-responsive" alt="">--}}
        {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
        {{--<a data-target="#portfolioModal7" class="portfolio-link" data-toggle="modal">--}}
            {{--<div class="caption">--}}
                {{--<div class="caption-content">--}}
                    {{--Caption Text--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<img src="img/2.jpg" class="img-responsive" alt="">--}}
        {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-6 col-md-3 portfolio-item no-pad">--}}
        {{--<a data-target="#portfolioModal8" class="portfolio-link" data-toggle="modal">--}}
            {{--<div class="caption">--}}
                {{--<div class="caption-content">--}}
                    {{--<i class="fa fa-picture-o fa-3x"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<img src="img/4.jpg" class="img-responsive" alt="">--}}
        {{--</a>--}}
    {{--</div>--}}
{{--</div>--}}
