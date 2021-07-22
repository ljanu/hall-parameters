<?php
declare(strict_types=1);


namespace Tudy\HallParameters\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParametersControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('hall-parameters::index');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hall-parameters::create');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route(trans('hall-parameters.index'))
            ->with('success', 'položka uložena');
    }





    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('hall-parameters::edit');
    }





    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect()->route(trans('hall-parameters.index'))
            ->with('success', 'položka upravena');

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        return redirect()->route(trans('hall-parameters.index'))
            ->with('success', 'položka ostraněna');
    }
}