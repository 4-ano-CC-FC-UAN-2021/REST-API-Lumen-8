<?php
namespace App\Http\Controllers;
use App\Models\Estudante;
use Illuminate\Http\Request;
class EstudantesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function allEstudantes()
    {
        //dd(Estudante::all());
        return response()->json(Estudante::all());
    }

    //
}
