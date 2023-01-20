@extends('layout.main')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('main')
    <div class="" style="background-color: #F9F9F9;">
        {{-- hero --}}
        <div class="lg:h-[80vh] h-[30vh] bg-cover bg-center flex flex-row justify-end items-center px-40 lg:pt-40 pt-20"
            style="background-image:url('images/heropict1.jpg')">
            <h1 class="text-5xl font-bold italic text-white w-7/12 lg:text-8xl text-right"
                style="font-family: 'Philosopher', sans-serif;">ABOUT US</h1>
        </div>

        {{-- Prof --}}
        <div class="flex flex-col lg:flex-row items-center justify-center py-56 px-4 lg:px-72 gap-8 lg:gap-0">
            <div class="basis-6/12">
                <img class="" src="{{ URL('images/bestvectornobg.png') }}" alt="logo best about us">
            </div>
            <div class="basis-6/12 border border-white rounded-lg drop-shadow-lg" style="background-color: white">
                <div class="flex flex-col p-14">
                    <p class="mb-5 text-lg font-semibold" style="color: #051B70">ABOUT US</p>
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
                    <div class="flex flex-row lg:justify-between justify-around items-center gap-4 pt-4 overflow-x-auto">
                        <img class="lg:w-64 sm:w-72 lg:hidden xl:flex rounded-lg" src="{{ URL('images/makkah.jpg') }}"
                            alt="">
                        <img class="lg:w-64 sm:w-72 rounded-lg" src="{{ URL('images/turkey.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- strength --}}
        <div class="flex lg:flex-row flex-col items-center justify-between px-24 gap-10 pb-24">
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
    @endsection

    @section('footer')
        @include('partials.footer')
    @endsection
