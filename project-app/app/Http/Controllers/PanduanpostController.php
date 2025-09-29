<?php

namespace App\Http\Controllers;

use App\Models\FaqPost;
use App\Models\JelajahiPost;
use App\Models\panduanpost;
use Illuminate\Http\Request;

class PanduanpostController extends Controller
{
    public function index()
    {
    $panduanpost = panduanpost::all();
    $JelajahiPost =JelajahiPost::all();
    $FaqPost = FaqPost::all();
    $list_data = [];
    for ($i = 0; $i < count($JelajahiPost); $i++){
        $string = $JelajahiPost[$i]['deskripsi2'];
        $string = trim($string, "[] \n");

// pecah jadi array pakai koma
$list_data[$i] = array_map('trim', explode(",", $string));
    }
 
    
    return view('index', compact('panduanpost', 'JelajahiPost', 'list_data', 'FaqPost'));
    }
}
