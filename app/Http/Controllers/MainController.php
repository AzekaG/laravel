<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {

        $title = 'Home page';
        $subtitle = '<em>Subtitle</em>';
        $users = ['Tom', 'Boo'];

        return view(
            'client.index',
            compact('title', 'users', 'subtitle')
        );
    }

    function contacts()
    {
        return view('client.contacts');
    }

    function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'message' => 'required '
        ]);

        // dd($request->all());

        //делаем редирект : 
        //return redirect('/contacts');
        //или
       // return to_route('contacts');
        //или возвращаемся назад
       // return back();
        //к каждому редиректу мы может добавить метод with с какими то данными
        return back()->with('success', 'Thank!');
    }
}
