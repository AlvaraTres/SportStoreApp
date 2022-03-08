<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tipoproducto;


class ShowTiposproductos extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'id';
    public $direction = 'asc';

    public $tipoProducto;
    public $tipo_id;
    public $nombre_tipo;

    public $openEditModal = false;
    public $openDeleteModal = false;

    protected $rules = [
        'nombre_tipo' => 'required|max:100',
    ];

    protected $listeners = ['render_add_tipo_producto' => 'render'];

    public function render()
    {
        $tiposProductos = Tipoproducto::where('nombre_tipo', 'like', '%' . $this->search . '%')
                                     ->orderBy($this->sort, $this->direction)
                                     ->paginate(10);

        return view('livewire.show-tiposproductos', compact('tiposProductos'));
    }

    public function order($sort){
        if ($this->sort == $sort) {
            if($this->direction == 'desc'){
                $this->direction = 'asc';
            }else{
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function edit($id){
        $tipoProducto = Tipoproducto::find($id);
        $this->tipo_id = $tipoProducto->id;
        $this->nombre_tipo = $tipoProducto->nombre_tipo;
        $this->openEditModal = true;
    }

    public function updateTipoProducto(){
        $this->validate();

        $tipoProducto = Tipoproducto::find($this->tipo_id);

        $tipoProducto->update([
            'nombre_tipo' => $this->nombre_tipo
        ]);

        $this->reset([
            'openEditModal',
            'tipoProducto',
            'tipo_id',
            'nombre_tipo',
        ]);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Éxito!',
            'text' => 'El tipo de producto se ha modificado correctamente.',
            'icon' => 'success'
        ]);
    }

    public function delete($id){
        $tipoProducto = Tipoproducto::find($id);
        $this->tipo_id = $tipoProducto->id;
        $this->nombre_tipo = $tipoProducto->nombre_tipo;
        $this->openDeleteModal = true;
    }

    public function destroyTipoProducto(){
        $tipoProducto = Tipoproducto::find($this->tipo_id);
        $tipoProducto->delete();

        $this->reset([
            'openDeleteModal',
            'tipoProducto',
            'tipo_id',
            'nombre_tipo',
        ]);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Éxito',
            'text' => 'El tipo de producto ha sido eliminado con éxito',
            'icon' => 'success'
        ]);
    }
}
