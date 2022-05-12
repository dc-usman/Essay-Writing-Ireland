@extends('layouts.web')

@section('title', 'Order')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="text-gray-800 font-bold body-font bg-white opacity-90">
        <h4 class="page-bar">
            Order Now
        </h4>
        @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
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
        <div class="container px-5 pt-3 pb-20  mx-auto">
            <div class="flex flex-col md:px-12 w-full ">

                <div id="msg-bag" class="my-4"></div>
                <form id="order-form" action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 ">
                        <div class="flex flex-wrap ">
                            <div class=" px-1 mb-3 w-full md:w-1/2 lg:w-1/3 ">

                                <label>Paper Topic:</label>
                                <input type="text" name="paper_topic"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('paper_topic') border-red-500 @enderror placeholder-black"
                                    value="{{ old('paper_topic', '') }}" placeholder="Paper Topic">
                                @error('paper_topic')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label>Paper Type:</label>
                                <select name="paper_type"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out @error('paper_type') border-red-500 @enderror placeholder-black">
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

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label>Urgency:</label>
                                <select name="deadline" id="deadline"
                                    class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('deadline') border-red-500 @enderror placeholder-black">
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
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label>Style:</label>
                                <select name="style"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('style') border-red-500 @enderror placeholder-black">
                                    <option hidden="" value="0" disabled="" selected="">Styles</option>
                                    @foreach ($reference_styles as $style)
                                        <option {{ old('reference_styles') == $style->id ? 'selected' : '' }}
                                            value="{{ $style->id }}">{{ $style->name }}</option>
                                    @endforeach
                                </select>
                                @error('style')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label>Language:</label>
                                <select name="language"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('reference') border-red-500 @enderror placeholder-black">
                                    <option hidden="" value="" disabled="" class="" selected="">Language
                                    </option>
                                    <option value="eng-uk">English (U.K)</option>
                                    <option value="eng-us">English (U.S)</option>
                                    <option value="none">Not a native speaker</option>
                                </select>
                                @error('language')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label>Number of References:</label>
                                <select name="reference"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('reference') border-red-500 @enderror placeholder-black">
                                    <option hidden="" value="0" disabled="" selected="">References</option>
                                    @for ($i = 1; $i <= 20; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('reference') == $i ? 'selected' : '' }}> {{ $i }} </option>
                                    @endfor
                                </select>
                                @error('reference')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">

                                <label>High School:</label>
                                <select name="academic_level" id="academic_level"
                                    class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('academic_level') border-red-500 @enderror placeholder-black">
                                    <option hidden="" value="0" disabled="" selected="">High School </option>
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

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label>Pages</label>
                                <select name="number_of_pages" id="no_of_pages"
                                    class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('number_of_pages') border-red-500 @enderror placeholder-black">
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

                            <div class=" px-1 mb-3 w-full lg:w-1/3">
                                <label>Subject:</label>
                                <select name="subject_area"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('subject_area') border-red-500 @enderror placeholder-black">
                                    <option hidden="" value="0" disabled="" selected="">Subjects</option>
                                    @foreach ($subjects as $subject)
                                        <option {{ old('subject_area') == $subject->id ? 'selected' : '' }}
                                            value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                                @error('subject_area')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full lg:w-1/1">
                                <label>Message:</label>
                                <textarea name="detail" rows="3" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('detail') border-red-500 @enderror placeholder-black"
                                    placeholder="Detail">{{ old('detail', '') }}</textarea>
                                @error('detail')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class=" w-full lg:w-1/2 my-5">
                                <div class="flex items-center ">

                                    <div class="ml-5 form-check form-check-inline">
                                        <input name="spacing"
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-red-600 checked:border-red-900 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" id="spacing1" value="1" checked>
                                        <label class="ml-1 sm:ml-2  form-check-label inline-block text-gray-700"
                                            for="single"> Single Space </label>
                                    </div>
                                    <div class="ml-10 form-check form-check-inline">
                                        <input name="spacing"
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-red-600 checked:border-red-900 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" id="spacing2" value="2">
                                        <label class="ml-1 sm:ml-2 form-check-label inline-block text-gray-700"
                                            for="double"> Double Space </label>
                                    </div>
                                </div>
                            </div>


                            <div class="w-full lg:w-1/2 mb-3">
                                <div class="w-full px-1 mb-3">
                                    <p class="text-black text-base ">Attach File (max file attach : 10 | max file
                                        size : 25Mb)</p>
                                    <input type="file" name="emailAttachments[]" multiple=""
                                        class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('emailAttachments') border-red-500 @enderror"
                                        accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                                        aria-describedby="email_attacements_help" id="email_attacements"
                                        name="emailAttachments[]" type="file" multiple>
                                </div>
                                <p class="text-black text-sm">if file is larger then 25Mb then please email us on
                                    info@assignmentshelp.ae</p>
                                @if ($errors->has('emailAttachments.*'))
                                    @foreach ($errors->get('emailAttachments.*') as $message)
                                        <p class="text-red-600 text-sm">{{ $message[0] }}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <h2 class="text-red-700 my-4 font-medium title-font text-4xl text-center">Contact Information</h2>

                        <div class="flex flex-wrap ">

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label>Name:</label>
                                <input type="text" name="name"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none mt-2 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out @error('name') border-red-500 @enderror placeholder-black"
                                    placeholder="Full Name" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label>Email:</label>
                                <input type="email" name="email"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none py-2 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out  @error('email') border-red-500 @enderror placeholder-black"
                                    placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label>Country:</label>
                                <select name="country"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none py-3 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out @error('country') border-red-500 @enderror placeholder-black">
                                    <option hidden="" value="0" disabled="" selected="">Country</option>
                                    @foreach ($countries as $country)
                                        <option {{ old('country') == $country->code ? 'selected' : '' }}
                                            value="{{ $country->code }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label>Phone Number:</label>
                                <input type="tel" name="Phone" id="phone"
                                    class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base h-12 outline-none py-2 px-3 mt-2 leading-8 transition-colors duration-200 ease-in-out  @error('phone') border-red-500 @enderror placeholder-black"
                                    placeholder="Phone" value="{{ old('phone') }}"
                                    oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                                    data-intl-tel-input-id="0">
                                <input type="hidden" name="phone" id="phone2" />
                                @error('phone')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <h2 class="text-center text-red-700 my-4 font-medium title-font text-3xl">
                            Total Cost €: <span class="text-3xl"> <span id="cost"> 0</span>
                        </h2>
                        <div class="text-center">
                            <button type="submit" id="btn-submit" class="btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        // Ajax request to submit the form
        $(document).ready(function() {
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                preferredCountries: ["ir"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            $("#order-form").submit(function() {
                $('#order-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
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
                        $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ?
                            1 : $(
                                "#no_of_pages").val())))
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
        });

        // fare ajax request
    </script>
@endsection
