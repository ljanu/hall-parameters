<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers\Specification;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class  ConstructionController extends Controller
{






    public function create() :View
    {
       return view('hall-parameters::form.construction.create');
    }





    public function store(Request $request)
    {
        ddd($request->all());
    }





    public function edit($id) :View
    {
        return view('hall-parameters::form.construction.edit')
            ->with('id', $id);
    }





    public function update(Request $request, $id)
    {
        ddd($request->get($id));
    }

}