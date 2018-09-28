@extends('layouts.master')
@section('content')
    <div class="header">
        <div class="header-img" v-bind:style="headerImageStyle" v-on:click="modalOpen = true">
            <button class="view-photos">View Photos</button>
        </div>
        <div class="container">
            <div class="heading">
                <h1>@{{title}}</h1>
                <p>@{{address}}</p>
            </div>
            <hr>
            <div class="about">
                <h3>About this listing</h3>
                <p v-bind:class="{ contracted: contracted }">@{{ about }}</p>
                <button v-if="contracted" class="more" v-on:click="contracted = false">+ More</button>
                <button v-else="contracted==false" class="more" v-on:click="contracted = true">Hide -</button>
            </div>
            <div class="amenities list">
                <div class="title"><strong>Amenities</strong></div>
                <div class="content">
                    <div class="list-item" v-for="amenity in amenities">
                        <i class="fa fa-lg" v-bind:class="amenity.icon"></i>
                        <span>@{{ amenity.title }}</span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="prices list">
                <div class="title">
                    <strong>Prices</strong>
                </div>
                <div class="content">
                    <div class="list-item" v-for="price in prices">
                        @{{ price.title }}: <strong>@{{ price.value }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal" v-bind:class="{ show : modalOpen }">
            <button v-on:click="modalOpen = false" class="modal-close">&times;</button>
            <div class="modal-content">
                <image-carousel :images="images"></image-carousel>
            </div>
        </div>
    </div>
    <script>
        window.vuebnb_listing_model = "{!! addslashes(json_encode($model)) !!}";
    </script>
@endsection