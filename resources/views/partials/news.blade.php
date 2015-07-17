<!-- call-to-action -->
<div class="call-to-action">
    <div class="container-fluid">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
                <h1 class="text-center">Notícias</h1><br><br><br>
                <?php $count = 1; ?>
                @foreach ($articles as $article)
                    <div class="col-md-6">
                        <div class="row">
                            <a data-target="#article_{{ $article['id'] }}" class="portfolio-link" data-toggle="modal">
                                <div class="col-md-4">
                                    <img src="{{ $article['image'] }}" width="99%" alt=""/>
                                </div>
                                <div class="col-md-6">
                                    <h5>{{ $article['date'] }}</h5>
                                    <h4>{{ $article['heading'] }}</h4>
                                    <h6>{{ $article['subheading'] }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>

                    @if ($count % 2 == 0)
                        </div>
                        <br>
                        <div class="row">
                    @endif

                    <?php $count++;?>
                @endforeach
            </div>
        </div>
    </div>
</div>


@foreach ($articles as $article)
    @include('partials.article', ['article' => $article])
@endforeach
