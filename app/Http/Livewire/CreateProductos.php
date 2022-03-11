<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tipoproducto;
use App\Models\Producto;

class CreateProductos extends Component
{
    use WithFileUploads;

    public $open = true;

    public $nombre_tipo;

    public $nombre_disenio_producto;
    public $color_producto;
    public $precio_producto;
    public $stock;
    public $foto_producto;
    
    public function render()
    {
        $tipos = Tipoproducto::all();
        //dd($tipos);

        return view('livewire.create-productos', compact('tipos'));
    }

    public function save(){
        $this->validate([
            'foto_producto' => 'image|max:1024',
        ]);

        //subir imagen
        if($this->foto_producto != null){
            $image = $this->foto_producto->getClientOriginalName();
            $this->foto_producto->storeAs('imagesProducts/', $image);
        }
        
        //guardar datos producto y url de imagen
        Producto::create([
            'id_tipo_producto' => $this->nombre_tipo,
            'nombre_disenio_producto' => $this->nombre_disenio_producto,
            'color_producto' => $this->color_producto,
            'foto_producto' => $image,
            'precio_producto' => $this->precio_producto,
            'stock' => $this->stock,
        ]);

        $this->reset([
            'open',
            'nombre_tipo',
            'nombre_disenio_producto',
            'color_producto',
            'foto_producto',
            'precio_producto',
            'stock'
        ]);

        $this->emit('render_add_producto');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Exito!',
            'text' => 'El producto se ha creado exitosamente!.',
            'icon' => 'success'
        ]);
    }
}
