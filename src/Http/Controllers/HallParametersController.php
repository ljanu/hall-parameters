<?php
declare(strict_types=1);

namespace Tudy\HallParameters\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  HallParametersController extends Controller
{

    public function index()
    {
        return 'list objects';
    }





    public function show($id)
    {
        return "detail  object";
    }

}