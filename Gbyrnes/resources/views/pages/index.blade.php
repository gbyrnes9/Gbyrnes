
@extends('/layout/layout')

@section('content')

<div class="index-wrapper">
    <div class="index-container">

        <h2 class="head">Gregory Byrnes</h2>
        <h1 class="headDD">Design | Development</h1>
        <div class="landing-nav">

            <ul class="landing-list">

                <li><a href="{{ route('Services') }}">Services</a></li>
                <li><a href="{{ route('Why') }}">Why You Need Us</a></li>
                <li><a href="{{ route('SendQuote') }}">Quote</a></li>
                <li><a href="{{ route('SendContact') }}">Contact</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>


    </div>

</div>

@endsection

@section('footer-link')


@endsection

