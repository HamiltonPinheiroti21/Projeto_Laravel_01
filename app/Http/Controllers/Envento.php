<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tb_alunos;
use App\Models\tb_cursos;

class Envento extends Controller
{

    public function index()
    {
        $welcome = 'Bem vindo!';

        return view('welcome', ['msg' => $welcome]);
    }
   
    public function Hamilton()
    {
        $welcome = 'Bem vindo ao!';

        return view('hamilton', ['msg' => $welcome]);
    }

    public function viewAlunos()
    {
        $aluno = new tb_alunos();

        $alunos = $aluno::all();

        return view('alunos.view', ['alunos' => $alunos]);
    }

    public function acao()
    {
        $nome = 'Hamilton';

        return view('acao', ['nome' => $nome]);
    }

    public function welcome()
    {
        $nome = 'Hamilton developer in';

        return view('welcome', ['nome' => $nome]);
    }

    public function AlunoCreate()
    {
        $nome = 'Hamilton developer in';

        return view('alunos.create', ['nome' => $nome]);
    }

    public function store(Request $request)
    {
        $alunos = new tb_alunos();

        $alunos->txt_nome = $request->nome;
        $alunos->txt_email = $request->email;
        $alunos->dt_nascimento = $request->dtNascimento;
        $alunos->fk_id_status = 1;

        $alunos->save();

        return redirect('/hamilton');
    }

    public function storeTbCursos(Request $request)
    {
        $tbcursos = new tb_cursos();

        $tbcursos->txt_titulo = $request->titulo;
        $tbcursos->txt_descricao = $request->descricao;
        $tbcursos->dt_inicio = $request->dtInicio;
        $tbcursos->dt_fim = $request->dtFim;

        $tbcursos->save();

        return redirect('/cursos/view');
    }

    public function viewCursos()
    {
        $tbcursos = new tb_cursos();

        $cursos = $tbcursos::all();

        return view('cursos.view', ['cursos' => $cursos]);
    }

    public function cursosCreate()
    {
        $nome = 'Cadastrar Cursos';

        return view('cursos.create', ['nome' => $nome]);
    }
}
