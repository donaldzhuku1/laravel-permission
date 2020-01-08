<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="{{asset('image/png')}}" sizes="16x16" href="img/favicon.png">
        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--Font Awesome-->
        <link href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="{{asset('/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
        <link href="{{asset('/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
        <link href="{{asset('/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">

        <!-- You can change the theme colors from here -->
        <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        @yield('head')

    </head>
<body>




        @yield('content')



<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>

<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('js/custom.js')}}"></script>
<script>
    $(function () {
        //ToolTips
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@yield('script')
    </body>
</html>
