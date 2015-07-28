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
