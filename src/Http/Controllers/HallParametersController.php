<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers;


use App\Http\Controllers\Controller;

class  HallParametersController extends Controller
{

    public function index() :string
    {
        return 'list objects';
    }





    public function show($hall_id) : string
    {
        return "detail  object $hall_id";
    }

}