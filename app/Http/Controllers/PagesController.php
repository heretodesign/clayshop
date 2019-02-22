<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function getHome() {
        return view('shop.index', compact('index'));
    }

    public function getShoppingCart() {
        return view('shoppingcart', compact('shoppingcart'));
    }

    // public function getCrew() {
    //     return view('pages.crew', compact('crew'));
    // }

    // public function getStory() {
    //     return view('pages.ourstory', compact('ourstory'));
    // }

    // public function getGallery() {
    //     return view('pages.gallery', compact('gallery'));
    // }

    // public function getGift() {
    //     return view('pages.gift', compact('gift'));
    // }

    // public function getWedding() {
    //     return view('pages.wedding', compact('wedding'));
    // }
}
