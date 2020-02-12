<!-- INSTAGRAM Section -->


<div class="container-fluid instagram-images">
    <div class="row">

        @foreach($instagramPictures as $image)
            <div class="col-md-3">
                <img src=" {{ $image }}" alt="" class="img-fluid" />
            </div>
        @endforeach

    </div>
</div>


