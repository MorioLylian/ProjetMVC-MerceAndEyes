<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin');
    }
 
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|regex:#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#',
            'message' => 'required|min:10'
        ]);
        
        

        Mail::to('MerchAndEyesCA@gmail.com')
            ->send(new Admin($request->except('_token')));
 
        return view('welcome');

    }

}