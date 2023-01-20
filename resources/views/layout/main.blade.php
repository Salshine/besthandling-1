<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="{{ URL::asset('js/fileone.css') }}" /> --}}


    {{-- Google Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Tangerine:wght@700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Tangerine:wght@700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Tangerine:wght@700&display=swap"
        rel="stylesheet">



    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <style>
        * {}

        .reveal {
            position: relative;
            transform: translateY(150px);
            opacity: 0;
            transition: all 2s ease-in;
        }

        .reveal.active {
            transform: translateY(0px);
            opacity: 1;
        }
    </style>
</head>

<body>
    @yield('navbar')
    @yield('main')
    @yield('footer')
    @yield('script')
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');

            for (var i = 0; i < reveals.length; i++) {

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>
</body>

</html>
