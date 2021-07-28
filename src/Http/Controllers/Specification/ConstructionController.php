<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers\Specification;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  ConstructionController extends Controller
{






    public function create()
    {
       return 'nová konstrukce';
    }





    public function store(Request $request)
    {
        //
    }





    public function edit($id)
    {
        return 'úprava konstrukce: '. $id;
    }





    public function update(Request $request, $id)
    {
        //
    }

}