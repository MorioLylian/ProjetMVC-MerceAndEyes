<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProductController extends Controller
{


    public function galerie()
    {
        
        $produit= Produit::all();
        
        return view('galerie', ['produit'=>$produit]);

    }
    
}
