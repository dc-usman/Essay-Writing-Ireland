@extends('layouts.web')

@section('title', $service->title ?? "-")
@section('description', $service->meta_description  ?? "-")
@section('canonical', $service->canonical  ?? "-")

@section('content')
    <style>
        /* Core CSS */
        .service-section h1 {
            --tw-text-opacity: 1;
            color: rgb(37 99 235/ var(--tw-text-opacity));
            font-weight: bold;
            font-size: 2.25rem;
            line-height: 2.5rem;
            margin: 1rem 0;
        }
        .service-section h2,h3 {
            --tw-text-opacity: 1;
            color: rgb(37 99 235/ var(--tw-text-opacity));
            font-size: 2rem;
            line-height: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }
        .service-section p{
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .service-section a{
            --tw-text-opacity: 1;
            color: rgb(37 99 235/ var(--tw-text-opacity));
            font-weight: 700;
        }
        .service-section a:hover{
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }
        .service-section ul{
            color: #333;
            list-style-type: disc;
        }
        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }
        .service-section ul{
            margin-left: 1rem;
        }
        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
            }
            .service-section ul{
                margin-left: 2.5rem;
            }
        }
        /* sm and greater screen size  screen size */
        /* @media (min-width: 640px) {

        } */

    </style>

    {{-- Full Flag with Navbar --}}
    <div class="w-full xl:bg-flag-uae bg-no-repeat bg-contain bg-right 3xl:bg-none">
        {{-- Navbar --}}
        <div class="w-full text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                    <a class="flex items-center py-4 px-2" href="{{ route('home') }}">
                        <img src="{{ asset('imgs/logo.png') }}" alt="Logo" class="h-[6rem] mt-3">
                    </a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

                    <a href="{{route('home')}}" class="block font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">Home</a>

                    <a href="{{route('about')}}" class="block font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">About</a>

                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="block w-full text-left font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">
                            <span>Services</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="hidden absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-40" :class="{'hidden': !open}">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                @if (!empty($services))
                                    @foreach ($services as $service)
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <a href="{{route('contact')}}" class="block font-semibold text-secondary hover:text-primary-light py-2 md:mx-2 px-5">Contact</a>

                    <div class="flex flex-col md:flex-row  md:items-center my-3 mx-3 lg:my-0 md:space-x-1 space-y-2 md:space-y-0 ">
                        <a href="{{route('reviews')}}" class="btn-primary">
                            Reviews
                        </a>
                        <a href="{{route('order')}}" class="btn-primary-outline break-normal" style="background-color: rgb(255, 255, 255, 0.6);">
                            Order Now
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        {{-- Hero Section --}}
        <div class="container mx-auto px-4">
            <div class="flex flex-col space-y-4 my-4 md:my-0 lg:flex-row mx-4">
                <div class="w-full lg:w-1/2 lg:py-20 px-4">
                    <div class="relative space-y-4">
                        <div class="my-3 mx-2 text-center lg:text-left ">
                            <div class="hero-heading mb-4 text-center">
                                {{ $service->name }}
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center space-y-3 md:flex-row md:space-y-0 md:space-x-6 p-1">
                            <div class="space-y-1">
                                <div class="text-primary-light text-6xl font-bold"><span id="count-up-a" class="counterup"
                                        data-value="98.2">0</span>.2%</div>
                                <div class="text-lg text-center">
                                    Orders Arrive Timely
                                </div>
                            </div>
                            <div class="space-y-1">
                                <div class="text-primary-light text-6xl font-bold"><span id="count-up-b" class="counterup"
                                        data-value="91">0</span>.0%</div>
                                <div class="text-lg text-center">
                                    Report Better Grades
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col bg-white border border-gray-200 shadow-lg items-center sm:flex-row sm:justify-center md:flex-row lg:flex-row space-x-4 py-2">
                            <div class="">
                                <img src="../imgs/reviewsbank.png" alt="UAE Flag" class="mx-auto h-10">
                                <span
                                    class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none hover:text-blue-400 text-lg  ml-2">ReviewsBank</span>
                                <ul class="flex justify-center">
                                    <li class="mr-1">4.9</li>
                                    <li class="my-auto text-yellow-500">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                    viewBox="0 0 172 172" style=" fill:#000000;" class="mx-auto h-10">
                                    <defs>
                                        <linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317"
                                            gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1">
                                            <stop offset="0" stop-color="#18a878"></stop>
                                            <stop offset="1" stop-color="#31dcb9"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                        style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="url(#color-1_8ggStxqyboK5_gr1)">
                                            <path
                                                d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <span
                                    class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none hover:text-blue-400 text-lg  ml-4">Trustpilot</span>
                                <ul class="flex justify-center">
                                    <li class="mr-1">4.9</li>
                                    <li class="my-auto text-yellow-500">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="">
                                <svg class="h-8 mx-auto my-1" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 171.54 155.41"><defs><style>.cls-1{fill:#ef6b25;}.cls-2{fill:#fff;}</style></defs><title>Artboard 3ldpi</title><path class="cls-1" d="M140.47,124.23,171.54,155c-2.4.18-3.55.34-4.7.34-30,0-59.89.09-89.84,0-37.71-.13-70.89-29-76.19-66.22a77.83,77.83,0,0,1,153.32-26.6c4.17,21.22,0,40.78-11.9,58.78C141.61,122.25,141.07,123.24,140.47,124.23ZM47.56,114.1c.06,3.42,2.84,5,6.32,3.27,6.63-3.36,13.26-6.74,19.69-10.45,3.15-1.83,5.66-1.65,8.72.09,6.2,3.54,12.53,6.86,18.94,10,1.46.71,4.11,1.11,5,.31,1.16-1,1.71-3.5,1.47-5.2-1-7.18-2.4-14.31-3.7-21.45a7.45,7.45,0,0,1,2.6-7.56c5.42-4.88,10.61-10,15.68-15.25,1.13-1.16,2.19-3.44,1.78-4.72s-2.61-2.56-4.2-2.84C112.27,59,104.6,58.11,97,56.72a7.57,7.57,0,0,1-4.73-3.24c-3.36-6.12-6.14-12.56-9.46-18.71-1.12-2.07-3.23-3.6-4.89-5.38-1.68,1.72-3.84,3.19-5,5.23-3.28,6-6.23,12.2-9.16,18.38-1.12,2.38-2.44,3.66-5.36,4-7.51.79-15,2-22.43,3.34-1.62.28-4,1.48-4.31,2.67-.35,1.49.69,3.82,1.88,5.07,4.73,5,9.57,9.87,14.75,14.35,3.27,2.82,3.93,5.66,3,9.73C49.84,99.35,48.83,106.69,47.56,114.1Z"/><path class="cls-2" d="M47.56,114.1c1.27-7.41,2.28-14.75,3.85-22,.88-4.07.22-6.91-3-9.73C43.18,77.91,38.34,73,33.61,68c-1.19-1.25-2.23-3.58-1.88-5.07C32,61.78,34.42,60.58,36,60.3,43.48,59,51,57.75,58.47,57c2.92-.3,4.24-1.58,5.36-4,2.93-6.18,5.88-12.38,9.16-18.38,1.12-2,3.28-3.51,5-5.23,1.66,1.78,3.77,3.31,4.89,5.38,3.32,6.15,6.1,12.59,9.46,18.71A7.57,7.57,0,0,0,97,56.72c7.57,1.39,15.24,2.25,22.83,3.6,1.59.28,3.77,1.54,4.2,2.84s-.65,3.56-1.78,4.72C117.21,73.12,112,78.25,106.6,83.13a7.45,7.45,0,0,0-2.6,7.56c1.3,7.14,2.69,14.27,3.7,21.45.24,1.7-.31,4.17-1.47,5.2-.89.8-3.54.4-5-.31-6.41-3.16-12.74-6.48-18.94-10-3.06-1.74-5.57-1.92-8.72-.09-6.43,3.71-13.06,7.09-19.69,10.45C50.4,119.14,47.62,117.52,47.56,114.1Z"/></svg>
                                <span
                                    class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none hover:text-blue-400 text-lg  ml-4">Sitejabbar</span>
                                <ul class="flex justify-center">
                                    <li class="mr-1">4.9</li>
                                    <li class="my-auto text-yellow-500">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="hidden lg:block w-1/4"></div> --}}
                <div class="w-full lg:w-1/2  bg-center">
                    <div class="max-w-xs m-auto mt-20" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
                        <h4 class="font-bold title-font text-center text-2xl bg-gradient-to-r from-primary-light to-primary-dark text-white py-3 px-7 rounded-t-lg">
                            Calculate Your Price
                        </h4>
                        <div class="shadow-md rounded-b-lg p-5 flex flex-col md:ml-auto w-full  border border-gray-200" style="background-color: rgb(255, 255, 255, 0.6);">
                            <div class="mb-2">
                                <select name="paper_type"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-light focus:ring-2  text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('paper_type') border-red-500 @enderror">
                                    <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                                    @foreach ($paper_types as $paper_type)
                                        <option {{ old('paper_type') == $paper_type->id ? 'selected' : '' }}
                                            value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('paper_type')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <select id="academic_level" name="academic_level"
                                    class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-light focus:ring-2  text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('academic_level') border-red-500 @enderror">
                                    <option hidden="" value="0" disabled="" selected="">Academic level</option>
                                    @foreach ($academic_levels as $academic_level)
                                        <option value="{{ $academic_level->id }}"
                                            {{ old('academic_level') == $academic_level->id ? 'selected' : '' }}>
                                            {{ $academic_level->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('academic_level')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <select id="deadline" name="deadline"
                                    class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-light focus:ring-2  text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('deadline') border-red-500 @enderror">
                                    <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                    @foreach ($deadlines as $deadline)
                                        <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                            value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                    @endforeach
                                </select>
                                @error('deadline')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <select name="number_of_pages" id="no_of_pages"
                                    class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-light focus:ring-2  text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('number_of_pages') border-red-500 @enderror">
                                    <option hidden="" value="0" disabled="" selected="">No of words</option>
                                    @for ($p = 1; $p <= 200; $p++)
                                        <option value="{{ $p }}"
                                            {{ old('number_of_pages') == $p ? 'selected' : '' }}>
                                            {{ $p * 250 }} Words - {{ $p }} Pages
                                        </option>
                                    @endfor
                                </select>
                                @error('number_of_pages')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <h4 class="my-4 text-center text-1xl text-blue-600 font-bold uppercase ">
                                Pricing: <span class="text-3xl"> <span id="cost">0</span> AED </span>
                            </h4>

                            <a href="{{ route('order') }}" class="btn-primary">
                                Place Order Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Partners --}}
    <div class="bg-gradient-to-r from-primary-light to-primary-dark ">
        <div class="container mx-auto flex flex-col overflow-hidden items-center justify-center md:flex-row ">
            <span class="mr-1 text-white font-semibold text-center sm:text-xl md:text-xl w-2/6">
                TRUSTED BY 300,000+ <br> STUDENTS OF :
            </span>
            <div class="grid grid-cols-5 md:grid-cols-10 py-4 px-3">
                <div data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="200"><img src="../imgs/at1.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125" /></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="400"><img src="../imgs/at2.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="600"><img src="../imgs/at3.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="800"><img src="../imgs/at4.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="1000"><img src="../imgs/at5.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="1200"><img src="../imgs/at6.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="1400"><img src="../imgs/at7.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="1600"><img src="../imgs/at8.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="1800"><img src="../imgs/at9.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div  data-aos="fade-up"  data-aos-easing="linear" data-aos-duration="2000"><img src="../imgs/at10.jpg" alt="Student of University"
                        class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
            </div>
        </div>
    </div>

    {{-- Service Dynamic Content --}}
    <section class="service-section container mx-auto px-3 md:px-14 my-6 md:min-h-[15rem]">
        {!! $service->html !!}
    </section>

    {{-- Help --}}
    <div class=" bg-primary-dark text-center py-6">
        <h4 class="font-bold text-white text-3xl text-center py-4 px-3">
            Get Your Troubles Sorted with our Leading Assignment Writing Dubai UAE
        </h4>

        <a href="{{ route('order') }}"
            class="inline-flex bg-gradient-to-r from-cyan-400 to-blue-600 text-white border-0 py-2 px-6 my-4 hover:bg-cyan-600 rounded text-lg up-animate">
            Order Now
        </a>

        <p class="text-white text-center text-lg py-4">
            Worrying about grades is outdated, seeking professional help is a forward-looking approach, remember it.
        </p>
    </div>
@endsection
@section('scripts')
    {{-- Count Up --}}
    <script src="https://inorganik.github.io/countUp.js/dist/countUp.umd.js"></script>
    {{-- Core JS --}}
    <script>

        const a = new countUp.CountUp("count-up-a", 98.2)
        const b = new countUp.CountUp("count-up-b", 91.0)

        a.start()
        b.start()

         $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#deadline').val(),
                "academic_level_id": $('#academic_level').val(),
            }
            $.ajax({
                method: 'POST',
                url: '{{ route('get.fare') }}',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")
                    const loading = '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#2793d4"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#15CEF4"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

                    $("#cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    // console.log(res);
                    $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ? 1 : $("#no_of_pages").val())  ))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
