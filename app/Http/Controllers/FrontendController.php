<?php

namespace App\Http\Controllers;
use App\Models\VehicleCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $category = VehicleCategory::get();
        return view ('frontend.index', compact('category'));
    }
}
