<?php $count = 1; ?>
<?php $articleCount = 1; ?>
@foreach ($articles as $article)
    @if ($articleCount >= $first && $articleCount <= $last)
        <div class="col-xs-12 col-md-4 quadro-amarelo texto-preto" id="article_{{ $article['id'] }}">
            <div class="titulo borda-preta text-center">{{ $article['heading'] }}</div>

            <div class="thumbnail">
                <a href="#">
                    <img src="{!! make_image_url($article['image']) !!}" alt="">
                </a>
            </div>

            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                {{ $article['date'] }}

                @if ($article['subheading'])
                    - {{ $article['subheading'] }}
                @endif

                <div>
                    {!! $article['body'] !!}}
                </div>
            </div>

            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                <div class="pull-left">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </div>
                <div class="pull-right">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <div class="col-xs-12 hidden-lg hidden-md respiro"></div>

        @if ($count % 3 == 0)
            </div>
            <br>
            <div class="row">
        @endif

        <?php $count++;?>
    @endif

    <?php $articleCount++;?>
@endforeach
