<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/func.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/main.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/menu.js"></script>
<script type="text/javascript" src="<?php echo TEMA_URL;?>ast/js/jquery.pagination.js"></script>
<script src="https://leafo.net/sticky-kit/src/jquery.sticky-kit.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/validator.js"></script>
<script src="<?php echo TEMA_URL;?>ast/js/attrvalidate.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        if (Cookies.get('agree')) {
            //console.log('Cookie Kabul Edildi');
            $('.cookie').addClass('cookie-hidden');
        }
    });
    $("#information").accordion({
        heightStyle: "content",
        collapsible: true,
        active: false
    });

    $('.agree').click(function() {
        Cookies.set('agree', 'true', {
            expires: 360
        });
    });
</script>