<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DashController extends Controller
{
    public function index()
    {
        return view('dash.index');
    }
    
    public function change_lang($lang)
    {
            session()->put('localeLang', $lang);
            App::setLocale(session($lang));

        // return redirect('admin');
        return redirect()->back();
    }
}
