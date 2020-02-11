<!-- INSTAGRAM Section -->
@foreach($instagramPictures as $image)
    <div class="col-md-4">
        <img src=" {{ $image }}" alt="" />
    </div>
@endforeach
