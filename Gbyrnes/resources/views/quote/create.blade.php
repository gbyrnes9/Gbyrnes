@extends('layout.layout')


@section('content')

    <div class="nav-spacer"></div>
    <div class="quote-wrapper">
        @include('/errors/list')
        <div class="quote-container">
            <h1 class="free-quote">Free Quote</h1>
                <div class="quote-form">
                    {!! Form::open(array('url' => 'Quote')) !!}

                    @include('partials.__quote')


                    {!! Form::close() !!}
                </div>
            <div class="quote-info">
                <h6 id="quote-header">Free Quote</h6>
            </div>
        </div>
    </div>
@endsection