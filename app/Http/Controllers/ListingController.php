<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Listing $listing)
    {

        $model = $listing->toArray();
        if(empty($model)){
            $listing = Listing::query()->where('id','10')->first();
            $model = $listing->toArray();
        }
        $model = $this->add_image_urls($listing, $model);
        return view('app', compact('model'));
    }

    public function get_listing_api(Listing $listing)
    {
        $model = $listing->toArray();
        $model = $this->add_image_urls($listing, $model);
        return $model->toJson();
    }

    public function add_image_urls(Listing $listing, $model)
    {
        for ($i = 1; $i <= 4; $i++) {
            $model['image_' . $i] = asset('storage/images/' . $listing->id . '/Image_' . $i . '.jpg');
        }
        return $model;

    }
}
