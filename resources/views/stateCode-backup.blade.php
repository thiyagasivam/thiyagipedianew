<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<head>
    <meta name="google-adsense-account" content="ca-pub-1381776395680802">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    
    <!-- Add more meta tags as needed -->
    <!-- Canonical Link -->
    @php
        $currentDate = now()->format('Y-m-d');
        $canonicalUrl = url()->current();
    @endphp
    <link rel="canonical" href="{{ $canonicalUrl }}">
    @if(isset($data) && count($data) > 0)
    @foreach ($data as $row)
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Search {{ $row->rto_no }} {{$row->city}}{{$currentDate}} vehicle registration details and get all the RTO information including address, email ID & phone number online only at Thiyagipedia.">
        <meta name="keywords" content="{{ $row->rto_no }} {{$row->city}} Vehicle Registration Details">
        <meta name="author" content="Thiyagipedia">
        <title>{{$row->city}}({{ $row->rto_no}}) RTO Offices Vehicle Registration Details {{$currentDate}} - ThiyagiPedia</title>
    @endforeach
    @endif
    <!-- Other head elements go here -->
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SRLG3Y0TBJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SRLG3Y0TBJ');
</script>
</head>



<header class="static-header">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Your Logo" class="logoImg">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Home</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">RTO Details</a>
                        <a class="dropdown-item" href="#">Contact</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
@if(\Agent::isMobile())
    <div id="section1" class="sectionMob1">
        <img src="{{ asset('images/foo.jpg') }}" alt="tag">
    </div>
    <div class="vehicalContentMob">
        <p>RTO Vehicle</p>
        <p>Registration Details by State Code</p>
    </div>
    <div class="vechicalBoxMob">
        <h2>Enter vehicle number</h2>
        <form action="{{ route('fetch.data') }}" method="GET" class="search-form">
            <input type="text" name="search_input" placeholder="TN-20"  id="search_input">
            <button class="font-16" type="submit">GET RTO DETAILS</button>
        </form>
    </div>
    <div id="section3" class="sectionMob3">
            @if(isset($data) && count($data) > 0)
                <div class="stateClick">
                    <h1>{{ ucfirst($code)  }} RTO Details</h1>
                    @foreach ($data as $row)
                        <button>
                            <a href="{{ url(trim(str_replace('-', '', strtolower($row->rto_no))).'-rto-vehicle-registration-details-number') }}">{{ $row->rto_no }}</a>
                        </button>
                    @endforeach
                </div>
            @else
                <p>No data found</p>
            @endif
        </div>
@else
    <div class="container__content">
        <div id="section1" class="section1">
            <img src="{{ asset('images/foo.jpg') }}" alt="tag">
            <div class="vehicalContent">
                <h1>RTO Vehicle</h1>
                <h2>Registration Details by State Code</h2>
            </div>
            <div class="vechicalBox">
                <h2>Enter vehicle number</h2>
                <form action="{{ route('fetch.data') }}" method="GET" class="search-form">
                    <input type="text" name="search_input" placeholder="TN 20">
                    <button type="submit">GET RTO DETAILS</button>
                </form>
            </div>
        </div>
        <div id="section3" class="sectionMob3">
            @if(isset($data) && count($data) > 0)
                <div class="stateClick">
                    <h1>{{ ucfirst($code)  }} RTO Details</h1>
                    @foreach ($data as $row)
                        <button>
                            <a href="{{ url(trim(str_replace('-', '', strtolower($row->rto_no))).'-rto-vehicle-registration-details-number') }}">{{ $row->rto_no }}</a>
                        </button>
                    @endforeach
                </div>
            @else
                <p>No data found</p>
            @endif
        </div>
    </div>
@endif
<footer class="static-footer">
    <small>Thiyagipedia</small>
</footer>
</html>