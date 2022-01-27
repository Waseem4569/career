<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<!--Bootstrap Js-->
<script src="{{asset('/frontend/js/jquery.js')}}"></script>
<!--Carousel Js-->
<script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>
<!--Video Slider Js-->
<script src="{{asset('/frontend/js/vide-slider.js')}}"></script>
<!--Bootstrap Js-->
<script src="{{asset('/frontend/js/bootstrap.js')}}"></script>

    <!--Bootstrap Js-->
    <script src="{{asset('/frontend/js/jquery.js')}}"></script>

    <!--Carousel Js-->
    <script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>

    <!--Video Slider Js-->
    <script src="{{asset('/frontend/js/vide-slider.js')}}"></script>

    <!--Bootstrap Js-->
    <script src="{{asset('/frontend/js/bootstrap.js')}}"></script>
    <!--fancybox-->
  <script src="{{asset('/frontend/js/fancybox.min.js')}}"></script>
<!-- data table script   -->
<script src="{{asset('/frontend/js/jquery.dataTables.min.js')}}"></script>

<script>
$(function (){
    $('.top-bar .dropdown').on('mouseenter click',function (){
        $(this).addClass('dropdown-top')
        $(this).find('.dropdown-menu').addClass('dropdown-menu-show').removeClass('show')
    })
    $('.top-bar .dropdown').on('mouseleave',function (){
        $(this).removeClass('dropdown-top')
        $(this).find('.dropdown-menu').removeClass('dropdown-menu-show show')
    })
    $('.main-meu .dropdown').on('mouseenter click',function (){
        $(this).find('.dropdown-menu').addClass('dropdown-menu-show').removeClass('show')
    })
    $('.main-meu .dropdown').on('mouseleave',function (){
        $(this).find('.dropdown-menu').removeClass('dropdown-menu-show show')
    })
    //Testimonial Slider
    $('.testimonial-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        autoplay:true,
        autoplayTimeout:5000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});
</script>
<!-- pakistan map img popup  -->
<script>
$(function() {
    $('.map-pop').on('click', function() {
        $('.pakmapimagepreview').attr('src', $(this).find('img').attr('src'));
        $('#pakmapimagemodal').modal('show');
    });
});
</script>
@stack('js')
</body>
</html>