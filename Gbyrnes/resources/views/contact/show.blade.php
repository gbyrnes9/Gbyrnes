@extends('layout/layout')
@section('content')
    <div class="nav-spacer"></div>
    <div class="show-wrapper">
        <div class="show-container">
            <h1 class="show-head">Message from {{ $contact->name }}:</h1>
            <a href="{{ URL::previous() }}" class="show-go-back">Go Back</a><br/>
            <a href="{{ url('/Contact', $contact->id) }}/delete" class="show-go-back">Delete</a>
            <div class="show"></div>
            <ul>
                <li><p>Email: </p><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                <li><p>Phone: </p><a href="callto:[{{ $contact->phone }}]">{{ $contact->phone }}</a></li>
                <li><p>Message: </p></p>{{ $contact->message }}</li><br/>

            </ul>

        </div>
    </div>
    </div>


@endsection