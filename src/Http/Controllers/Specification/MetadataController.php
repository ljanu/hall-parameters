<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers\Specification;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class  MetadataController extends Controller
{


    public function create() :View
    {
        return view('hall-parameters::metadata.create');
    }





    public function store(Request $request)
    {
        return $request;
    }





    public function edit($id)
    {
       return view('hall-parameters::metadata.edit')
           ->with("id", $id);
    }





    public function update(Request $request, $id)
    {
        //  ddd($request->get($id));
    }
}