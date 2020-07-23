<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS files -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/reset.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/libs/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/style.css">
    <!-- SCRITP files -->
    <script src="{{ url('/') }}/libs/jQuery/jquery2.1.4.min.js"></script>
    <script src="{{ url('/') }}/libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- SMART MENU files https://www.smartmenus.org/download/-->
    <script type="text/javascript" src="{{ url('/') }}/libs/bootstrap/js/jquery.smartmenus.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/libs/bootstrap/js/jquery.smartmenus.bootstrap.js"></script>


    <script src="{{ url('/') }}/js/rvtis.js"></script>

    @yield('script')

</head>
<body>
<section class="container-fluid">
    <section class="row">
        <header class="col-md-12">
            <div class="headerInline"><img src="{{ url('/') }}/images/rvt-logo.svg" id="logo"/></div>
            <div class="headerInline"><span id="title">PIKC RVT - uzņemšanas sistēma</span></div>
        </header>
    </section>
    <section class="row">
        <aside class="col-md-2">
            @yield('asideLeft')
        </aside>
        <main class="col-md-8">
            @yield('content')
        </main>
        <aside class="col-md-2">
            @yield('asideRight')
        </aside>
    </section>
</section>
@yield('modal')
</body>
</html>
