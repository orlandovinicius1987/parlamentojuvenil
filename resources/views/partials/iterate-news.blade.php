<?php $count = 1; ?>
<?php $articleCount = 1; ?>
@foreach ($articles as $article)
    @if ($articleCount >= $first && $articleCount <= $last)
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
    @endif

    <?php $articleCount++;?>
@endforeach
