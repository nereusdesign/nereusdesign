<!-- Navigation -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#nav"
                aria-expanded="false"
                aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        </div>
        <a class="navbar-brand" href="#"><img src="{{asset('images/nereus-design.png')}}" alt="Nereus Design Logo"/></a>
        <div id="nav" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="{{route('services')}}">Services Offered</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('request-estimate')}}">Request <strong>Free</strong> Estimate</a>
                </li>
                <li>
                    <a href="{{route('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
