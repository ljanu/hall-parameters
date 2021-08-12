<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers\Specification;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  ContactController extends Controller
{


    public function create()
    {
        return "create funguje";
    }





    public function store(Request $request)
    {
        return $request;
    }





    public function edit($id)
    {
        return "edit funguje id:  $id";
    }





    public function update(Request $request, $id)
    {
        return $request;
    }


}