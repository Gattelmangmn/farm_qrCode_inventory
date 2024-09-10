<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        // Возвращает страницу личного кабинета
        return view('user.account');
    }

    public function settings()
    {
        $user = Auth::user();
        return view('user.settings', compact('user'));
    }

    public function  view()
    {
        $ingredients = Ingredients::all();
        return view('user.view', compact('ingredients'));
    }
}
