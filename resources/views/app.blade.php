@extends('layouts.master')
@section('content')
    <div id="app"></div>
@endsection

@section('script')
    <script>
        window.vuebnb_listing_model = "{!! addslashes(json_encode($model)) !!}";
    </script>
@endsection