<!-- services -->
<section id="services" class="head">
    <div class="container" id="newspapers-anchor">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <h6 class="heading-2">Veja o que mídia falou sobre Parlamento Juvenil nas edições anteriores.</h6>
            </div>
        </div>
    </div>
</section>

<br><br><br>

<div class="owl-carousel" id="newspapers">
    @foreach ($newspapers as $link)
        <div style="text-align: center;">
            <a href="{{ $link['pdf'] }}" target="_blank"><img src="{{ $link['jpg'] }}" alt=""/></a>
            <div>
                {{ $link['name'] }}
                <br/>
                {{ $link['year'] }}
            </div>
        </div>
    @endforeach
</div>

<br><br><br>
