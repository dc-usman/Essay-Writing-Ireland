@extends('layouts.web')

@section('title', 'Ireland’s Best Essay Writing Service – Essay Help Ireland')
@section('description', 'We are Offering Urgent Essay writing Services in Ireland Which is Not Only Cheap in Rates Also It Is an ideal Solution for The Students Here in Ireland.')
@section('canonical', config('app.app_url'))

@section('content')

    <style>
        * {
            /* border:1px solid red;  */
        }

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
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

                    <a href="{{ route('home') }}" class="block nav-bar-items py-2 md:mx-2 px-5">Home</a>

                    <a href="{{ route('about') }}" class="block nav-bar-items py-2 md:mx-2 px-5">About</a>
{{-- 
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="block w-full text-left nav-bar-items py-2 md:mx-2 px-5">
                            <span>Services</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="hidden absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-40"
                            :class="{ 'hidden': !open }">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                @if (!empty($services))
                                    @foreach ($services as $service)
                                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                            href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div> --}}

                    <a href="{{ route('contact') }}" class="block nav-bar-items py-2 md:mx-2 px-5">Contact</a>

                    <div
                        class="flex flex-col md:flex-row  md:items-center my-3 mx-3 lg:my-0 md:space-x-1 space-y-2 md:space-y-0 ">
                        <a href="{{ route('reviews') }}" class="btn-primary">
                            Reviews
                        </a>
                        <a href="{{ route('order') }}" class="btn-primary-outline break-normal"
                            style="background-color: rgb(255, 255, 255, 0.6);">
                            Order Now
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        {{-- Hero Section --}}
        <div class="container mx-auto px-4">
            <div class="flex flex-col space-y-4 my-4 md:my-0 lg:flex-row mx-4">
                <div class="w-full lg:w-1/2 lg:py-5 px-4">
                    <div class="relative space-y-4">
                        <div class="mx-2 text-center lg:text-left ">
                            <h1 class="hero-heading mb-4 text-center">
                                Best Essay Writing Service Ireland
                            </h1>
                            <p class="text-gray-500 text-xl md:text-2xl lg:text-lg pb-4">
                                Get the results you want by taking help from the top Irish essay writers. No more stress and
                                chaos at the last moment. Professional Assistance & Instant Academic Support!
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center justify-center space-y-3 md:flex-row md:space-y-0 md:space-x-6 p-1">
                            <div class="space-y-1">
                                <div class="text-primary-light text-6xl font-bold"><span id="count-up-a"
                                        class="counterup" data-value="98.2">0</span>.2%</div>
                                <div class="text-lg text-center">
                                    Orders Arrive Timely
                                </div>
                            </div>
                            <div class="space-y-1">
                                <div class="text-primary-light text-6xl font-bold"><span id="count-up-b"
                                        class="counterup" data-value="91">0</span>.0%</div>
                                <div class="text-lg text-center">
                                    Report Better Grades
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col bg-white border border-gray-200 shadow-lg items-center sm:flex-row sm:justify-center md:flex-row lg:flex-row space-x-4 py-2">
                            <div class="">
                                <img src="../imgs/reviewsbank.png" alt="UAE Flag" class="mx-auto h-10">
                                <span
                                    class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none hover:text-blue-400 text-lg  ml-2">ReviewsBank</span>
                                <ul class="flex justify-center">
                                    <li class="mr-1">4.9</li>
                                    <li class="my-auto text-yellow-500">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                                <svg class="h-8 mx-auto my-1" id="Layer_1" data-name="Layer 1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 171.54 155.41">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #ef6b25;
                                            }

                                            .cls-2 {
                                                fill: #fff;
                                            }

                                        </style>
                                    </defs>
                                    <title>Artboard 3ldpi</title>
                                    <path class="cls-1"
                                        d="M140.47,124.23,171.54,155c-2.4.18-3.55.34-4.7.34-30,0-59.89.09-89.84,0-37.71-.13-70.89-29-76.19-66.22a77.83,77.83,0,0,1,153.32-26.6c4.17,21.22,0,40.78-11.9,58.78C141.61,122.25,141.07,123.24,140.47,124.23ZM47.56,114.1c.06,3.42,2.84,5,6.32,3.27,6.63-3.36,13.26-6.74,19.69-10.45,3.15-1.83,5.66-1.65,8.72.09,6.2,3.54,12.53,6.86,18.94,10,1.46.71,4.11,1.11,5,.31,1.16-1,1.71-3.5,1.47-5.2-1-7.18-2.4-14.31-3.7-21.45a7.45,7.45,0,0,1,2.6-7.56c5.42-4.88,10.61-10,15.68-15.25,1.13-1.16,2.19-3.44,1.78-4.72s-2.61-2.56-4.2-2.84C112.27,59,104.6,58.11,97,56.72a7.57,7.57,0,0,1-4.73-3.24c-3.36-6.12-6.14-12.56-9.46-18.71-1.12-2.07-3.23-3.6-4.89-5.38-1.68,1.72-3.84,3.19-5,5.23-3.28,6-6.23,12.2-9.16,18.38-1.12,2.38-2.44,3.66-5.36,4-7.51.79-15,2-22.43,3.34-1.62.28-4,1.48-4.31,2.67-.35,1.49.69,3.82,1.88,5.07,4.73,5,9.57,9.87,14.75,14.35,3.27,2.82,3.93,5.66,3,9.73C49.84,99.35,48.83,106.69,47.56,114.1Z" />
                                    <path class="cls-2"
                                        d="M47.56,114.1c1.27-7.41,2.28-14.75,3.85-22,.88-4.07.22-6.91-3-9.73C43.18,77.91,38.34,73,33.61,68c-1.19-1.25-2.23-3.58-1.88-5.07C32,61.78,34.42,60.58,36,60.3,43.48,59,51,57.75,58.47,57c2.92-.3,4.24-1.58,5.36-4,2.93-6.18,5.88-12.38,9.16-18.38,1.12-2,3.28-3.51,5-5.23,1.66,1.78,3.77,3.31,4.89,5.38,3.32,6.15,6.1,12.59,9.46,18.71A7.57,7.57,0,0,0,97,56.72c7.57,1.39,15.24,2.25,22.83,3.6,1.59.28,3.77,1.54,4.2,2.84s-.65,3.56-1.78,4.72C117.21,73.12,112,78.25,106.6,83.13a7.45,7.45,0,0,0-2.6,7.56c1.3,7.14,2.69,14.27,3.7,21.45.24,1.7-.31,4.17-1.47,5.2-.89.8-3.54.4-5-.31-6.41-3.16-12.74-6.48-18.94-10-3.06-1.74-5.57-1.92-8.72-.09-6.43,3.71-13.06,7.09-19.69,10.45C50.4,119.14,47.62,117.52,47.56,114.1Z" />
                                </svg>
                                <span
                                    class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none hover:text-blue-400 text-lg  ml-4">Sitejabbar</span>
                                <ul class="flex justify-center">
                                    <li class="mr-1">4.9</li>
                                    <li class="my-auto text-yellow-500">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                <div class="w-full lg:w-1/2 bg-flag-uae xl:bg-none bg-no-repeat bg-contain bg-center ">
                    <div class="max-w-xs m-auto mt-20" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
                        <h4 class="font-bold title-font text-center text-2xl primary-bar text-white py-3 px-7 rounded-t-lg">
                            Calculate Your Price
                        </h4>
                        <div class="shadow-md rounded-b-lg p-5 flex flex-col md:ml-auto w-full  border border-gray-200"
                            style="background-color: rgb(255, 255, 255, 0.6);">
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

                            <h4 class="my-4 text-center text-1xl text-red-600 font-bold uppercase ">
                                Pricing: <span class="text-3xl"> <span id="cost">0</span> € </span>
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
    <div class="primary-bar ">
        <div class="container mx-auto flex flex-col overflow-hidden items-center justify-center md:flex-row ">
            <span class="mr-1 text-white font-semibold text-center sm:text-xl md:text-xl w-2/6">
                TRUSTED BY 300,000+ <br> STUDENTS OF :
            </span>
            <div class="grid grid-cols-5 md:grid-cols-10 py-4 px-3">
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200"><img src="{{ asset('imgs/ire-unis/irreland-uni-7.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125" /></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"><img src="{{ asset('imgs/ire-unis/ui-7.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600"><img src="{{ asset('imgs/ire-unis/ui-2.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800"><img src="{{ asset('imgs/ire-unis/iu-4.svg') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000"><img src="{{ asset('imgs/ire-unis/irreland-uni-1.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1200"><img src="{{ asset('imgs/ire-unis/irreland-uni-2.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1400"><img src="{{ asset('imgs/ire-unis/irreland-uni-3.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1600"><img src="{{ asset('imgs/ire-unis/irreland-uni-4.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1800"><img src="{{ asset('imgs/ire-unis/irreland-uni-5.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000"><img src="{{ asset('imgs/ire-unis/irreland-uni-6.png') }}"
                        alt="Student of University" class="md:p-0 md:w-20 transform transition hover:scale-125"></div>
            </div>
        </div>
    </div>

    {{-- Why Only Our Cheap --}}
    <div class="container mx-auto flex flex-col md:flex-row items-center md:space-x-4 ">
        <div class="md:w-1/3 md:mt-[52.2px]">
            <img src="../imgs/mobile-2.svg" alt="mobile" data-aos="fade-right" data-aos-duration="1000">
        </div>

        <div class="px-2 py-6 lg:px-0 md:w-2/3">
            <h2 class="main-heading text-center md:text-left">
                Hey, Can You Write My Essay For Me Ireland?
            </h2>
            <p class="text-secondary-dark text-sm pt-3 text-center md:text-left">
                You must be tired of searching this question on the internet? Or might be frustrated for not getting the
                specific help, right?
            </p>
            <div class="space-y-4 mt-2">
                <div class="flex items-center group">
                    {{-- <svg class="w-1/12 h-10  group-hover:text-primary-light" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> --}}
                    <div class="ml-2 lg:ml-0 flex flex-col w-11/12">
                        {{-- <p class="text-secondary-dark text-xl font-bold group-hover:text-primary-light">In-depth Research</p> --}}
                        <p class="text-secondary-dark text-sm pt-1">
                            Well, now is the right time to end all your worries as we provide you with the best Irish
                            writing services to get you going in your academic career. No matter if you’re short of time or
                            completely unaware of the essay writing format or research, our writers can help you pass the
                            challenges.
                        </p>
                    </div>
                </div>
                <div class="flex items-center group">
                    {{-- <svg class="w-1/12 h-10  group-hover:text-primary-light" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg> --}}
                    <div class="ml-2 lg:ml-0 flex flex-col w-11/12">
                        {{-- <p class="text-secondary-dark text-xl font-bold group-hover:text-primary-light">Experienced Writers</p> --}}
                        <p class="text-secondary-dark text-sm pt-1">
                            Whether it's argumentative, short, descriptive, or persuasive essays, you can seek help from our
                            experts and learn to write with flow. And the best part? Our prices are economical for students
                            and won’t burden your pockets regardless of the type of essay you choose.
                        </p>
                    </div>
                </div>
                {{-- <div class="flex items-center group">
                    <svg class="w-1/12 h-10  group-hover:text-primary-light" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="ml-2 lg:ml-0 flex flex-col w-11/12">
                        <p class="text-secondary-dark text-xl font-bold group-hover:text-primary-light">Professional Assistance</p>
                        <p class="text-secondary-dark text-sm pt-1">
                            So many students give up on their assignments because of the lack of professional help. Here,
                            with our instant assignment writing help UAE, you can get all your worries sorted with our
                            counsellors and writers who are available to guide you.
                        </p>
                    </div>
                </div> --}}
                {{-- <div class="flex items-center group">
                    <svg class="w-1/12 h-10  group-hover:text-primary-light" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="ml-2 lg:ml-0 flex flex-col w-11/12">
                        <p class="text-secondary-dark text-xl font-bold group-hover:text-primary-light ">Affordability</p>
                        <p class="text-secondary-dark text-sm pt-1">
                            We offer quality assignment assistance online without burdening your pockets. You can get the
                            best help at cheap prices.
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- Divider --}}
    <div class="primary-bar h-5"></div>

    {{-- Prices --}}
    <div class="container mx-auto items-center justify-center">

        <h4 class="main-heading text-center  my-4 md:my-8"> Our Prices </h4>

        <div class="grid sm:grid-cols-1 lg:grid-cols-3 xl:mx-10 gap-y-3">
            {{-- <div data-aos="fade-up" data-aos-duration="1000"
                class="rounded shadow-lg text-center min-w-[11rem] sm:w-auto mx-auto up-animate">
                <div class="primary-bar text-white font-semibold text-1xl py-3 px-6 border-b border-gray-300">
                    College
                </div>
                <div class="p-6 border-3 border-cyan-400">
                    <p class="text-gray-700 text-base mb-4">
                        Starting From
                    </p>
                    <h5 class="text-gray-900 text-xl font-medium mb-2">DHS 30</h5>
                    <p class="text-gray-700 text-base ">
                        Per Page
                    </p>
                </div>
            </div> --}}
            <div data-aos="fade-up" data-aos-duration="2000"
                class="rounded shadow-lg text-center min-w-[11rem] sm:w-auto mx-auto up-animate">
                <div class="primary-bar text-white font-semibold text-1xl py-3 px-6 border-b border-gray-300">
                    Undergraduate
                </div>
                <div class="p-6 border-3 border-cyan-400">
                    <p class="text-gray-700 text-base mb-4">
                        Starting From
                    </p>
                    <h5 class="text-gray-900 text-2xl font-medium mb-2">€ 8</h5>
                    <p class="text-gray-700 text-base ">
                        Per Page
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="3000"
                class="sm:col-span-2 lg:col-span-1 rounded shadow-lg text-center min-w-[11rem] sm:w-auto mx-auto up-animate">
                <div class="primary-bar text-white font-semibold text-1xl py-3 px-6 border-b border-gray-300">
                    Master's
                </div>
                <div class="p-6 border-3 border-cyan-400">
                    <p class="text-gray-700 text-base mb-4">
                        Starting From
                    </p>
                    <h5 class="text-gray-900 text-2xl font-medium mb-2">€ 10</h5>
                    <p class="text-gray-700 text-base ">
                        Per Page
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="4000"
                class="rounded shadow-lg text-center min-w-[11rem] sm:w-auto mx-auto up-animate">
                <div class="primary-bar text-white font-semibold text-1xl py-3 px-6 border-b border-gray-300">
                    Ph.D.
                </div>
                <div class="p-6 border-3 border-cyan-400">
                    <p class="text-gray-700 text-base mb-4">
                        Starting From
                    </p>
                    <h5 class="text-gray-900 text-2xl font-medium mb-2">€ 11</h5>
                    <p class="text-gray-700 text-base ">
                        Per Page
                    </p>
                </div>
            </div>
            {{-- <div data-aos="fade-up" data-aos-duration="5000"
                class="rounded shadow-lg text-center min-w-[11rem] sm:w-auto mx-auto up-animate">
                <div class="primary-bar text-white font-semibold text-1xl py-3 px-6 border-b border-gray-300">
                    Admission Essay
                </div>
                <div class="p-6 border-3 border-cyan-400">
                    <p class="text-gray-700 text-base mb-4">
                        Starting From
                    </p>
                    <h5 class="text-gray-900 text-xl font-medium mb-2">DHS 70</h5>
                    <p class="text-gray-700 text-base ">
                        Per Page
                    </p>
                </div>
            </div> --}}
        </div>

        <div class="text-center my-10 space-x-3">
            <a href="{{ route('order') }}" class="btn-primary">
                Order Now
            </a>
            <a href="javascript:void(Tawk_API.toggle())" class="btn-primary-outline up-animate">
                Live Chat
            </a>
        </div>

    </div>

    {{-- Features --}}
    <div class="">

        <div class="container mx-auto items-center justify-center py-4">

            <h4 class="main-heading text-center my-4 lg:my-4 lg:mb-8">Best Paper Prices</h4>

            <div class="grid sm:grid-cols-2 xl:grid-cols-5 xl:mx-10 gap-y-6">
                <div class="relative group mx-auto" data-aos="fade-down" data-aos-duration="1000">
                    <div
                        class="rounded h-44 w-[12rem] -rotate-12 group-hover:rotate-0 h absolute -top-[16px] -right-[16px] transition duration-300 border-2 border-gray-500 m-4 -z-10">
                    </div>
                    <div class="rounded shadow-lg text-center bg-white border-2 border-gray-300 h-44 w-[12rem]">
                        <div
                            class="w-5 h-6 p-4 bg-primary-light group-hover:bg-primary-dark transition duration-300 rounded-full -ml-3 -mt-3">
                        </div>
                        <div class="py-3 text-secondary text-lg font-semibold px-2">
                            Academic Paper Writing
                        </div>
                        <div class="py-3">
                            <p class="relative text-secondary text-lg mb-4">
                                From € 8/page 
                                <b
                                    class="absolute top-0 -right-10 p-4 text-white bg-primary-light group-hover:bg-primary-dark transition duration-300 rounded-full ">Free</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative group mx-auto" data-aos="fade-up" data-aos-duration="2000">
                    <div
                        class="rounded h-44 w-[12rem] -rotate-12 group-hover:rotate-0 h absolute -top-[16px] -right-[16px] transition duration-300 border-2 border-gray-500 m-4 -z-10">
                    </div>
                    <div class="rounded shadow-lg text-center bg-white border-2 border-gray-300 h-44 w-[12rem]">
                        <div
                            class="w-5 h-6 p-4 bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full -ml-3 -mt-3">
                        </div>
                        <div class="py-3 text-secondary text-lg font-semibold">
                            Eiditing and Proofreading
                        </div>
                        <div class="py-3">
                            <p class="relative text-secondary text-lg mb-4">
                                From € 5/page
                                <b
                                    class="absolute top-0 -right-10 p-4 text-white bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full ">Free</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2 xl:col-span-1 relative group mx-auto" data-aos="fade-down"
                    data-aos-duration="1000">
                    <div
                        class="rounded h-44 w-[12rem] -rotate-12 group-hover:rotate-0 h absolute -top-[16px] -right-[16px] transition duration-300 border-2 border-gray-500 m-4 -z-10">
                    </div>
                    <div class="rounded shadow-lg text-center bg-white border-2 border-gray-300 h-44 w-[12rem]">
                        <div
                            class="w-5 h-6 p-4 bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full -ml-3 -mt-3">
                        </div>
                        <div class="py-3 text-secondary text-lg font-semibold">
                            Dissertation Services
                        </div>
                        <div class="py-3">
                            <p class="relative text-secondary text-lg mb-4">
                                From € 10/page
                                <b
                                    class="absolute top-0 -right-10 p-4 text-white bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full ">Free</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative group mx-auto" data-aos="fade-up" data-aos-duration="2000">
                    <div
                        class="rounded h-44 w-[12rem] -rotate-12 group-hover:rotate-0 h absolute -top-[16px] -right-[16px] transition duration-300 border-2 border-gray-500 m-4 -z-10">
                    </div>
                    <div class="rounded shadow-lg text-center bg-white border-2 border-gray-300 h-44 w-[12rem]">
                        <div
                            class="w-5 h-6 p-4 bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full -ml-3 -mt-3">
                        </div>
                        <div class="py-3 text-secondary text-lg font-semibold">
                            Presentation Designing
                        </div>
                        <div class="py-3">
                            <p class="relative text-secondary text-lg mb-4">
                                From € 6.8/page
                                <b
                                    class="absolute top-0 -right-10 p-4 text-white bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full ">Free</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative group mx-auto" data-aos="fade-down" data-aos-duration="1000">
                    <div
                        class="rounded h-44 w-[12rem] -rotate-12 group-hover:rotate-0 h absolute -top-[16px] -right-[16px] transition duration-300 border-2 border-gray-500 m-4 -z-10">
                    </div>
                    <div class="rounded shadow-lg text-center bg-white border-2 border-gray-300 h-44 w-[12rem]">
                        <div
                            class="w-5 h-6 p-4 bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full -ml-3 -mt-3">
                        </div>
                        <div class="py-3 text-secondary text-lg font-semibold">
                            Online Exams
                        </div>
                        <div class="py-3">
                            <p class="relative text-secondary text-lg mb-4">
                                From € 49/hour
                                <b
                                    class="absolute top-0 -right-10 p-4 text-white bg-primary-light group-hover:bg-primary-dark transition duration-300  rounded-full ">Free</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-gray-500 text-2xl md:text-2xl lg:text-4xl pt-8 pb-4 text-center">
                Get all these features for <del>300 DHS</del> <b class="text-color-primary-dark">FREE</b>
            </p>

            <div class="flex flex-row justify-center my-4">
                <a href="{{ route('order') }}"
                    class="inline-flex text-white bg-gray-500 font-bold border-0 py-2 px-6 hover:bg-primary-light rounded text-lg up-animate">
                    GET Order NOW</a>
            </div>
        </div>
    </div>

    {{-- Assignments --}}
    <div class=" container mx-auto items-center justify-center relative">

        <h3 class="main-heading text-center my-4">
            Looking to Buy An Essay Ireland?
        </h3>

        <p class="my-4 text-center text-secondary text-lg font-semibold">
            Here are the types of essays we provide:
        </p>


        <div
            class="bg-none lg:bg-leftwaves lg:h-[50rem] lg:bg-left lg:bg-contain lg:bg-no-repeat lg:block lg:absolute lg:top-32 lg:right-0 lg:-left-11 bottom-0 -z-10 ">
        </div>
        <div
            class=" bg-none lg:bg-rightwaves lg:h-[30rem] lg:bg-right lg:bg-contain lg:bg-no-repeat lg:block lg:absolute lg:top-20 lg:-right-[32.75px] lg:left-0 bottom-0 -z-10 ">
        </div>
        {{--  --}}
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:px-28 xl:grid-cols-3 py-5 ">

            <div class=" border-0 px-9 border-b-2 sm:px-14 md:border-r-2 md:border-b-2 gr-border  md:p-4">
                <h4 class="text-primary-dark font-bold text-xl pb-3 pt-2">Descriptive Essays</h4>
                <p class="text-gray-700 text-base mb-4">
                    In descriptive essays, you need to describe an object, emotion or an experience in detail. If you find
                    it difficult to paint a perfect picture through descriptive essays, we are available to assist.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2 md:border-b-2 gr-border md:p-4">
                <h4 class="text-primary-dark font-bold text-xl pb-3 pt-2">
                    <a href="{{ route('services.show', 'thesis-writing') }}">
                        Narrative Essays
                    </a>
                </h4>
                <p class="text-gray-700 text-base mb-4">
                    Writing a narrative essay seems easy on the outside but from the inside, it requires research and a
                    process. If you’re short of time, our Irish writing services can help you complete it before the
                    deadline.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-2 gr-border md:p-4">
                <h4 class="text-primary-dark font-bold text-xl pb-3 pt-2">Persuasive Essays</h4>
                <p class="text-gray-700 text-base mb-4">
                    So you want to persuade your teachers to get good Grades but don’t know how to write a persuasive essay?
                    How about taking help from professionals to land the desired results?
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2 md:border-b-2 gr-border md:p-4">
                <h4 class="text-primary-dark font-bold text-xl pb-3 pt-2">MBA Essays</h4>
                <p class="text-gray-700 text-base mb-4">
                    You can’t afford to neglect an MBA essay. It unlocks new opportunities and also helps to kickstart your
                    career. So, instead of looking for someone to buy an essay Ireland, it’s time to make it unique by
                    taking help from experts.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2 md:border-b-2 gr-border md:p-4">
                <h4 class="text-primary-dark font-bold text-xl pb-3 pt-2">
                    <a href="{{ route('services.show', 'essay-writing') }}">
                        Argumentative Essays
                    </a>
                </h4>
                <p class="text-gray-700 text-base mb-4">
                    Argumentative essays not only require research but also impeccable writing skills that can convince the
                    readers on your point. Our argumentative essay services perfectly cater to its purpose.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-2 gr-border md:p-4">
                <h4 class="text-primary-dark font-bold text-xl pb-3 pt-2">Admission Essays</h4>
                <p class="text-gray-700 text-base mb-4">
                    A good admission essay can help you spare all the troubles and can put you in peace. It also counts in
                    your educational performance. That’s why it’s always best to seek professional assistance to stand ahead
                    and get exceptional results.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-0 md:border-r-2 md:p-4 gr-border">
                <h4 class="text-primary-dark font-bold text-xl pb-3 pt-2">College Essays</h4>
                <p class="text-gray-700 text-base mb-4">
                    Struggling to write a college essay that can work wonders? Our college essay writing service is here to
                    take you out of the challenges. With a blend of story-telling and creativity, we create essays that
                    maximize your performance.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-0 md:border-r-2 gr-border md:p-4">
                <h4 class="text-primary-dark font-bold text-xl py-3 pt-2">Analytical Essays</h4>
                <p class="text-gray-700 text-base mb-4">
                    An analytical essay answers the How or Why of the question. Without strong research skills, it’s
                    impossible to draw a strong analysis. Our top-rated Irish writers reduce your workload by taking
                    responsibility on their shoulders.
                </p>
            </div>

            <div class="border-0 px-9 sm:px-14 md:p-4">
                <h4 class="text-primary-dark font-bold text-xl py-3 pt-2">Cause and Effect Essays</h4>
                <p class="text-gray-700 text-base mb-4">
                    Due to lack of time and motivation students are unable to come up with a quality cause and effect essay.
                    We have been helping students in overcoming this problem. If you’re in the same boat, we are only an
                    order away.
                </p>
            </div>

        </div>

    </div>

    {{-- Essay Writing Help --}}
    <div
        class="container bg-transparent mx-auto grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:px-28 xl:grid-cols-2 py-5 ">

        <div class="my-auto" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
            <img src="../imgs/carr.svg" alt="mobile">
        </div>

        <div class="p-10 text-center md:text-left" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <h3 class="main-heading my-4">
                Why Should You Take Your First Chance on Our Irish Writing Services?
            </h3>
            <p class="text-secondary-dark text-sm py-7 leading-6">
                We understand when you search on the internet<strong class="text-lg">“write my essay for me Ireland”</strong> you come across a lot of
                writing websites that claim results and a myriad of services. And you got confused between the many options.
                But when you find us for the first time, why should you choose us?
                <br>
                <br>
                We are one of the emerging essay writing websites in Ireland whose only focus is Quality and Customer
                Satisfaction. We can neither afford nor intend to disappoint our customers because when they invest money
                whether little or too much, they expect results. And that’s why our sole purpose is to deliver Quality.
                <br>
                <br>
                Secondly, students already struggle with assignments and writing challenges. To disappoint them means to add
                to their stress. And we don’t want to do that as our aim is to relieve their burden.
                <br>
                <br>
                Now, when you hire us, you can put yourself at ease because your Success is also our Success. To fulfil, we
                give our best no matter if you require our services in Dublin, Galway, Cork, Waterford, Limerick, Belfast or
                anywhere in Ireland.
                <br>
                <br>
                Still not satisfied? How about trying us with an order?
            </p>

            <div class="flex flex-row justify-center ">
                <a href="{{ route('order') }}" class="btn-primary">
                    Order Now
                </a>
            </div>

        </div>

    </div>

    {{-- Testinomial --}}
    <div class=" border-b-8 border-black mx-auto">
        <h4 class="main-heading text-center my-4">
            Customer Reviews
        </h4>
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 xl:grid-cols-2 pt-5">
            <div class="mx-auto align-baseline" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
                <img src="../imgs/rating.svg" alt="mobile" class=" w-96">
            </div>
            <div class="bg-tm bg-cover bg-repeat bg-center mx-auto my-auto" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-span-1 relative overflow-x-visible sm:mx-8 md:mx-32">

                    <div class="relative sliderAx z-10 bg-white">

                        <div id="slider-1" class=" shadow-2xl mx-4 md:mx-auto">
                            <div class=" h-auto text-black py-10 px-10 object-fill">
                                <div class="">
                                    {{-- <p class="font-bold text-sm uppercase">Services</p> --}}
                                    <p class="text-3xl font-bold my-2">Clara</p>
                                    <p class="text-md my-3 ">
                                        They helped me with one of the most complicated essays that I was struggling to
                                        write for a month. They are legit and authentic essay writers.
                                    </p>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div id="slider-2" class=" shadow-2xl mx-4 md:mx-auto">
                            <div class=" h-auto text-black py-10 px-10 object-fill">
                                <p class="text-3xl font-bold my-2">Nicole</p>
                                <p class="text-md my-3 ">
                                    I was very worried because of the short deadline. I have never used any online service
                                    before. One of my friends recommended them and I must say they came as a saviour in the
                                    last hour. I’m still very grateful to them.
                                </p>
                            </div>
                            <br>
                        </div>

                        <div id="slider-3" class=" shadow-2xl mx-4 md:mx-auto">
                            <div class=" h-auto text-black py-10 px-10 object-fill">
                                <p class="text-3xl font-bold my-2">Tara Cole</p>
                                <p class="text-md my-3 ">
                                    Superb formatting and the flawless writing style of their writers. Loved their service!
                                </p>
                            </div>
                            <br>
                        </div>

                        <div id="slider-4" class=" shadow-2xl mx-4 md:mx-auto">
                            <div class=" h-auto text-black py-10 px-10 object-fill">
                                <p class="text-3xl font-bold my-2">Liyah</p>
                                <p class="text-md my-3 ">
                                    The writer did an excellent job on my MBA essay. He also exceeded my expectations.
                                </p>
                            </div>
                            <br>
                        </div>

                        <div class="flex justify-between w-20 mx-auto py-4">
                            <button id="sButton1" onclick="sliderButton1()"
                                class="bg-slider-button-dark rounded-full w-4 pb-2 "></button>
                            <button id="sButton2" onclick="sliderButton2() "
                                class="bg-slider-button-dark rounded-full w-4 p-2"></button>
                            <button id="sButton3" onclick="sliderButton3() "
                                class="bg-slider-button-dark rounded-full w-4 p-2"></button>
                            <button id="sButton4" onclick="sliderButton4() "
                                class="bg-slider-button-dark rounded-full w-4 p-2"></button>
                        </div>
                    </div>

                    <div
                        class="d-none md:d-none lg:d-block bg-white shadow-lg lg:h-44 lg:w-14 lg:absolute lg:top-7 lg:-right-8 ">
                    </div>
                    {{-- <div class="bg-white shadow-lg h-0 4 w-14 absolute top-15 -right-21 "></div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <div class=" bg-blue-waves bg-fixed bg-cover bg-no-repeat bg-top-right">
        <h4 class="main-heading text-center py-4">
            FAQs
        </h4>
        <p class="text-secondary-dark text-center text-md py-4">
            Still have concerns about services? Here are the answers:
        </p>
        <div class="container pt-3 pb-14 mx-auto">
            <div class=" mx-auto sm:mb-2 px-5 md:px-0 lg:w-4/5 ">
                <div class="w-full">
                    <details class="mb-3 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-amber-500 text-base py-2 px-3 leading-8 mb-1">
                            1. Do you provide original and unique essay Ireland?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-900 text-sm">
                                A. Yes, all the time! Reusing old essays and internet templates isn’t our business model. We
                                have expert writers who write your essays from scratch and according to your specific
                                requirements. All essays are based on strong research, essay structure and impeccable
                                writing skills.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-amber-500 text-base py-2 px-3 leading-8 mb-1">
                            2. Will you protect my identity?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-900 text-sm">
                                A. Yes, of course! We don’t share our client's information with any third party or even for
                                advertisement. Your personal information including your name, email, and contact details
                                remain with us only. We only use it to maintain the backlog of the orders.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-amber-500 text-base py-2 px-3
                            leading-8 mb-1">
                            3. Do you have a secure payment method?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-900 text-sm">
                                A. Yes, we have secure payment methods for our online essay writing help. Also, we offer
                                different payment methods like Payoneer, PayPal, Western Union, payment through Visa card,
                                and more. You can choose accordingly.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-amber-500 text-base py-2 px-3 leading-8 mb-1">
                            4. Can you write my essay Ireland in 1 hour?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-900 text-sm">
                                A. If you need it on an urgent basis and the paper isn’t too lengthy then absolutely we can
                                help you out. But serving on an immediate basis also requires an additional cost.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-amber-500 text-base py-2 px-3 leading-8 mb-1">
                            5. How much do you charge for an essay?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-900 text-sm">
                                A. Essay charges depend on the nature of the topic and also its length and requirements.
                                However, the basic price starts from $8 only.
                            </span>
                        </div>
                    </details>
                    <details class="mb-4 relative">
                        <summary
                            class="cursor-pointer font-semibold w-full text-gray-600 rounded border border-gray-300 bg-white  focus:border-amber-500 text-base py-2 px-3 leading-8 mb-1">
                            6. I have written my essay myself. Can you proofread it?
                        </summary>
                        <div class="bg-white p-4 rounded-sm">
                            <span class="text-gray-900 text-sm">
                                A. Sure! We also provide proofreading and editing services for students who have done their
                                essays themselves and want some professional assistance on them. We can further polish and
                                enhance its quality.
                            </span>
                        </div>
                    </details>
                </div>

            </div>
        </div>
    </div>

    {{-- Help --}}
    <div class=" bg-primary-dark text-center py-6">
        <h4 class="font-bold text-white text-3xl text-center py-4 px-3">
            Ready to Get Your Essays from the Best Essay Writing Service Ireland?
        </h4>

        <a href="{{ route('order') }}"
            class="inline-flex bg-gradient-to-r from-amber-400 to-amber-800 text-white border-0 py-2 px-6 my-4 hover:bg-cyan-600 rounded text-lg up-animate">
            Order Now
        </a>

        <p class="text-white text-center text-lg py-4">
            Let’s discuss it today. Time to seek your academic success!
        </p>
    </div>
@endsection
@section('scripts')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

    {{-- Looper Js --}}
    <script>
        var cont = 0;

        function loopSlider() {
            var sliders = setInterval(function() {
                switch (cont) {
                    case 0: {
                        $("#slider-2").fadeOut(400);
                        $("#slider-3").fadeOut(400);
                        $("#slider-4").fadeOut(400);

                        $("#slider-1").delay(400).fadeIn(400);

                        $("#sButton2").removeClass("bg-slider-button-light");
                        $("#sButton3").removeClass("bg-slider-button-light");
                        $("#sButton4").removeClass("bg-slider-button-light");

                        $("#sButton1").addClass("bg-slider-button-light");
                        cont = 1;
                        break;
                    }
                    case 1: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-3").fadeOut(400);
                        $("#slider-4").fadeOut(400);

                        $("#slider-2").delay(400).fadeIn(400);

                        $("#sButton1").removeClass("bg-slider-button-light");
                        $("#sButton3").removeClass("bg-slider-button-light");
                        $("#sButton4").removeClass("bg-slider-button-light");

                        $("#sButton2").addClass("bg-slider-button-light");
                        cont = 2;
                        break;
                    }
                    case 2: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").fadeOut(400);
                        $("#slider-4").fadeOut(400);

                        $("#slider-3").delay(400).fadeIn(400);

                        $("#sButton1").removeClass("bg-slider-button-light");
                        $("#sButton2").removeClass("bg-slider-button-light");
                        $("#sButton4").removeClass("bg-slider-button-light");

                        $("#sButton3").addClass("bg-slider-button-light");
                        cont = 3;
                        break;
                    }
                    case 3: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").fadeOut(400);
                        $("#slider-3").fadeOut(400);

                        $("#slider-4").delay(400).fadeIn(400);

                        $("#sButton1").removeClass("bg-slider-button-light");
                        $("#sButton2").removeClass("bg-slider-button-light");
                        $("#sButton3").removeClass("bg-slider-button-light");

                        $("#sButton4").addClass("bg-slider-button-light");
                        cont = 0;
                        break;
                    }


                }
            }, 8000);

        }


        function sliderButton1() {
            $("#slider-2").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-4").fadeOut(400);

            $("#slider-1").delay(400).fadeIn(400);

            $("#sButton2").removeClass("bg-slider-button-light");
            $("#sButton3").removeClass("bg-slider-button-light");
            $("#sButton4").removeClass("bg-slider-button-light");

            $("#sButton1").addClass("bg-slider-button-light");
            cont = 1
            reinitLoop(4000);

        }

        function sliderButton2() {

            $("#slider-1").fadeOut(400);
            $("#slider-3").fadeOut(400);
            $("#slider-4").fadeOut(400);

            $("#slider-2").delay(400).fadeIn(400);

            $("#sButton1").removeClass("bg-slider-button-light");
            $("#sButton3").removeClass("bg-slider-button-light");
            $("#sButton4").removeClass("bg-slider-button-light");

            $("#sButton2").addClass("bg-slider-button-light");
            cont = 2
            reinitLoop(4000);

        }

        function sliderButton3() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-4").fadeOut(400);

            $("#slider-3").delay(400).fadeIn(400);

            $("#sButton1").removeClass("bg-slider-button-light");
            $("#sButton2").removeClass("bg-slider-button-light");
            $("#sButton4").removeClass("bg-slider-button-light");

            $("#sButton3").addClass("bg-slider-button-light");
            cont = 3
            reinitLoop(4000);

        }

        function sliderButton4() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").fadeOut(400);
            $("#slider-3").fadeOut(400);

            $("#slider-4").delay(400).fadeIn(400);

            $("#sButton1").removeClass("bg-slider-button-light");
            $("#sButton2").removeClass("bg-slider-button-light");
            $("#sButton3").removeClass("bg-slider-button-light");

            $("#sButton4").addClass("bg-slider-button-light");
            cont = 0
            reinitLoop(4000);

        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#slider-3").hide();
            $("#slider-4").hide();
            $("#sButton1").addClass("bg-slider-button-light");
            loopSlider();
        });

        function reinitLoop(time) {
            clearInterval(sliders);
            setTimeout(loopSlider(), time);
        }
    </script>
    {{-- Count Up --}}
    <script src="https://inorganik.github.io/countUp.js/dist/countUp.umd.js"></script>
    {{-- Core JS --}}
    <script>
        $(function() {
            const a = new countUp.CountUp("count-up-a", 98.2)
            const b = new countUp.CountUp("count-up-b", 91.0)

            a.start()
            b.start()

            var types = ["Facebook Posts", "Blogs", "SEO Content", "Web Content"]
            var contents = [
                "We let you connect with your target audience on one of the biggest social networking sites with the power of content. Not only this, but we also help you build long-lasting relationships with your customers with thought-provoking, emerging content. It’s time to build a massive following on Facebook with the help of our creative copywriter Dubai.",

                "Blogs make you visible on the search engine but only if you write with consistency, SEO tactics, and strategies to grow your business. Our UAE writers can help you deliver your brand value through blog writing services in Dubai. Whether you’re a small to medium-sized business or an enterprise, we know how to bring you up through blogs and article writing services.",

                "Your online business is nowhere if you’re not writing SEO content on your website and social forums. With our Arabic and Gulf content writing companies in UAE, we deliver optimized content in the form of blogs, newsletters, social media captions, and ad copywriting. Our experts know how to grow your brand presence through the power of words",

                "You might have a website but if it’s missing the optimized content, strong headlines, it will become tough to grab leads. With our SEO content writing Dubai, we fill these missing gaps and give you a way forward to generate revenue, capture the market, and make a reputation in the cut-throat competition. Starting as low as AED 60, our rates vary according to the services but are always fruitful in increasing your business visibility."
            ]

            counter = 0,
                btnRight = $("#btn-right"),
                previousSkill = $(".types-of-contents"),
                previousContent = $(".contents"),
                previousContentShort = $(".contents-short"),
                arraylength = types.length - 1;
            count = 99;

            function display_types(bool) {

                if (bool) {
                    if (counter < arraylength) {
                        counter++
                        previousSkill.html(types[counter]);
                        previousContent.html(contents[counter]);
                        previousContentShort.html(contents[counter].slice(0, count) + (contents[counter].length >
                            count ? "..." : ""));
                    }
                } else {
                    if (counter > 0) {
                        counter--
                        previousSkill.html(types[counter]);
                        previousContent.html(contents[counter]);
                        previousContentShort.html(contents[counter].slice(0, count) + (contents[counter].length >
                            count ? "..." : ""));
                    }
                }

            }

            display_types(true);

            $("#btn-left").click(function() {
                display_types(false);
            });

            $("#btn-right").click(function() {
                display_types(true);
            });

        });
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
                    const loading =
                        '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#dc2626"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dc2626"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

                    $("#cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    // console.log(res);
                    $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ? 1 : $(
                        "#no_of_pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
