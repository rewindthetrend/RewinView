<!DOCTYPE html>
<html lang="en">
            <head>
                @include('partials._head')
            </head>
                <body class="hold-transition sidebar-mini">
                    <div class="wrapper">
                      @include('partials._navbar')
                      @include('partials._main_sidebar')
                      <div class="content-wrapper">
                      @include('partials._pageheader')
                          <div class="container">
                            @include('partials._messages')
                              @yield('content')
                            </div>

                            </div>
                          @include('partials._right_sidebar')
                          @include('partials._mainfooter')
                    </div>
            <script src="/js/app.js"></script>
</body>
</html>
