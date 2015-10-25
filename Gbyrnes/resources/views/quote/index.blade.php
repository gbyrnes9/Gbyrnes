@extends('/layout/layout')

@section('content')
    <div class="nav-spacer"></div>
    <div class="quote-view-wrapper">
        <h1 class="quote-header">Quotes Received</h1>
        <table id="table_id" class="display">
            <thead>
            <tr>
                <th>Name</th>
                <th class="disappear">Email</th>
                <th>Received</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($quotes as $quote)

                <tr>
                    <td><a href="{{ url('/Quote', $quote->id) }}">{{ $quote->name }}</a></td>
                    <td class="disappear">{{ $quote->email }}</td>
                    <td>{{ $quote->created_at }}</td>
                    <td><a href="{{ url('/Quote', $quote->id)}}/delete">Delete</a></td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('footer-link')
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
    <link media="all" type="text/css" rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="{{ URL::asset('/DataTables-1.10.7/js/jquery.dataTables.js') }}"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>



@endsection
