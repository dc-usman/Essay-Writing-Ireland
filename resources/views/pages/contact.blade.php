@extends('layouts.web')

@section('title', 'Contact Us')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    {{-- Contact --}}
    <h4 class="page-bar">
        Contact Information
    </h4>

    <section class="text-blue-600 body-font bg-white opacity-90">

        <div class="container px-5 pt-3 pb-20  mx-auto">
            @if (session('success'))
                <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                    role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <circle style="fill:#2599ae;" cx="25" cy="25" r="25" />
                                <polyline
                                    style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                    points="
                        38,15 22,33 12,25 " />
                            </svg>
                        </div>
                        <div>
                            <p class="text-center font-bold">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <div class="w-full ">
                <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-2">
                    @csrf
                    <div class="mx-2">
                        <label>Name:</label>
                        <input type="text" name="name"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('name') border-red-500 @enderror"
                            placeholder="Name">
                        @error('name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mx-2">
                        <label>Email:</label>
                        <input type="email" name="email"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none py-2 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out @error('email') border-red-500 @enderror"
                            placeholder="Email">
                        @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mx-2">
                        <label>Country:</label>
                        <select name="country"
                            class="w-full text-gray-700  rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none py-3 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out @error('country') border-red-500 @enderror">
                            <option class="text-gray-400" hidden="" disabled="" selected="">Country</option>
                            @foreach ($countries as $country)
                                <option {{ old('country') == $country->code ? 'selected' : '' }}
                                    value="{{ $country->code }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <div style="color:rgb(248, 12, 12);">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mx-2">
                        <label class="">Phone Number:</label>
                        <input type="tel" id="phone"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none py-3 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out @error('phone') border-red-500 @enderror"
                            placeholder="Phone" value="{{ old('phone', '') }}"
                            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                            data-intl-tel-input-id="0">
                        <input type="hidden" name="phone" id="phone2" />
                        @error('phone')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md:col-span-2 mx-2">
                        <label>Subject:</label>
                        <input type="text" name="subject"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('subject') border-red-500 @enderror"
                            placeholder="Subject">
                        @error('subject')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2 mx-2">
                        <label>Message:</label>
                        <textarea name="detail" rows="3"
                            class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('detail') border-red-500 @enderror"
                            placeholder="Detail"></textarea>
                        @error('detail')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2 mx-auto">
                        <button type="submit" id="btn-submit" class="btn-primary">
                            Submit Query
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ae"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#contact-form").submit(function() {
                $('#contact-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
