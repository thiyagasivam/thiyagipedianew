<!--use Illuminate\Support\Str;-->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<header class="static-header">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Your Logo" class="logoImg">
    </div>
    <!-- <div class="account">
        <a href="#">Create Account</a>
    </div> -->
    <meta name="google-adsense-account" content="ca-pub-1381776395680802">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802"
     crossorigin="anonymous"></script>
     <!-- Clarity tracking code for https://thiyagipedia.com/ -->
<script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "su9csmhrpd");
</script>
</header>
@if(\Agent::isMobile())
    <div id="section1" class="sectionMob1">
        <img src="{{ asset('images/foo.jpg') }}" alt="tag">
    </div>
    <div class="vehicalContentMob">
        <h1>RTO Vehicle</h1>
        <h2>Registration Details by State Code</h2>
    </div>
    <div class="vechicalBoxMob">
        <h2>Enter vehicle number</h2>
        <form action="{{ route('fetch.data') }}" method="GET" class="search-form">
            <input type="text" name="search_input" placeholder="TN-20">
            <button type="submit">GET RTO DETAILS</button>
        </form>
    </div>
    @if(isset($data) && count($data) > 0)
            <div id="section2" class="sectionMob2">
                @foreach ($data as $row)
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
            </div>
        @endif
        <div id="section3" class="sectionMob3">
            @if(isset($codeData) && count($codeData) > 0)
                <h1>State-Wise Vehicle Registration Details india</h1>
                <div class="stateClick">
                    @foreach ($codeData as $row)
                        <button>
                            <a href="{{ url(str_replace(' ', '', $row->state).'-'. $row->code . '-rto-vehicle-registration-details') }}">{{ $row->state }}</a>
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
                    <input type="text" name="search_input" placeholder="TN-20">
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
                <h1>State-Wise Vehicle Registration Details</h1>
                <div class="stateClick">
                    @foreach ($codeData as $row)
                        <button>
                            <a href="{{ url(str_replace(' ', '', $row->state).'-'. $row->code . '-rto-vehicle-registration-details') }}">{{ $row->state }}</a>
                        </button>
                    @endforeach
                </div>
            @else
                <p>No data found</p>
            @endif
        </div>
    </div>
@endif
<footer>

</footer>
