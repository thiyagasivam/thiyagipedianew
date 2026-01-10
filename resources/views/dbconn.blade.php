<!--use Illuminate\Support\Str;-->
<!DOCTYPE html>
<html lang="en">
<!-- Add these links to your head section -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="{{ asset('js/script.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<head>
    <!-- Clarity tracking code for https://thiyagipedia.com/ -->
<script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "su9csmhrpd");
</script>
    <meta name="google-adsense-account" content="ca-pub-1381776395680802">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SRLG3Y0TBJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SRLG3Y0TBJ');
</script>


    @php
        $currentDate = now()->format('Y-m-d');
        $canonicalUrl = url()->current();
    @endphp
    <link rel="canonical" href="{{ $canonicalUrl }}">
    @if(isset($data) && count($data) > 0)
    @foreach ($data as $row)
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Search {{ $row->rto_no }} {{$row->city}}{{$currentDate}} vehicle registration details and get all the RTO information including address, email ID & phone number online only at Thiyagipedia.">
        <meta name="keywords" content="{{ $row->rto_no }} Pudukottai Vehicle Registration Details">
        <meta name="author" content="Thiyagipedia">
        <title>{{$row->city}}({{ $row->rto_no}}) RTO Offices Vehicle Registration Details{{$currentDate}} - ThiyagiPedia</title>
    @endforeach
    @endif
    <!-- Other head elements go here -->

</head>

<header class="static-header">
    <div class="logo">
        <!--<img src="{{ asset('images/logo.png') }}" alt="Your Logo" class="logoImg">-->
                <img src="{{ asset('images/tlogo.jpeg') }}" alt="Your Logo" class="logoImg">
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
        @if(isset($data) && count($data) > 0)
            <p>RTO Vehicle</p>
            <p>Registration Details by State Code</p>
        @else
            <h1>RTO Vehicle</h1>
            <h2>Registration Details by State Code</h2>
        @endif
    </div>
    <div class="vechicalBoxMob">
        <h2>Enter vehicle number</h2>
        <form action="{{ route('fetch.data') }}" method="GET" class="search-form">
            <input type="text" name="search_input" placeholder="TN-20"  id="search_input">
            <button class="{{ isset($data) && count($data) > 0 ? 'font-16' : '' }}" type="submit">GET RTO DETAILS</button>
        </form>
    </div>
    @if(isset($data) && count($data) > 0)
            <div id="section2" class="sectionMob2">
                @foreach ($data as $row)
                    <ul>
                        <li>
                            <h5>Rto no - <span class="ft-w-normal">{{ $row->rto_no }}</span></h5>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h5>City - <span class="ft-w-normal">{{ $row->city }}</span></h5>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h5>State - <span class="ft-w-normal">{{ $row->state }}</span></h5>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h5>Phone No - <span class="ft-w-normal">{{ $row->phone_no }}</span></h5>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h5>Address - <span class="ft-w-normal">{{ $row->address }}</span></h5>
                        </li>
                    </ul>
                @endforeach
            </div>
        @endif
        <div id="section3" class="sectionMob3">
            @if(isset($codeData) && count($codeData) > 0)
                <h1>State-Wise Vehicle Registration Details new india</h1>
                <div class="stateClick">
                    @foreach ($codeData as $row)
                        <button class="{{ isset($data) && count($data) > 0 ? 'min-wth' : 'min-wth-800' }}">
                            <a href="{{ url(str_replace(' ', '', strtolower($row->state)).'-'. strtolower($row->code) . '-rto-vehicle-registration-details') }}">{{ $row->state }}</a>
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
                    <input type="text" name="search_input" placeholder="TN-20"  id="search_input">
                    <button type="submit">GET RTO DETAILS</button>
                </form>
            </div>
        </div>
        @if(isset($data) && count($data) > 0)
            <div id="section2" class="section2">
                @foreach ($data as $row)
                    @php
                        $rtoNo = $row->rto_no;
                    @endphp
                    <ul>
                        <li>
                            <h3>Rto no - <span class="ft-w-normal">{{ $row->rto_no }}</span></h3>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h3>City - <span class="ft-w-normal">{{ $row->city }}</span></h3>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h3>State - <span class="ft-w-normal">{{ $row->state }}</span></h3>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h3>Phone No - <span class="ft-w-normal">{{ $row->phone_no }}</span></h3>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h3>Address - <span class="ft-w-normal">{{ $row->address }}</span></h3>
                        </li>
                    </ul>
                @endforeach
                <ul>
                    <li>
                        <h1>{{ $row->city }} {{ $rtoNo }} RTO Offices: Find Vehicle Registration Details</h1>
                        <p class=rtoDetails>The address of {{ $row->city }} Regional Transport Office in {{ $row->state }} which is indicated by registration plate {{ $rtoNo }} is here. You can contact the {{ $row->city }} RTO through the Phone Number or Email ID provided below.If you wish to extend your search query and find details of any other vehicle’s registration, enter the registration number of the vehicle in the search box. The RTO database at Thiyagipedia includes the details of each and every Regional Transport Office spread across the 29 states and 7 union territories in India.</p>
                    </li>
                </ul>

            </div>
        @endif
        <div id="section3" class="section3">
            @if(isset($codeData) && count($codeData) > 0)
                <h1>State-Wise Vehicle Registration Details new india</h1>
                <div class="stateClick">
                    @foreach ($codeData as $row)
                        <button>
                            <a href="{{ url(str_replace(' ', '', strtolower($row->state)).'-'. strtolower($row->code) . '-rto-vehicle-registration-details') }}">{{ $row->state }}</a>
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
