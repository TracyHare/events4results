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
    <header>
        <div class="relative bg-white">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="/">
                        <span class="sr-only">RE/MAX Results Events</span>
                        <img class="h-8 w-auto sm:h-10" src="https://remax-results.com/img/results_logo_03.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>



    <main>
        <div class="lg:overflow-hidden">
            <div class="mx-auto max-w-7xl lg:px-8">
                <!-- Blog section -->
                <div class="relative py-8 sm:py-12 lg:py-16">
                    <div class="relative">
                        <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                            <h2 class="text-base text-3xl font-extrabold text-gray-900 tracking-wider uppercase">Upcoming Events</h2>
                            <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">

                            </p>
                        </div>

                        <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
                            <a href="1" class="block">
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                                </div>
                                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-cyan-600">
                                                January 25, 2022
                                        </p>

                                            <p class="text-xl font-semibold text-gray-900">
                                                Continuing Education
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                Two courses and Lunch are being offered.
                                                <span class="font-semibold italic">Federal Fair Housing</span> (Core) and
                                                <span class="font-semibold italic">Smart Growth for the 21st Century</span> (Elective).
                                                You can register for one class or both, with or without lunch.
                                            </p>

                                    </div>
                                </div>
                            </div>
                            </a>

{{--                            <a href="ce" class="block">--}}
{{--                                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
{{--                                        <div class="flex-1">--}}
{{--                                            <p class="text-sm font-medium text-cyan-600">--}}
{{--                                                February 24, 2022--}}
{{--                                            </p>--}}

{{--                                            <p class="text-xl font-semibold text-gray-900">--}}
{{--                                                Continuing Education--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-3 text-base text-gray-500">--}}
{{--                                                <span class="font-semibold italic">Investor’s Title Continuing Education</span> (Elective)--}}
{{--                                            </p>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}



{{--                            <a href="ce" class="block">--}}
{{--                                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
{{--                                        <div class="flex-1">--}}
{{--                                            <p class="text-sm font-medium text-cyan-600">--}}
{{--                                                March 8, 2022--}}
{{--                                            </p>--}}

{{--                                            <p class="text-xl font-semibold text-gray-900">--}}
{{--                                                Continuing Education--}}
{{--                                            </p>--}}
{{--                                            <p class="mt-3 text-base text-gray-500">--}}
{{--                                                <span class="font-semibold italic">Understanding the Needs of Your First-Time Investors</span> (Elective)--}}
{{--                                            </p>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
