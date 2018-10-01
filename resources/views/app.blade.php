@extends('layouts.master')
@section('content')
    <div id="app"></div>
@endsection
@section('script')
    <script>
        window.vuebnb_server_date = "{!! addslashes(json_encode($data)) !!}";
    </script>
@endsection