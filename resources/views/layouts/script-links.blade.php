<!-- Jquery Min JS -->
<script src="{{asset('temp/nivo/assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{asset('temp/nivo/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Meanmenu Min JS -->
<script src="{{asset('temp/nivo/assets/js/meanmenu.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{asset('temp/nivo/assets/js/wow.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('temp/nivo/assets/js/owl.carousel.min.js')}}"></script>
<!-- Imagelightbox Min JS -->
<script src="{{asset('temp/nivo/assets/js/imagelightbox.min.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('temp/nivo/assets/js/appear.min.js')}}"></script>
<!-- Odometer Min JS -->
<script src="{{asset('temp/nivo/assets/js/odometer.min.js')}}"></script>
<!-- Mixitup Min JS -->
<script src="{{asset('temp/nivo/assets/js/mixitup.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('temp/nivo/assets/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('temp/nivo/assets/js/contact-form-script.js')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{asset('temp/nivo/assets/js/ajaxchimp.min.js')}}"></script>

@livewireScripts

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</script>
@include('sweetalert::alert')

<x-livewire-alert::scripts />

@stack('scripts')

@if (\Illuminate\Support\Facades\App::getLocale() == 'ar')
    <!-- Custom JS -->
    <script src="{{asset('temp/nivo/assets/js/custom-rtl.js')}}"></script>
@else
    <!-- Custom JS -->
    <script src="{{asset('temp/nivo/assets/js/custom.js')}}"></script>
@endif
