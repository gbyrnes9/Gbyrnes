@extends('layout/layout')
@section('content')
    <div class="nav-spacer"></div>
    <div class="show-wrapper">
        <div class="show-container">
            <h1 class="show-head">Message from {{ $quote->name }}:</h1>
            <a href="{{ URL::previous() }}" class="show-go-back">Go Back</a><br/>
            <a href="{{ url('/Quote', $quote->id)}}/delete" class="show-go-back">Delete</a>
        <div class="show"></div>
            <ul>
                <li><p>Email: </p><a href="mailto:{{ $quote->email }}">{{ $quote->email }}</a></li>
                <li><p>Phone: </p><a href="callto:[{{ $quote->phone }}]">{{ $quote->phone }}</a></li>
                <li><p>Company Size: </p>{{ $quote->company_size }}</li>
                <li><p>Business Type: </p><span id="business-type"></span></li>
                <li><p>Sell Online: </p><span id="sell-online"></span></li>
                <li><p>Message: </p></p>{{ $quote->message }}</li>
            </ul>

        </div>
        </div>
</div>


@endsection
@section('footer-link')

    <script>


        //              Retrieve Value from Quote Form Business type
        var business_query = {{ $quote->business_type }};
        //              Business Type array to retrieve from
        var business_type = {
            0:'Personal',
            1:'Automotive',
            2:'Business Support & Supplies',
            3:'Computers & Electronics',
            4:'Construction & Contractors',
            5:'Education',
            6:'Entertainment',
            7:'Food & Dining',
            8:'Health & Medicine',
            9:'Home & Garden',
            10:'Legal & Financial',
            11:'Manufacturing',
            12:'Wholesale',
            13:'Distribution',
            14:'Merchants (Retail)',
            15:'Miscellaneous',
            16:'Personal Care & Services',
            17:'Real Estate',
            18:'Travel & Transportation'};
        //              Retrieve key value
        var business_answer = business_type[business_query];
        //              Send value to html
        document.querySelector('#business-type').innerHTML = business_answer;

        //              Retrieve Value from Quote Form Sell Online
        var online_query = {{ $quote->sell_online }};
        //              Sell Online array to retrieve from
        var sell_online = {
            0:'Yes we would like to set up an e-comerce store and sell online',
            1:'No I would not like to set up an e-comerce store and sell online'
        };
        //              Retrieve key value
        var sell_answer = sell_online[online_query];
        //              Send Value to html
        document.querySelector('#sell-online').innerHTML = sell_answer;
    </script>
@endsection