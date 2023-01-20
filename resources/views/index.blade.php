@extends('layout.main')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('main')
    <div class="" style="background-color: #F9F9F9;">
        {{-- hero --}}
        <div class="lg:h-[100vh] h-[100vh] bg-cover bg-center flex flex-row justify-end items-center px-24 lg:pt-40 pt-20"
            style="background-image:url('images/profile1.jpeg.jpg')">
            <h1 class="text-2xl font-bold italic text-white w-7/12 lg:text-5xl"
                style="font-family: 'Philosopher', sans-serif;">YOUR TRUSTED SOLUTIONS FOR THE
                BEST PASSENGER
                AIRPORT
                HANDLING PARTNERS</h1>
        </div>

        {{-- Prof --}}
        <div class="reveal">
            <div class="flex justify-center pt-40 pb-10">
                <h1 class="font-thin italic text-2xl p-3 border-2 rounded">
                    ABOUT US
                </h1>
            </div>
            <div class="flex flex-col lg:flex-row items-center justify-center pb-24 px-4 lg:px-72 gap-8 lg:gap-0">
                <div class="basis-6/12">
                    <img class="" src="{{ URL('images/bestvectornobg.png') }}" alt="logo best about us">
                </div>
                <div class="basis-6/12 border border-white rounded-lg drop-shadow-lg" style="background-color: white">
                    <div class="flex flex-col p-14">
                        <h2 class="mb-5 font-extrabold text-3xl" style="font-family: 'Inter', sans-serif;">
                            YOUR TRUSTED SOLUTIONS FOR THE
                            BEST PASSENGER
                            AIRPORT
                            HANDLING PARTNERS
                        </h2>
                        <p class="text-lg text-normal" style="font-family: 'Manrope', sans-serif;">
                            BEST Airport Assistance
                            didirikan pada
                            awal tahun 2022, merupakan perusahaan
                            yang bergerak dalam
                            bidang jasa asistensi penumpang di Bandar Udara guna membantu kelancaran perjalanan saat
                            keberangkatan maupun kedatangan di Bandara.</p>
                        <div
                            class="flex flex-row lg:justify-between justify-around items-center gap-4 pt-4 overflow-x-auto">
                            <img class="lg:w-64 sm:w-72 lg:hidden xl:flex rounded-lg"
                                src="{{ URL('images/profile1.jpeg.jpg') }}" alt="">
                            <img class="lg:w-64 sm:w-72 rounded-lg" src="{{ URL('images/profile2.jpg') }}" alt="">
                        </div>
                        <a href="/about" class="mt-5 w-fit px-8 rounded-lg bg-yellow-300" style="">
                            <p class="text-white text-xl py-1">Learn More</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- strength --}}
        <div class="flex lg:flex-row flex-col items-center justify-between px-24 gap-10">
            <div class="flex flex-row">
                <div style="" class="p-10 rounded-lg bg-yellow-300">
                    <img src="{{ URL('images/bankcheck.png') }}" style="" class="w-16" alt="pricing logo">
                </div>
                <div class="flex flex-col justify-evenly lg:justify-between p-3">
                    <h2 class="font-bold text-4xl" style="font-family: 'Inter', sans-serif;">
                        Competitive Pricing
                    </h2>
                    <p class="text-lg" style="font-family: 'Inter', sans-serif;">
                        Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea
                    </p>
                </div>
            </div>
            <div class="flex flex-row">
                <div style="" class="p-10 rounded-lg bg-yellow-300">
                    <img src="{{ URL('images/medals.png') }}" style="" class="w-16" alt="pricing logo">
                </div>
                <div class="flex flex-col justify-evenly lg:justify-between p-3">
                    <h2 class="font-bold text-4xl" style="font-family: 'Inter', sans-serif;">
                        Best Services
                    </h2>
                    <p class="text-lg" style="font-family: 'Inter', sans-serif;">
                        Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea
                    </p>
                </div>
            </div>
            <div class="flex flex-row">
                <div style="" class="p-10 rounded-lg bg-yellow-300">
                    <img src="{{ URL('images/world-map.png') }}" style="" class="w-16" alt="pricing logo">
                </div>
                <div class="flex flex-col justify-evenly lg:justify-between p-3">
                    <h2 class="font-bold text-4xl" style="font-family: 'Inter', sans-serif;">
                        Worldwide Coverage
                    </h2>
                    <p class="text-lg" style="font-family: 'Inter', sans-serif;">
                        Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea
                    </p>
                </div>
            </div>
        </div>

        {{-- Services --}}
        <div class="flex justify-center pt-96 pb-10">
            <h1 class="font-thin italic text-2xl p-3 border-2 rounded">
                OUR SERVICES
            </h1>
        </div>
        <div id="services" class="flex lg:flex-row flex-col items-center justify-between pb-96 px-24 gap-10">
            <div class="relative rounded-xl" style="background-color: black">
                <img src="{{ URL('images/makkah.jpg') }}" alt=""
                    class="object-cover w-full h-full opacity-50 rounded-xl">
                <a href="#">
                    <div
                        class="absolute flex flex-col inset-0 items-center justify-center gap-5 hover:bg-opacity-80 hover:bg-yellow-300 hover:rounded-xl">
                        <img src="{{ URL('images/mosque.png') }}" class="w-40 border-8 p-2 rounded-lg" alt="">
                        <p class="text-center text-white font-bold text-4xl" style="font-family: 'Inter', sans-serif;">
                            UMRAH & HAJI
                        </p>
                    </div>
            </div>
            <div class="relative rounded-xl" style="background-color: black">
                <img src="{{ URL('images/turkey.jpg') }}" alt=""
                    class="object-cover w-full h-full opacity-50 rounded-xl">
                <div
                    class="absolute flex flex-col inset-0 items-center justify-center gap-5 hover:bg-opacity-80 hover:bg-yellow-300 hover:rounded-xl">
                    <img src="{{ URL('images/vacation.png') }}" class="w-40 border-8 p-2 rounded-lg" alt="">
                    <p class="text-center text-white font-bold text-4xl" style="font-family: 'Inter', sans-serif;">
                        TOUR
                    </p>
                </div>
                </a>
            </div>
        </div>

        {{-- akun hero --}}
        <div class="lg:h-[60vh] h-[100vh] bg-cover bg-center" style="background-image:url('images/heroakun2.jpg')">
            <div class="flex flex-col lg:flex-row justify-between items-center px-24 pt-24 gap-10">
                <div class="basis-1/2 flex flex-col text-white gap-3" style="font-family: 'Inter', sans-serif;">
                    {{-- text --}}
                    <p class="font-extralight text-3xl text-yellow-300">
                        MEGA OFFER
                    </p>
                    <h2 class="text-5xl font-bold">
                        <span class=" text-yellow-300">
                            30% OFF
                        </span>
                        For Services
                    </h2>
                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa eius quod explicabo repellendus
                        porro laboriosam, officiis libero, ad sint esse distinctio, eos illum recusandae dolorem a sapiente
                        repudiandae numquam reprehenderit!
                    </p>
                    <div class="flex flex-row gap-2">
                        <img src="{{ URL('images/check.png') }}" class="h-5" alt="">
                        <p class="">
                            Lorem ipsum dolor sit,
                        </p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <img src="{{ URL('images/check.png') }}" class="h-5" alt="">
                        <p class="">
                            Lorem ipsum dolor sit,
                        </p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <img src="{{ URL('images/check.png') }}" class="h-5" alt="">
                        <p class="">
                            Lorem ipsum dolor sit,
                        </p>
                    </div>
                </div>
                {{-- form --}}
                <div class="basis-1/3 w-3/4 lg:w-full">
                    <h2 class="bg-yellow-300 py-5 rounded-t-lg text-center text-white text-3xl font-bold"
                        style="font-family: 'Inter', sans-serif;">
                        SIGN UP HERE
                    </h2>
                    <form action="">
                        <div class="flex flex-col mx-auto py-5 gap-5 px-10 rounded-b-lg" style="background-color: white">
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                required placeholder="Your Name">
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                required placeholder="Your Email">
                            <input type="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5"
                                required placeholder="Password">
                            <button type="submit"
                                class="text-white bg-yellow-300 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Register
                                new account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Latest Services --}}
        <div class="flex justify-center pt-96 pb-10">
            <h1 class="font-thin italic text-2xl p-3 border-2 rounded">
                LATEST SERVICES
            </h1>
        </div>
        <div id="indicators-carousel" class="relative pb-96 px-24" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-96 w-full lg:h-96 lg:w-1/2 overflow-hidden rounded-lg mx-auto">
                <div class="flex flex-col">
                    <!-- Item 1 -->
                    <a href="/about" class="hidden duration-1000 ease-in image-cover" data-carousel-item="active">
                        <img src="{{ URL('images/latest1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 "
                            alt="...">
                    </a>
                    <!-- Item 2 -->
                    <a href="/about" class="hidden duration-1000 ease-in" data-carousel-item>
                        <img src="{{ URL('images/latest2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 "
                            alt="...">
                    </a>
                    <!-- Item 3 -->
                    <a href="/about" class="hidden duration-1000 ease-in" data-carousel-item>
                        <img src="{{ URL('images/latest3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 "
                            alt="...">
                    </a>
                    <!-- Item 4 -->
                    <a href="/about" class="hidden duration-1000 ease-in" data-carousel-item>
                        <img src="{{ URL('images/latest4.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 "
                            alt="...">
                    </a>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 left-1/2 pt-10">
                <button type="button" class="w-6 h-5 bg-yellow-300 rounded-md border border-yellow-300"
                    aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-6 h-5 bg-yellow-300 rounded-md border border-yellow-300"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-6 h-5 bg-yellow-300 rounded-md border border-yellow-300"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-6 h-5 bg-yellow-300 rounded-md border border-yellow-300"
                    aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            </div>
        </div>

    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
