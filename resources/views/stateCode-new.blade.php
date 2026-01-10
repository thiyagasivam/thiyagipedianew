@extends('layouts.app')

@section('title')
@if(isset($data) && count($data) > 0)
    @foreach ($data as $row)
        {{$row->city}}({{ $row->rto_no}}) RTO Offices Vehicle Registration Details {{ now()->format('Y-m-d') }} - ThiyagiPedia
        @break
    @endforeach
@else
    State RTO Vehicle Registration Details - ThiyagiPedia
@endif
@endsection

@section('description')
@if(isset($data) && count($data) > 0)
    @foreach ($data as $row)
        Search {{ $row->rto_no }} {{$row->city}} {{ now()->format('Y-m-d') }} vehicle registration details and get all the RTO information including address, email ID & phone number online only at Thiyagipedia.
        @break
    @endforeach
@else
    Search state-wise vehicle registration details and get comprehensive RTO information across India.
@endif
@endsection

@section('keywords')
@if(isset($data) && count($data) > 0)
    @foreach ($data as $row)
        {{ $row->rto_no }} {{$row->city}} Vehicle Registration Details
        @break
    @endforeach
@else
    RTO, Vehicle Registration, Transport Office, State Code
@endif
@endsection

@section('content')
@if(isset($data) && count($data) > 0)
    @foreach ($data as $row)
    <!-- Hero Section for State Page -->
    <section class="gradient-bg relative overflow-hidden py-24">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-md rounded-full px-6 py-3 mb-6">
                    <span class="text-2xl font-bold mr-3">{{ $row->rto_no }}</span>
                    <span class="text-lg">{{ $row->city }}, {{ $row->state }}</span>
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                    {{ $row->city }} RTO Office
                </h1>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                    Complete vehicle registration details and contact information for {{ $row->city }} Regional Transport Office
                </p>
            </div>
        </div>
    </section>

    <!-- RTO Details Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="card">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">RTO Registration Details</h2>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">RTO Code</h3>
                                <p class="text-2xl font-bold text-blue-600">{{ $row->rto_no }}</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="bg-green-100 p-3 rounded-lg">
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
                        <div class="flex items-center space-x-4">
                            <div class="bg-purple-100 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">State</h3>
                                <p class="text-xl text-gray-700">{{ $row->state }}</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="bg-orange-100 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Phone</h3>
                                <p class="text-xl text-gray-700">{{ $row->phone_no ?: 'Not Available' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="border-t border-gray-200 pt-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-red-100 p-3 rounded-lg flex-shrink-0">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Office Address</h3>
                            <p class="text-gray-700 leading-relaxed text-lg">{{ $row->address }}</p>
                        </div>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        About {{ $row->city }} {{ $row->rto_no }} RTO Office
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        The Regional Transport Office in {{ $row->city }}, {{ $row->state }} with registration code {{ $row->rto_no }}
                        serves as your primary destination for all vehicle registration and licensing services. This office handles
                        vehicle registration, driving license issuance, permit applications, and other transport-related documentation.
                        You can visit the office during working hours or contact them using the provided phone number for any queries
                        related to vehicle registration and transport services.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @break
    @endforeach

    <!-- Services Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">RTO Services</h2>
                <p class="text-xl text-gray-600">Services available at this RTO office</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Vehicle Registration</h3>
                    <p class="text-gray-600">New vehicle registration and transfer of ownership services.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Driving License</h3>
                    <p class="text-gray-600">Apply for new driving license or renew existing license.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Vehicle Permits</h3>
                    <p class="text-gray-600">Commercial vehicle permits and route permit applications.</p>
                </div>
            </div>
        </div>
    </section>
@else
    <!-- No Data Found -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white rounded-2xl shadow-lg p-12">
                <div class="text-6xl mb-6">🔍</div>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">No RTO Data Found</h1>
                <p class="text-xl text-gray-600 mb-8">
                    We couldn't find RTO details for the requested location.
                    Please try searching for a different state or RTO code.
                </p>
                <a href="{{ url('/') }}" class="btn-primary inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Search
                </a>
            </div>
        </div>
    </section>
@endif

<!-- Search Again Section -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Search Another RTO</h3>
            <p class="text-gray-600 mb-6">Enter a different vehicle number to get RTO details</p>

            <form action="{{ route('fetch.data') }}" method="GET" class="max-w-md mx-auto">
                <div class="flex space-x-4">
                    <input
                        type="text"
                        name="search_input"
                        placeholder="Enter vehicle number (e.g., TN-20)"
                        class="input-field flex-1"
                        required
                    >
                    <button type="submit" class="btn-primary px-6">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
