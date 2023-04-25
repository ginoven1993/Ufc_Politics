<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function authenticate(Request $request){

        if ($request->isMethod('POST')) {
            $data = $request->input();
            $currentAdmin = User::where(['email' => $data['email']])->first();
               if ($currentAdmin) {
                 $password = $data['password'];

                    if (Hash::check($password, $currentAdmin->password)) {
                         session(['id' => $currentAdmin->id]); 
                            return redirect('/admin/dashboard')->with('flash_message_success', 'Connexion Etablie!'.$currentAdmin->name);
                      } else {
                         return redirect()->back()->with('flash_message_error', 'Votre mot de passe est invalide');
                              }
                } else {
                       return redirect()->back()->with('flash_message_error', 'Email invalide! Veuillez réessayer');
                }
        }
        return view('Auth.login');
    }
}
