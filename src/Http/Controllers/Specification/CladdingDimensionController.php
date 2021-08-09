<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers\Specification;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class  CladdingDimensionController extends Controller
{


    public function create(): View
    {
        return view('hall-parameters::cladding-dimension.create');
    }





    public function store(Request $request)
    {
        return $request;
    }





    public function edit($id): View
    {
        return view('hall-parameters::cladding-dimension.edit')
            ->with('id', $id);
    }





    public function update(Request $request, $id)
    {
        return $request;
    }


}