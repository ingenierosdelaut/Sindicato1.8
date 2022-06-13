<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Requests\RulesRequest;
use App\Models\Request;
use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class Solicitud extends Component
{
    use WithPagination;
    public Usuario $usuario;
    public Request $request;
    public $estado;
    protected $paginationTheme = 'bootstrap';
    public $cargado = false;
    public $search;

    public function render()
    {
        $requests = Request::join('usuarios', 'id_usuario', '=', 'usuarios.id')
            ->select(
                'usuarios.*',
            )->latest()->paginate(5);
        return view('livewire.admin.solicitud', compact('requests'));
    }

    // public function aceptar(Request $request)
    // {
    //     $request['estado'] = 1;
    //     $this->request->save();
    // }

    // public function denegar(Request $request)
    // {
    //     $request['estado'] = 0;
    //     $this->request->save();
    // }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected function rules()
    {
        return RulesRequest::reglas();
    }
}
