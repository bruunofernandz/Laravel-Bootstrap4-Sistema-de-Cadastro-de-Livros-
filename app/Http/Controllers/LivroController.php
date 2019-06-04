<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Livro;
use App\models\Genero;
use App\models\Autores;

class LivroController extends Controller
{
    private $livro;
    private $genero;
    private $autor;

    public function __construct(Livro $livro, Genero $genero, Autores $autor)
    {
        $this->livro = $livro;
        $this->genero = $genero;
        $this->autor = $autor;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = $this->genero->all();
        $livros = $this->livro->paginate(3);
        $autores = $this->autor->all();

        return view('search', compact('livros', 'generos', 'autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $dataForm = $request->all();

        $insert = $this->livro->insert($dataForm);

        if($insert)
            return redirect('/livros');
        else
            return redirect()->back();

        dd($dataForm);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($quant)
    {   
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'Sistema de aluguel, ainda nao iplementado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($quant)
    {

    }

    public function cadastrar()
    {
        $opcoes = $this->genero->all();
        $tipoAutor = $this->autor->all();

        return view('cadastro', compact('opcoes', 'tipoAutor'));
    }

    public function tests()
    {
    /*    $insert = $this->livro->create([
            'descricao'     => 'Livro de Aventura',
            'quantidade'    => 2,
            'ISBN'          => 456,
            'autor_id'      => 0
        ]);
        if($insert) 
            return 'Dados inseridos com sucesso';
        else
            return 'Erro ao inserir dados'; */

            /*$prod = $this->livro->find(1);
            $update = $prod->update([
                'descricao'     => 'Harry potter',
                'quantidade'    => 5,
                'ISBN'          => 120,
                'autor_id'      => 0
            ]);

            if($update)
                return 'Dados gravados com sucesso';
            else
                return 'Erro ao inserir os dados'; */

            /*$prod = $this->livro->find(4);
            $delete = $prod->delete();

            if($delete)
                return 'Dados DELETADOS';
            else
                return 'ERRO';*/
            

                /*$prod = $this->autor->create([
                        'id' => 2,
                        'nome' => 'Jose Assis de moraes'
                    ]);

                    if($prod)
                        return 'Dados inseridos com sucesso';
                    else
                        return 'Erro';*/
    }
    
}
