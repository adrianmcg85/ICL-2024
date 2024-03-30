<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function list()
    {
        $data = Product::where('status', '<', 3)->get();
        return view('pages.available-cats', ['data' => $data]);
    }

    public function profile($id)
    {
        $data = Product::find($id);
        return view('pages.cat-profile', ['data' => $data]);
    }
}
