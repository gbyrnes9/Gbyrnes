<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Middleware\PagesMiddleware;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @Return Home
     */
    public function __construct(){

        $this->middleware('pages',

            ['only' => array(

                'admin',


            )]);}

    public function index()
    {
        return view('pages.index');
    }

    /**
     * Redirects form '/' to '/Home'
     */

    public function reroute()
    {
        return redirect('/Home');
    }

    /**
     * Returns view why
     */

    public function why()
    {
        return view('pages.why');
    }

    /**
     * Returns view services
     */

    public function services()
    {
        return view('pages.services');
    }

    /**
     * Returns view contact form
     */

    public function admin()
    {
        return view('pages.admin');
    }


}
