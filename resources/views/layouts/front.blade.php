<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')- {{ env('APP_NAME') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    @stack('styles')
</head>

<body>
    @include('frontend.include.header')
    <!-- header end -->

    <main>
        @yield('content')
    </main>

    <!-- footer start -->
    @include('frontend.include.footer')

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
        function flashMessage(status, message) {
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                switch (status) {
                    case 'success':
                        toastr.success(message);
                        break;

                    case 'error':
                        toastr.error(message);
                        break;

                    case 'info':
                        toastr.info(message);
                        break;

                    case 'warning':
                        toastr.warning(message);
                        break;
                }
            }

            // session flash message
            @if (Session::get('success'))
                flashMessage('success', "{{ Session::get('success') }}")
            @elseif (Session::get('error'))
                flashMessage('error', "{{ Session::get('error') }}")
            @elseif (Session::get('info'))
                flashMessage('info', "{{ Session::get('info') }}")
            @elseif (Session::get('warning'))
                flashMessage('warning', "{{ Session::get('warning') }}")
            @endif
    </script>
    @stack('scripts')
</body>

</html>
