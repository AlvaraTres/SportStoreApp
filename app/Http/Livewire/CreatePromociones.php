<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Promocion;
use App\Models\Producto;

class CreatePromociones extends Component
{
    public $open = false;

    public $promocion;
    public $id_producto;
    public $nombre_promocion;
    public $descripcion_promocion;
    public $precio_promocion;

    protected $rules = [
        'id_producto' => 'required',
        'nombre_promocion' => 'required',
        'descripcion_promocion' => 'required',
        'precio_promocion' => 'required',
    ];

    public function save(){
        $this->validate();

        Promocion::create([
            'id_producto' => $this->id_producto,
            'nombre_promocion' => $this->nombre_promocion,
            'descripcion_promocion' => $this->descripcion_promocion,
            'precio_promocion' => $this->precio_promocion
        ]);

        $this->reset([
            'id_producto',
            'nombre_promocion',
            'descripcion_promocion',
            'precio_promocion',
            'open'
        ]);

        $this->emit('render_add_promo');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Exito!',
            'text' => 'La promoción ha sido creada con exito!',
            'icon' => 'success'
        ]);
    }

    public function render()
    {

        $productos = Producto::all();

        return view('livewire.create-promociones', compact('productos'));
    }
}
