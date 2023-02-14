<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    @yield('styles')

    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body class="sidebar-fixed">

    <div class="container-scroller">
        @yield('navbar')
        @yield('sidebar')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
        
        @yield('footer')
    </div>

    @yield('scripts')

</body>

</html>
