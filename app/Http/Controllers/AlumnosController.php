<?php

namespace caplicada\Http\Controllers;

use Illuminate\Http\Request;
use caplicada\Http\Requests;
use crmEstudio\Alumnos;
use Illuminate\Support\Facades\Redirect;
use caplicada\Http\Requests\AlumnosFormRequest;
use DB;


class AlumnosController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $alumnos=DB::table('alumnos')->where('apellido','LIKE','%'.$query.'%');        
            $alumnos = $alumnos->orderBy('apellido','asc')->paginate(7);

             return view('welcome',["alumnos"=>$alumnos,"searchText"=>$query]);
        }
    }
}
