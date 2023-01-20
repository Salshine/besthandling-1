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
                style="font-family: 'Philosopher', sans-serif;">OUR SERVICES</h1>
        </div>
        <div class="">
            <h2 class="text-center text-9xl p-96">
                COMING SOON
            </h2>
        </div>
    @endsection

    @section('footer')
        @include('partials.footer')
    @endsection
