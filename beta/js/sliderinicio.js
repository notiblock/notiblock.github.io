<!-- it works the same with all jquery version from 1.x to 2.x -->
<script src="js/jquery.min.js"></script>
<script src="ext/jssor/js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 4
            }
        };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>