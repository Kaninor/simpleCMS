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

    public function welcome()
    {
        return view("welcome");
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

    public function charts()
    {
        return view("cms.charts");
    }

    public function notFound()
    {
        return view("errors.404");
    }

    public function blank()
    {
        return view("cms.blank");
    }

    public function tables()
    {
        return view("cms.tables");
    }
}
