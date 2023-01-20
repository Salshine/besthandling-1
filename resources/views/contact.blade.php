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
                style="font-family: 'Philosopher', sans-serif;">CONTACT US</h1>
        </div>
        {{-- Form --}}
        <form action="" class="py-24">
            <div class="flex flex-col mx-auto w-fit rounded-lg" style="background-color: white">
                <h2 class="bg-yellow-300 py-5 rounded-t-lg text-center text-white text-3xl font-bold"
                    style="font-family: 'Inter', sans-serif;">
                    Contact For Any Query
                </h2>
                <div class="flex flex-row px-24 gap-10 pt-10">
                    <div>
                        <label for="name" class="block mb-1 text-sm font-medium text-gray-900">
                            Name
                        </label>
                        <input type="text" id="name"
                            class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-yellow-300 focus:border-yellow-300">
                    </div>
                    <div>
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900">
                            Email
                        </label>
                        <input type="email" id="email"
                            class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-yellow-300 focus:border-yellow-300">
                    </div>
                </div>
                <div class="px-24 py-5">
                    <label for="subject" class="block mb-1 text-sm font-medium text-gray-900">
                        Subject
                    </label>
                    <input type="text" id="subject"
                        class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-yellow-300 focus:border-yellow-300">
                </div>
                <div class="px-24">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">
                        Message</label>
                    <textarea id="message" rows="8"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-yellow-300 focus:border-yellow-300"></textarea>
                </div>
                <div class="px-24 py-12">
                    <button type="submit"
                        class=" text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center ">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
