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

<div class="owl-carousel" id="parlamentares-{{ $edition }}a">
    @foreach ($congressmen[$edition] as $link)
        <div>
            <a data-target="#portfolioModal2" data-toggle="modal">
                <img src="{{ $link }}" class="img-responsive" alt="">
            </a>
        </div>
    @endforeach
</div>

