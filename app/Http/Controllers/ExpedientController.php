<?php

namespace App\Http\Controllers;


use App\Expedient;
use App\Http\Requests\ExpedientUpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ExpedientCreateRequest;
use Illuminate\Support\Facades\Input;

class ExpedientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->view('expedient.index', [
            "expedients" =>
                Auth::user()
                    ->expedients()
                    ->search(Input::get('search'))
                    ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('expedient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpedientCreateRequest $request)
    {
        //
        $expedient = Auth::user()->expedients()->create([
            "defendant" => $request->defendant,
            "overview" => $request->overview
        ]);

        $expedient->resources()->create([
            "path" => $request->resource->store('local')
        ]);

        return response()->redirectToRoute('expedients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return response()->view('expedient.show', [
            "expedient" => Auth::user()->expedients()->findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpedientUpdateRequest $request, $id)
    {
        //
        $expedient = Auth::user()->expedients()->findOrFail($id);

        $expedient->update([
            "defendant" => $request->defendant,
            "overview" => $request->overview
        ]);

        if($request->resource){
            $expedient->resources()->create([
                "path" => $request->resource->store('local')
            ]);
        }

        return response()->redirectToRoute('expedients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
