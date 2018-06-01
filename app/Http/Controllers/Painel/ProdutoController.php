<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;
use App\Http\Requests\Painel\ProductFormRequest;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function create(ProductFormRequest $request)
    {
       $insert = $this->produto->create([
            'nome' => $request->nome
        ]);

        if($insert)
            return 'Sucesso';
        else
            return 'Erro';
        
    }

    public function update($id)
    {
        return 'Update {$id}';

    }

    public function delete($id)
    {

    }

    public function edit($id)
    {
        return 'Editando {$id}';
    }

}
