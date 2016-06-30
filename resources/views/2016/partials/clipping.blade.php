<section id="clippings-anteriores" class="pinboards fundo-azul2">
    <div class="container ">
        <div class="row text-center">
            <h2>Clipping Edição 2015</h2>

            <section id="pinBoot">
                @foreach($clipping as $item)
                    <article class="white-panel"><a href="{{ $item['pdf'] }}"><img src="{{ $item['jpg'] }}" alt=""></a>
                        <h4><a href="{{ $item['pdf'] }}">{{ $item['title'] }}</a></h4>
                        <p>{{ $item['lead'] }}</p>
                    </article>
                @endforeach
            </section>
        </div>

        <div class="row text-center">
            <button type="button" class="btn btn-default">Ver mais clippings</button>
        </div>
    </div>
</section>
