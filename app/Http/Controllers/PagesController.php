<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
        return view("cms.index");
    }

    public function login()
    {
        return view("cms.login");
    }

    public function register()
    {
        return view("cms.register");
    }

    public function forgetPassword()
    {
        return view("cms.forgot-password");
    }

    public function notFound()
    {
        return view("cms.404");
    }

    public function blank()
    {
        return view("cms.blank");
    }

    public function newCar(Request $request)
    {

    }

    public function car(int $id)
    {
        return $id;
    }
}
