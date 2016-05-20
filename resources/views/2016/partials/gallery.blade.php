<section id="galeria" class="fundo-azul">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Galeria</h2>

                <div id="masonry-container" class="fluid masonry-container">
                    @include('2016.partials.gallery-iterate', ['images' => $gallery, 'kind' => 'new'])
                </div>
            </div>
        </div>
    </div>
</section>
