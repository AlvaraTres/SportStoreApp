<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Promocion;
use App\Models\Producto;
use DB;

class ShowPromociones extends Component
{
    use WithPagination;

    public $search;
    public $sort = 'id';
    public $direction = 'asc';

    public $promocion;
    public $promocion_id;
    public $id_producto;
    public $nombre_promocion;
    public $descripcion_promocion;
    public $precio_promocion;

    public $openEditModal = false;
    public $openDeleteModal = false;

    protected $rules = [
        'id_producto' => 'required',
        'nombre_promocion' => 'required',
        'descripcion_promocion' => 'required',
        'precio_promocion' => 'required',
    ];

    protected $listeners = ['render_add_promo' => 'render'];

    public function render()
    {
        $promociones = DB::table('promociones')
                        ->join('productos', 'productos.id', '=', 'promociones.id_producto')
                        ->select('promociones.*', 'productos.nombre_disenio_producto')
                        ->where('promociones.nombre_promocion', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction)
                        ->get();

        $productos = Producto::all();

        return view('livewire.show-promociones', compact('promociones', 'productos'));
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
        $promocion = Promocion::find($id);
        $this->promocion_id = $promocion->id;
        $this->id_producto = $promocion->id_producto;
        $this->nombre_promocion = $promocion->nombre_promocion;
        $this->descripcion_promocion = $promocion->descripcion_promocion;
        $this->precio_promocion = $promocion->precio_promocion;

        $this->openEditModal = true;
    }

    public function updatePromocion(){
        $this->validate();

        $promocion = Promocion::find($this->promocion_id);

        $promocion->update([
            'id_producto' => $this->id_producto,
            'nombre_promocion' => $this->nombre_promocion,
            'descripcion_promocion' => $this->descripcion_promocion,
            'precio_promocion' => $this->precio_promocion
        ]);

        $this->reset([
            'openEditModal',
            'id_producto',
            'nombre_promocion',
            'descripcion_promocion',
            'precio_promocion',
        ]);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Exito!', 
            'text' => 'La promoción ha sido actualizada con éxito!',
            'icon' => 'success'
        ]);
    }

    public function delete($id){
        $promocion = Promocion::find($id);
        $this->promocion_id = $promocion->id;
        $this->id_producto = $promocion->id_producto;
        $this->nombre_promocion = $promocion->nombre_promocion;
        $this->descripcion_promocion = $promocion->descripcion_promocion;
        $this->precio_promocion = $promocion->precio_promocion;
        $this->openDeleteModal = true;
    }

    public function destroyPromocion(){
        $promocion = Promocion::find($this->promocion_id);
        $promocion->delete();

        $this->reset([
            'openDeleteModal',
            'id_producto',
            'nombre_promocion',
            'descripcion_promocion',
            'precio_promocion',
        ]);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Exito!', 
            'text' => 'La promoción ha sido eliminada con éxito!',
            'icon' => 'success'
        ]);
    }

}
