<!-- scripts.blade.php -->

<script src="http://cdn.jsdelivr.net/masonry/2.1.08/jquery.masonry.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.lazyload/1.8.4/jquery.lazyload.js"></script>

<script>
    jQuery(document).ready(function() {
        var $container = $('#masonry-container');
        $container.imagesLoaded(function () {
            $container.masonry({
                itemSelector: '.item',
                containerStyle: { position: 'relative' },
                columnWidth: function (containerWidth) {
                    return containerWidth / 12;
                }
            });
            $('.item img').addClass('not-loaded');
            $('.item img.not-loaded').lazyload({
                effect: 'fadeIn',
                load: function () {
                    // Disable trigger on this image
                    $(this).removeClass("not-loaded");
                    $container.masonry('reload');
                }
            });
            $('.item img.not-loaded').trigger('scroll');
        });
    });
</script>

@include('scripts.owl')
@include('scripts.mask')
@include('scripts.vueApp')
@include('scripts.pinboard')
