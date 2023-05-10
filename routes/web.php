<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $data = [
        'categoriesList' => [
            "CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"
        ],
        'dcComics' => [
            "Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"
        ],
        'dcShop' => [
            "Shop DC", "Shop DC Collectibles"
        ],
        'dcDc' => [
            "Terms Of Use", "Privacy policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscription", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"
        ],
        'dcSites' => [
            "DC", "MAD Magazine", "DC Kids", "DC universe", "DC power Visa"
        ],
    ];
    return view('comics');
})->name('comics');
