
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield("title")</title>

    <link href="{{ asset("assets/admin") }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset("assets/admin") }}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset("assets/admin") }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="{{ asset("assets/admin") }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset("assets/admin") }}/css/style.css" rel="stylesheet">
    @yield("css")

</head>

<body>

<div id="wrapper">
@include("admin._sidebar")
<div id="page-wrapper" class="gray-bg">
@include("admin._header")
@include("home.flash-message")
@yield("content")
@include("admin._footer")

</div>
</div>



<!-- Mainly scripts -->
<script src="{{ asset("assets/admin") }}/js/jquery-3.1.1.min.js"></script>
<script src="{{ asset("assets/admin") }}/js/popper.min.js"></script>
<script src="{{ asset("assets/admin") }}/js/bootstrap.js"></script>
<script src="{{ asset("assets/admin") }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{ asset("assets/admin") }}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="{{ asset("assets/admin") }}/js/plugins/flot/jquery.flot.js"></script>
<script src="{{ asset("assets/admin") }}/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset("assets/admin") }}/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="{{ asset("assets/admin") }}/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="{{ asset("assets/admin") }}/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="{{ asset("assets/admin") }}/js/plugins/peity/jquery.peity.min.js"></script>
<script src="{{ asset("assets/admin") }}/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset("assets/admin") }}/js/inspinia.js"></script>
<script src="{{ asset("assets/admin") }}/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="{{ asset("assets/admin") }}/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="{{ asset("assets/admin") }}/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="{{ asset("assets/admin") }}/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset("assets/admin") }}/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="{{ asset("assets/admin") }}/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="{{ asset("assets/admin") }}/js/plugins/toastr/toastr.min.js"></script>
@yield("jss")
</body>
</html>
