@extends('layouts.app')

@section('title', 'RTO Vehicle Registration Details - ThiyagiPedia')
@section('description', 'Search vehicle registration details by state code and get comprehensive RTO information across India.')
@section('keywords', 'RTO, Vehicle Registration, Transport Office, India, State Code')

@section('content')
<!-- Hero Section -->
<section class="gradient-bg relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="text-center lg:text-left">
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    RTO Vehicle
                    <span class="text-yellow-400">Registration</span>
                    Details
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl">
                    Get instant access to comprehensive vehicle registration details by state code.
                    Find RTO office information, addresses, and contact details across India.
                </p>

                <!-- Search Form -->
                <div class="glass-effect rounded-2xl p-8 max-w-md mx-auto lg:mx-0">
                    <h2 class="text-2xl font-semibold text-white mb-6">Enter Vehicle Number</h2>
                    <form action="{{ route('fetch.data') }}" method="GET" class="space-y-4">
                        <div>
                            <input
                                type="text"
                                name="search_input"
                                placeholder="TN-20"
                                class="input-field bg-white/90 placeholder-gray-500 text-gray-900"
                                required
                            >
                        </div>
                        <button type="submit" class="btn-primary w-full text-lg py-4">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            Get RTO Details
                        </button>
                    </form>
                </div>
            </div>

            <!-- Image -->
            <div class="hidden lg:block">
                <div class="relative">
                    <img src="{{ asset('images/foo.jpg') }}" alt="RTO Vehicle Registration" class="rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-4 -right-4 bg-yellow-400 text-gray-900 p-4 rounded-xl shadow-lg">
                        <div class="text-2xl font-bold">29</div>
                        <div class="text-sm">States Covered</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
@if(isset($data) && count($data) > 0)
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">RTO Details Found</h2>
            <p class="text-xl text-gray-600">Here are the registration details for your search</p>
        </div>

        @foreach ($data as $row)
        <div class="card max-w-4xl mx-auto mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-100 p-2 rounded-lg">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">RTO Code</h3>
                            <p class="text-2xl font-bold text-blue-600">{{ $row->rto_no }}</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <div class="bg-green-100 p-2 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">City</h3>
                            <p class="text-xl text-gray-700">{{ $row->city }}</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center space-x-3">
                        <div class="bg-purple-100 p-2 rounded-lg">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">State</h3>
                            <p class="text-xl text-gray-700">{{ $row->state }}</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <div class="bg-orange-100 p-2 rounded-lg">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Phone</h3>
                            <p class="text-xl text-gray-700">{{ $row->phone_no }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-200">
                <div class="flex items-start space-x-3">
                    <div class="bg-red-100 p-2 rounded-lg flex-shrink-0">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Address</h3>
                        <p class="text-gray-700 leading-relaxed">{{ $row->address }}</p>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-8 p-6 bg-blue-50 rounded-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">
                    {{ $row->city }} {{ $row->rto_no }} RTO Office Details
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    The Regional Transport Office in {{ $row->city }}, {{ $row->state }} with registration code {{ $row->rto_no }}
                    is your go-to destination for all vehicle registration services. Contact them using the provided phone number
                    or visit their office at the address mentioned above for any vehicle-related documentation and services.
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endif

<!-- State-wise Registration Section -->
@if(isset($codeData) && count($codeData) > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                State-Wise Vehicle Registration Details
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Explore vehicle registration details across all Indian states.
                Click on any state to get comprehensive RTO information.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @foreach ($codeData as $row)
            <a href="{{ url(str_replace(' ', '', $row->state).'-'. $row->code . '-rto-vehicle-registration-details') }}"
               class="bg-white hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg p-4 text-center transition-all duration-200 shadow-sm hover:shadow-md group">
                <div class="text-2xl mb-2 group-hover:scale-110 transition-transform duration-200">
                    🏛️
                </div>
                <h3 class="font-semibold text-gray-900 text-sm mb-1">{{ $row->state }}</h3>
                <span class="text-xs text-blue-600 font-medium">{{ $row->code }}</span>
            </a>
            @endforeach
        </div>
    </div>
</section>
@else
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-8">
            <div class="text-6xl mb-4">⚠️</div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">No State Data Available</h3>
            <p class="text-gray-600">We're currently updating our state-wise RTO database. Please try again later.</p>
        </div>
    </div>
</section>
@endif

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Why Choose ThiyagiPedia?</h2>
            <p class="text-xl text-gray-600">Your trusted source for accurate RTO information</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Instant Results</h3>
                <p class="text-gray-600">Get RTO details instantly with our fast and reliable search engine.</p>
            </div>

            <div class="text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Accurate Data</h3>
                <p class="text-gray-600">Comprehensive and up-to-date RTO information across all Indian states.</p>
            </div>

            <div class="text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Secure & Safe</h3>
                <p class="text-gray-600">Your searches are secure and we don't store any personal information.</p>
            </div>
        </div>
    </div>
</section>
@endsection
