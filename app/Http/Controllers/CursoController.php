<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use App\Models\Curso;


class CursoController extends Controller
{
  
    public function index(){
        return view('index');
    }
    public function mostrarFormCurso(){
        return view('cad_curso');
    }
    
    public function mostrarManipulaCurso(){
        $registrosCurso = Curso::All();
        return view('manipula_curso',['registrosCurso' => $registrosCurso]);
    }
    public function DeletarCurso(Curso $registrosCurso){
        $registrosCurso->delete();
        return Redirect::route('manipula-curso');
    }

    public function cadastroCurso(Request $request){
        $registrosCurso = $request->validate([
        'idcategoria' => 'required',
        'nomecurso' => 'string|required',
        'cargahoraria'=> 'string|required',
        'valor'=> 'string|required',
        ]);

        Curso::create($registros);

        return Redirect::route('index');
    }

    public function MostrarAlterarCurso(Curso $registrosCurso){
        return view('altera_curso',['registrosCurso'=> $registrosCurso]);
    }

    public function AlterarBancoCurso(Curso $registrosCurso, Request $request){
        $registros = $request->validate([
            'idcategoria' => 'Integer|required',
            'nomecurso' => 'string|required',
            'cargahoraria'=> 'string|required',
            'valor'=> 'numeric|required',

           ]);


           // Esta linha é que altera o registro no banco.
         $registrosCurso->fill($registros);
         $registrosCurso->save();


       // alert("Dados alterados com sucesso");
        return Redirect::route('index');
    }
}
