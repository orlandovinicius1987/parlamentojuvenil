<!-- services -->
<section id="services" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <h6 class="heading-2">Veja o que mídia falou sobre Parlamento Juvenil nas edições anteriores.</h6>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container-fluid">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row wow fadeIn" data-wow-delay=".2s">
                <?php $count = 1;?>
                @foreach ($newspapers as $link)
                    <div class="col-md-3" style="text-align: center;">
                        <a href="{{ $link['pdf'] }}" target="_blank"><img src="{{ $link['jpg'] }}" alt=""/></a>
                        <div>
                            {{ $link['name'] }}
                            <br/>
                            {{ $link['year'] }}
                        </div>
                    </div>

                    @if ($count % 4 == 0)
                        </div>

                        <br/>

                        <div class="row wow fadeIn" data-wow-delay=".2s">
                    @endif

                    <?php $count++;?>
                @endforeach
            </div>
        </div>
    </div>
</section>
