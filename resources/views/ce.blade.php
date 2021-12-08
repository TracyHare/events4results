<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  style="scroll-behavior: smooth;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events4Results</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/masking-input.css') }}" rel="stylesheet">

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body>
    <div class="bg-white">
        <header>
            <div class="relative bg-white">
                <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="#">
                            <span class="sr-only">RE/MAX Results Events</span>
                            <img class="h-8 w-auto sm:h-10" src="https://remax-results.com/img/results_logo_03.svg" alt="">
                        </a>
                    </div>

                </div>

            </div>
        </header>

        <main>
            <!-- Hero section -->
            <div class="relative">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                        <div class="absolute inset-0">
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
                            <div class="absolute inset-0 bg-gradient-to-b from-red-600 to-blue-600 mix-blend-multiply"></div>
                        </div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                <span class="block text-white">Continuing Education</span>
                                <span class="block text-blue-200">with Nate Johnson</span>
                            </h1>
                            <p class="mt-6 max-w-lg mx-auto text-center text-2xl text-blue-200 sm:max-w-3xl">
{{--                                RE/MAX Results Business Planning--}}
                            </p>
                            <p class="mt-1 max-w-lg mx-auto text-center text-2xl text-blue-200 sm:max-w-3xl">
                                Tuesday, January 25<span class="text-base relative -top-2">th</span>, 2021
                            </p>


                            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                    <a href="#details" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-blue-700 bg-white hover:bg-blue-50 sm:px-8">
                                        Details
                                    </a>
                                    <a href="#registration" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                        Register
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div id="details" class="py-16 relative bg-gray-100">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="relative border shadow-xl sm:rounded-2xl sm:overflow-hidden">
                        <p class="mt-4 max-w-lg mx-auto text-center font-semibold text-3xl text-gray-700 sm:max-w-3xl">
                            Location
                        </p>
                        <p class="mt-2 max-w-lg mx-auto text-center text-2xl font-semibold text-gray-700 sm:max-w-3xl">
                            Des Peres Lodge
                        </p>
                        <p class="max-w-lg mx-auto text-center text-xl text-gray-700 sm:max-w-3xl">
                        1050 Des Peres Rd<br>
                        Des Peres, MO 63131
                        <p class="py-8 max-w-lg mx-auto text-center font-semibold text-3xl text-gray-700 sm:max-w-3xl">
                            Classes and Lunch are Free
                        </p>
                    </div>
                </div>
            </div>





            <div id="registration" class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
                <div class="relative max-w-xl mx-auto">
                    <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                        <defs>
                            <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                    </svg>
                    <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                        <defs>
                            <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                    </svg>
                    <div class="text-center">


                        @isset($status)
                        <div class="rounded-md bg-green-50 p-4 mb-4 border border-green-400 shadow-lg">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <!-- Heroicon name: solid/check-circle -->
                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-green-800">
                                        {{ $status }}
                                    </h3>
                                    <div class="mt-2 text-sm text-green-700">
                                        <p>
                                            A confirmation email is on it's way.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endisset


                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            Registration
                        </h2>
                        <p class="mt-4 text-lg leading-6 text-gray-500">
                            Please complete all fields.
                        </p>
                    </div>
                    <div class="mt-12">
                        <form action="ce#registration" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-4 sm:gap-x-8">
                            @CSRF
                            <div class="sm:col-span-2">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                <div class="mt-1">
                                    <input type="text" name="first_name" id="first_name"
                                           class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"
                                           value="{{ old('first_name') }}"
                                    >
                                </div>
                                @error('first_name')<div class="absolute text-red-600 text-xs">Required</div>@endif
                            </div>
                            <div class="sm:col-span-2">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <div class="mt-1">
                                    <input type="text" name="last_name" id="last_name"
                                           class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"
                                           value="{{ old('last_name') }}"
                                    >
                                </div>
                                @error('last_name')<div class="absolute text-red-600 text-xs">Required</div>@endif
                            </div>

                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                           class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"
                                           value="{{ old('email') }}"
                                    >
                                </div>
                                @error('email')<div class="absolute text-red-600 text-xs">Required</div>@endif
                            </div>

                            <div class="sm:col-span-2">
                                <label for="license" class="block text-sm font-medium text-gray-700">MO License Number</label>
                                <div class="mt-1">
                                    <input type="text" name="license" id="license"
                                           class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"
                                           value="{{ old('license') }}"
                                    >
                                </div>
                                @error('license')<div class="absolute text-red-600 text-xs">Required</div>@endif
                            </div>

                            <div class="sm:col-span-2">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <div class="mt-1">
                                    <input type="text" name="phone" id="phone" autocomplete="tel"
                                           class="py-3 px-4 block w-full focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md masked"
                                           placeholder="(XXX) XXX-XXXX"
                                           value="{{ old('phone') }}"
                                    >
                                </div>
                                @error('phone')<div class="absolute text-red-600 text-xs">{{ $message }}</div>@endif
                            </div>


                            <div class="sm:col-span-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Home Address</label>
                                <div class="mt-1">
                                    <input type="text" id="address" name="address" autocomplete="address"
                                           class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"
                                           value="{{ old('address') }}"
                                    >
                                </div>
                                @error('address')<div class="absolute text-red-600 text-xs">Required</div>@endif
                            </div>

                            <div class="sm:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <div class="mt-1">
                                    <input type="text" id="city" name="city" autocomplete="city"
                                           class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"
                                           value="{{ old('city') }}"
                                    >
                                </div>
                                @error('city')<div class="absolute text-red-600 text-xs">Required</div>@endif
                            </div>

                            <div>
                                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                                <div class="mt-1">
                                    <select id="state" name="state" autocomplete="state"
                                            class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"
                                            value="{{ old('state') }}"
                                    >
                                        <option {{ old('state') == "AL" ? "selected" : "" }} value="AL">AL</option>
                                        <option {{ old('state') == "AK" ? "selected" : "" }} value="AK">AK</option>
                                        <option {{ old('state') == "AR" ? "selected" : "" }} value="AR">AR</option>
                                        <option {{ old('state') == "AZ" ? "selected" : "" }} value="AZ">AZ</option>
                                        <option {{ old('state') == "CA" ? "selected" : "" }} value="CA">CA</option>
                                        <option {{ old('state') == "CO" ? "selected" : "" }} value="CO">CO</option>
                                        <option {{ old('state') == "CT" ? "selected" : "" }} value="CT">CT</option>
                                        <option {{ old('state') == "DC" ? "selected" : "" }} value="DC">DC</option>
                                        <option {{ old('state') == "DE" ? "selected" : "" }} value="DE">DE</option>
                                        <option {{ old('state') == "FL" ? "selected" : "" }} value="FL">FL</option>
                                        <option {{ old('state') == "GA" ? "selected" : "" }} value="GA">GA</option>
                                        <option {{ old('state') == "HI" ? "selected" : "" }} value="HI">HI</option>
                                        <option {{ old('state') == "IA" ? "selected" : "" }} value="IA">IA</option>
                                        <option {{ old('state') == "ID" ? "selected" : "" }} value="ID">ID</option>
                                        <option {{ old('state') == "IL" ? "selected" : "" }} value="IL">IL</option>
                                        <option {{ old('state') == "IN" ? "selected" : "" }} value="IN">IN</option>
                                        <option {{ old('state') == "KS" ? "selected" : "" }} value="KS">KS</option>
                                        <option {{ old('state') == "KY" ? "selected" : "" }} value="KY">KY</option>
                                        <option {{ old('state') == "LA" ? "selected" : "" }} value="LA">LA</option>
                                        <option {{ old('state') == "MA" ? "selected" : "" }} value="MA">MA</option>
                                        <option {{ old('state') == "MD" ? "selected" : "" }} value="MD">MD</option>
                                        <option {{ old('state') == "ME" ? "selected" : "" }} value="ME">ME</option>
                                        <option {{ old('state') == "MI" ? "selected" : "" }} value="MI">MI</option>
                                        <option {{ old('state') == "MN" ? "selected" : "" }} value="MN">MN</option>
                                        <option {{ (old('state') == "MO" || old('state') == "") ? "selected" : "" }} value="MO">MO</option>
                                        <option {{ old('state') == "MS" ? "selected" : "" }} value="MS">MS</option>
                                        <option {{ old('state') == "MT" ? "selected" : "" }} value="MT">MT</option>
                                        <option {{ old('state') == "NC" ? "selected" : "" }} value="NC">NC</option>
                                        <option {{ old('state') == "NE" ? "selected" : "" }} value="NE">NE</option>
                                        <option {{ old('state') == "NH" ? "selected" : "" }} value="NH">NH</option>
                                        <option {{ old('state') == "NJ" ? "selected" : "" }} value="NJ">NJ</option>
                                        <option {{ old('state') == "NM" ? "selected" : "" }} value="NM">NM</option>
                                        <option {{ old('state') == "NV" ? "selected" : "" }} value="NV">NV</option>
                                        <option {{ old('state') == "NY" ? "selected" : "" }} value="NY">NY</option>
                                        <option {{ old('state') == "ND" ? "selected" : "" }} value="ND">ND</option>
                                        <option {{ old('state') == "OH" ? "selected" : "" }} value="OH">OH</option>
                                        <option {{ old('state') == "OK" ? "selected" : "" }} value="OK">OK</option>
                                        <option {{ old('state') == "OR" ? "selected" : "" }} value="OR">OR</option>
                                        <option {{ old('state') == "PA" ? "selected" : "" }} value="PA">PA</option>
                                        <option {{ old('state') == "RI" ? "selected" : "" }} value="RI">RI</option>
                                        <option {{ old('state') == "SC" ? "selected" : "" }} value="SC">SC</option>
                                        <option {{ old('state') == "SD" ? "selected" : "" }} value="SD">SD</option>
                                        <option {{ old('state') == "TN" ? "selected" : "" }} value="TN">TN</option>
                                        <option {{ old('state') == "TX" ? "selected" : "" }} value="TX">TX</option>
                                        <option {{ old('state') == "UT" ? "selected" : "" }} value="UT">UT</option>
                                        <option {{ old('state') == "VT" ? "selected" : "" }} value="VT">VT</option>
                                        <option {{ old('state') == "VA" ? "selected" : "" }} value="VA">VA</option>
                                        <option {{ old('state') == "WA" ? "selected" : "" }} value="WA">WA</option>
                                        <option {{ old('state') == "WI" ? "selected" : "" }} value="WI">WI</option>
                                        <option {{ old('state') == "WV" ? "selected" : "" }} value="WV">WV</option>
                                        <option {{ old('state') == "WY" ? "selected" : "" }} value="WY">WY</option>
                                    </select>
                                </div>
                                @error('state')<div class="absolute text-red-600 text-xs">Required</div>@endif
                            </div>
                            <div>
                                <label for="zip_code" class="block text-sm font-medium text-gray-700">Zip Code</label>
                                <div class="mt-1">
                                    <input type="text" id="zip_code" name="zip_code" autocomplete="zip_code"
                                           class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md masked"
                                           placeholder="XXXXX"
                                           value="{{ old('zip_code') }}"
                                    >
                                </div>
                                @error('zip_code')<div class="absolute text-red-600 text-xs">{{ $message }}</div>@endif
                            </div>






                            <div class="sm:col-span-4 mt-6"
                                 x-data="{attend: []}"
                                 x-init="
                                    @if(old('class') == 1) attend.class1=true @else attend.class1=false @endif,
                                    @if(old('class') == 2) attend.class2=true @else attend.class2=false @endif,
                                    @if(old('class') == 3) attend.class3=true @else attend.class3=false @endif
                                 "
                            >
                                <div class="block text-sm font-medium text-gray-700">
                                    Which Class Will You be Attending?
                                    @error('class')<span class="text-red-600 text-xs">{{ $message }}</span>@endif
                                </div>

                                <fieldset class="mt-1">
                                    <legend class="sr-only">
                                        Attendance setting
                                    </legend>
                                    <div class="bg-white rounded-md -space-y-px">
                                        <!-- Checked: "bg-blue-50 border-blue-200 z-10", Not Checked: "border-gray-200" -->
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': attend.class1}"
                                               x-on:click="attend.class1 = true, attend.class2 = false, attend.class3 = false"                                        >
                                            <input type="radio" name="class" value="1"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="class1-label"
                                                   aria-describedby="class1-description"
                                                   autocomplete="off"
                                                   @if(old('class') == 1) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <span id="class1-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': attend.class1}">
                                                    Federal Fair Housing
                                                </span>
                                                <span id="class1-description" class="block text-sm text-gray-700" :class="{'text-blue-700': attend.class1}">
                                                    9am - Noon
                                                </span>
                                                <span id="class1-description" class="block text-sm text-gray-700" :class="{'text-blue-700': attend.class1}">
                                                    3 Hours Core CE Credit
                                                </span>
                                            </div>
                                        </label>

                                        <!-- Checked: "bg-blue-50 border-blue-200 z-10", Not Checked: "border-gray-200" -->
                                        <label class="relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': attend.class2}"
                                               x-on:click="attend.class1 = false, attend.class2 = true, attend.class3 = false"
                                        >
                                            <input type="radio" name="class" value="2"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="class2-label"
                                                   aria-describedby="class2-description"
                                                   autocomplete="off"
                                                   @if(old('class') == 2) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="class2-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': attend.class2}">
                                                    Smart Growth for the 21st Century
                                                </span>
                                                <span id="class2-description" class="block text-sm text-gray-700" :class="{'text-blue-700': attend.class2}">
                                                    1pm - 4pm
                                                </span>
                                                <span id="class2-description" class="block text-sm text-gray-700" :class="{'text-blue-700': attend.class2}">
                                                    3 Hours Elective CE Credit
                                                </span>
                                            </div>
                                        </label>

                                        <!-- Checked: "bg-blue-50 border-blue-200 z-10", Not Checked: "border-gray-200" -->
                                        <label class="rounded-bl-md rounded-br-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': attend.class3}"
                                               x-on:click="attend.class1 = false, attend.class2 = false, attend.class3 = true"
                                        >
                                            <input type="radio" name="class" value="3"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="class_both-label"
                                                   aria-describedby="class_both-description"
                                                   autocomplete="off"
                                                   @if(old('class') == 3) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="class_both-label" class="block text-sm font-medium" :class="{'text-blue-900': attend.class3}">
                                                    I Will Attend Both Classes
                                                </span>
                                                <!-- Checked: "text-blue-700", Not Checked: "text-gray-500" -->
                                                <span id="class_both-description" class="block text-sm" :class="{'text-blue-700': attend.class3}">

                                                </span>
                                            </div>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>






                            <div class="sm:col-span-4 mt-6"
                                 x-data="{lunch: []}"
                                 x-init="
                                     @if(old('lunch') == 1) lunch.option1=true @else lunch.option1=false @endif,
                                     @if(old('lunch') == 2) lunch.option2=true @else lunch.option2=false @endif,
                                     @if(old('lunch') == 3) lunch.option3=true @else lunch.option3=false @endif,
                                     @if(old('lunch') == 4) lunch.option4=true @else lunch.option4=false @endif,
                                     @if(old('lunch') == 5) lunch.option5=true @else lunch.option5=false @endif,
                                     @if(old('lunch') == 6) lunch.option6=true @else lunch.option6=false @endif,
                                     @if(old('lunch') == 7) lunch.option7=true @else lunch.option7=false @endif
                                     "
                            >
                                <div class="block text-sm font-medium text-gray-700">
                                    Lunch Options
                                    @error('lunch')<span class="text-red-600 text-xs">{{ $message }}</span>@endif
                                </div>
                                <fieldset class="mt-1">
                                    <legend class="sr-only">
                                        Lunch Options
                                    </legend>
                                    <div class="bg-white rounded-md -space-y-px">
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': lunch.option1}"
                                               x-on:click="lunch.option1 = true, lunch.option2 = false, lunch.option3 = false, lunch.option4 = false, lunch.option5 = false, lunch.option6 = false, lunch.option7 = false">
                                            <input type="radio" name="lunch" value="1"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="lunch1-label"
                                                   aria-describedby="lunch1-description"
                                                   autocomplete="off"
                                                   @if(old('lunch') == 1) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="lunch1-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': lunch.option1}">
                                                    Chopped Garden Salad
                                                </span>
                                                <!-- Checked: "text-blue-700", Not Checked: "text-gray-500" -->
                                                <span id="lunch1-description" class="block text-sm text-gray-700" :class="{'text-blue-700': lunch.option1}">
                                                    Mixed greens, diced tomatoes, diced cucumbers, mushrooms, black olives, sprouts, red onion, fresh carrot and buttermilk ranch dressing. Served with a dessert.
                                                </span>
                                            </div>
                                        </label>
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': lunch.option2}"
                                               x-on:click="lunch.option1 = false, lunch.option2 = true, lunch.option3 = false, lunch.option4 = false, lunch.option5 = false, lunch.option6 = false, lunch.option7 = false">
                                            <input type="radio" name="lunch" value="2"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="lunch2-label"
                                                   aria-describedby="lunch2-description"
                                                   autocomplete="off"
                                                   @if(old('lunch') == 2) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="lunch2-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': lunch.option2}">
                                                    Harvest Salad
                                                </span>
                                                <!-- Checked: "text-blue-700", Not Checked: "text-gray-500" -->
                                                <span id="lunch2-description" class="block text-sm text-gray-700" :class="{'text-blue-700': lunch.option2}">
                                                    Mixed salad greens, candied pecans, bleu cheese crumbles, grapes, cranberries, red pepper, tart apple, red onion and sun-dried cherry vinaigrette.  Served with a dessert.
                                                </span>
                                            </div>
                                        </label>
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': lunch.option3}"
                                               x-on:click="lunch.option1 = false, lunch.option2 = false, lunch.option3 = true, lunch.option4 = false, lunch.option5 = false, lunch.option6 = false, lunch.option7 = false">
                                            <input type="radio" name="lunch" value="3"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="lunch3-label"
                                                   aria-describedby="lunch3-description"
                                                   autocomplete="off"
                                                   @if(old('lunch') == 3) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="lunch3-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': lunch.option3}">
                                                    Skyscraper Sandwich
                                                </span>
                                                <!-- Checked: "text-blue-700", Not Checked: "text-gray-500" -->
                                                <span id="lunch3-description" class="block text-sm text-gray-700" :class="{'text-blue-700': lunch.option3}">
                                                    Roast beef, turkey, ham, salami and capocollo with cheddar and Swiss cheese on a cobblestone roll, served with bistro chips and roast beef, turkey, ham, salami and capocollo with cheddar and Swiss cheese on a cobblestone roll, served with bistro chips and dessert.
                                                </span>
                                            </div>
                                        </label>
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': lunch.option4}"
                                               x-on:click="lunch.option1 = false, lunch.option2 = false, lunch.option3 = false, lunch.option4 = true, lunch.option5 = false, lunch.option6 = false, lunch.option7 = false">
                                            <input type="radio" name="lunch" value="4"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="lunch4-label"
                                                   aria-describedby="lunch4-description"
                                                   autocomplete="off"
                                                   @if(old('lunch') == 4) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="lunch4-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': lunch.option4}">
                                                    Bottom Line Sandwich
                                                </span>
                                                <!-- Checked: "text-blue-700", Not Checked: "text-gray-500" -->
                                                <span id="lunch4-description" class="block text-sm text-gray-700" :class="{'text-blue-700': lunch.option4}">
                                                    Roasted turkey breast with provolone cheese on wheat Bolillo roll, served with bistro chips and dessert.
                                                </span>
                                            </div>
                                        </label>
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': lunch.option5}"
                                               x-on:click="lunch.option1 = false, lunch.option2 = false, lunch.option3 = false, lunch.option4 = false, lunch.option5 = true, lunch.option6 = false, lunch.option7 = false">
                                            <input type="radio" name="lunch" value="5"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="lunch5-label"
                                                   aria-describedby="lunch5-description"
                                                   autocomplete="off"
                                                   @if(old('lunch') == 5) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="lunch5-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': lunch.option5}">
                                                    Grilled Vegetable Wrap
                                                </span>
                                                <!-- Checked: "text-blue-700", Not Checked: "text-gray-500" -->
                                                <span id="lunch5-description" class="block text-sm text-gray-700" :class="{'text-blue-700': lunch.option5}">
                                                    Fire roasted vegetables with mixed greens and avocado, served with bistro chips and dessert.
                                                </span>
                                            </div>
                                        </label>
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': lunch.option6}"
                                               x-on:click="lunch.option1 = false, lunch.option2 = false, lunch.option3 = false, lunch.option4 = false, lunch.option5 = false, lunch.option6 = true, lunch.option7 = false">
                                            <input type="radio" name="lunch" value="6"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="lunch6-label"
                                                   aria-describedby="lunch6-description"
                                                   autocomplete="off"
                                                   @if(old('lunch') == 6) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="lunch6-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': lunch.option6}">
                                                    Net Profit Sandwich
                                                </span>
                                                <!-- Checked: "text-blue-700", Not Checked: "text-gray-500" -->
                                                <span id="lunch6-description" class="block text-sm text-gray-700" :class="{'text-blue-700': lunch.option6}">
                                                    White albacore tuna salad on a croissant, served with bistro chips and dessert.
                                                </span>
                                            </div>
                                        </label>
                                        <label class="rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer focus:outline-none"
                                               :class="{'bg-blue-50 border-blue-200': lunch.option7}"
                                               x-on:click="lunch.option1 = false, lunch.option2 = false, lunch.option3 = false, lunch.option4 = false, lunch.option5 = false, lunch.option6 = false, lunch.option7 = true">
                                            <input type="radio" name="lunch" value="7"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-blue-600 border-gray-300 focus:ring-blue-500"
                                                   aria-labelledby="lunch7-label"
                                                   autocomplete="off"
                                                   @if(old('lunch') == 7) checked @endif
                                            >
                                            <div class="ml-3 flex flex-col">
                                                <!-- Checked: "text-blue-900", Not Checked: "text-gray-900" -->
                                                <span id="lunch7-label" class="block text-sm font-medium text-gray-900" :class="{'text-blue-900': lunch.option7}">
                                                    I will not be eating lunch.
                                                </span>
                                            </div>
                                        </label>

                                    </div>
                                </fieldset>
                            </div>



                            <div class="sm:col-span-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <div class="mt-1">
                                    <textarea id="message" name="message" rows="4"
                                        class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border border-gray-300 rounded-md placeholder-shown:italic placeholder-gray-400"
                                        placeholder="Dietary restrictions, accessibility requirements, etc."

                                    >{{ old('message') }}</textarea>
                                </div>
                            </div>





                            <div class="sm:col-span-4">
                                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Submit Registration
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>












        </main>


        <footer class="bg-gray-50" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:pt-24 lg:px-8">
                <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
                    <div class="flex space-x-6 md:order-2">
                        <a href="https://www.facebook.com/RemaxResultsSTL" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>

{{--                        <a href="#" class="text-gray-400 hover:text-gray-500">--}}
{{--                            <span class="sr-only">Instagram</span>--}}
{{--                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">--}}
{{--                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}

                        <a href="https://twitter.com/ReMaxResults1" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>

                    </div>
                    <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                        &copy; {{ now()->year }} RE/MAX Results. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>














    <script src="{{ asset('js/masking-input.js') }}" data-autoinit="true"></script>`




    </body>
</html>
