<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all Listings
    public function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }
    // Show a single Listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
