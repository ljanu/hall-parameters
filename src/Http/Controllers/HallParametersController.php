<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\View\View;

class  HallParametersController extends Controller
{

    public function index() : View
    {
        return view('hall-parameters::index');
    }





    public function show($hall_id) : View
    {
        return view('hall-parameters::show')->with('hall_id', $hall_id);
    }

}