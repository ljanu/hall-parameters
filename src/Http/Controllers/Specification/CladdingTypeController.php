<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers\Specification;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  CladdingTypeController extends Controller
{


    public function create()
    {
        return "funguje create";
    }





    public function store(Request $request)
    {
        return $request;
    }





    public function edit($id)
    {
        return "funguje edit id. $id";
    }





    public function update(Request $request, $id)
    {
        return $request;
    }

}