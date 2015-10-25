@extends('/layout/layout')

@section('content')
    <div class="nav-spacer"></div>
    <div class="contact-wrapper">
        @include('/errors/list')

        <div class="contact-container">
            <h1 class="contact-head">Contact</h1>
            <div class="contact-form">
            {!! Form::open(array('url' => 'Contact')) !!}

            @include('partials.__contact')


            {!! Form::close() !!}
            </div>
            <div class="contact-info">
                <h6 id="contact-header">Call or Email</h6>
                <h6>(516)360-0414</h6>
                <h6>email@email.com</h6>
            </div>
        </div>
    </div>

@endsection

@section('footer-link')


@endsection
