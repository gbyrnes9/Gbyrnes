 <div class="nav-border-bottom">
    <div class="head-wrapper">
        <div class="head-logo head-logo-hide">
            <a href="{{ route('Home') }}"><img src="{{ URL::asset('/img/resizelogo.svg') }}"></a>
        </div>


        <div class="nav-div">
            <div class="head-nav-large">

                <ul>

                    <li><a href="{{ route('Why') }}">Why You Need Us</a></li><!--
                 --><li><a href="{{ route('Services') }}">Services</a></li><!--
                 --><li><a href="{{ route('SendQuote') }}">Quote</a></li><!--
                 --><li><a href="{{ route('SendContact') }}">Contact</a></li>

                </ul>
            </div>

            <div class="head-nav-small">

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Menu
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ route('Home') }}">Home</a></li>
                        <li><a href="{{ route('Why') }}">Why You Need Us</a></li>
                        <li><a href="{{ route('Services') }}">Services</a></li>
                        <li><a href="{{ route('SendQuote') }}">Quote</a></li>
                        <li><a href="{{ route('SendContact') }}">Contact</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="info-div">
            <div class="head-phone"><p>(516)360-0414</p></div>
            <div class="head-info-shift phone-border-bottom"><p>(516)360-0414</p></div>
            <div class="head-email"><p><a href="mailto:someone@example.com?Subject=Hello%20again">gbyrnes@gbyrnes.com</a></p></div>
            <div class="head-info-shift"><p><a href="mailto:someone@example.com?Subject=Hello%20again">EMAIL</a></p></div>
        </div>
    </div>
 </div>




