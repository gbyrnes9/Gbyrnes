<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Requests\QuoteRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Http\Middleware\QuoteMiddleware;

class QuoteController extends Controller
{
    /**
     * Create a new quotes controller instance.
     *
     *Filter articles functions through Quotes middleware
     */
    public function __construct(){

        $this->middleware('quote',

            ['only' => array(

                'index',
                'destroy',
                'show',


            )]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $quotes = Quote::latest('created_at')->get();


        return view('quote.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('quote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(QuoteRequest $request)
    {
        Quote::create($request->all());

        Flash::overlay('', 'Your Quote Has Been Submitted');

        return redirect('Home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $quote = Quote::findOrFail($id);

        return view('quote.show', compact('quote', 'link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $item = Quote::findOrFail($id);

        $item->Delete();

        Flash::overlay('', 'Quote Has Been Deleted');

        return redirect('Quote');
    }

}
