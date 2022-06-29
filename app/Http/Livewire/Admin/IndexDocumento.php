<?php

namespace App\Http\Livewire\Admin;

use App\Models\Documento;
use Livewire\Component;
use Livewire\WithPagination;

class IndexDocumento extends Component
{
    public function mount()
    {
        $this->documento = new Documento();
    }

    public Documento $documento;
    public $cargado = false;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        // $documentos = ($this->cargado == true) ? Documento::where('titulo', 'LIKE', '%' . $this->search . '%')
        //     ->paginate(10) : [];
        $documentos = Documento::paginate(5);
        return view('livewire.admin.index-documento', compact('documentos'));
    }

    public function delete(Documento $documento)
    {
        $documento->delete();
        $this->emit('alert-documento-delete', 'Has eliminado el documento correctamente');
        return redirect(route('admin.documentos-index'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}
