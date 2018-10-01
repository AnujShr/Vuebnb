@extends('layouts.master')
@section('content')
    <header-image :image-url="images[0]" @header-clicked="openModal" xmlns:v-bind="http://www.w3.org/1999/xhtml"></header-image>
    <div class="container">
        <div class="heading">
            <h1>@{{title}}</h1>
            <p>@{{address}}</p>
        </div>
        <hr>
        <div class="about">
            <h3>About this listing</h3>
            <p :class="{ contracted: contracted }">@{{ about }}</p>
            <button v-if="contracted" class="more" @click="contracted = false">+ More</button>
            <button v-else="contracted==false" class="more" @click="contracted = true">Hide -</button>
        </div>
        <div class="lists">
            <feature-list title="Amenities" :item="amenities">
            </feature-list>
        </div>
        <div class="lists">
            <feature-list title="Prices" :item="prices">
                <div class="list-item" v-for="price in prices">
                    @{{ price.title }}: <strong>@{{ price.value }}</strong>
                </div>
            </feature-list>
        </div>
        <modal-window ref="imagemodal">
            <image-carousel :images="images"></image-carousel>
        </modal-window>
    </div>
    <script>
        window.vuebnb_listing_model = "{!! addslashes(json_encode($model)) !!}";
    </script>
@endsection