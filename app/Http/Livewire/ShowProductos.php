<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Producto;
use App\Models\Tipoproducto;
use DB;

class ShowProductos extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search;
    public $sort = 'id';
    public $direction = 'asc';

    public $producto;
    public $producto_id;
    public $id_tipo_producto;
    public $nombre_disenio_producto;
    public $color_producto;
    public $foto_producto;
    public $precio_producto;
    public $stock;

    public $openEditModal =  false;
    public $openDeleteModal = false;

    protected $rules = [
        'producto_id' => 'required',
        'nombre_disenio_producto' => 'required',
        'color_producto' => 'required',
        'foto_producto' => 'required',
        'precio_producto' => 'required',
        'stock' => 'required'
    ];

    protected $listeners = ['render_add_producto' => 'render'];    

    public function render()
    {
        $productos = DB::table('productos')
                        ->join('tipo_productos', 'tipo_productos.id', '=', 'productos.id_tipo_producto')
                        ->select('productos.*', 'tipo_productos.nombre_tipo')
                        ->where('nombre_disenio_producto', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction)
                        ->get();

        $tipos = Tipoproducto::all();

        return view('livewire.show-productos', compact('productos', 'tipos'));
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
        $producto = Producto::find($id);
        $this->producto_id = $producto->id;
        $this->id_tipo_producto = $producto->id_tipo_producto;
        $this->nombre_disenio_producto = $producto->nombre_disenio_producto;
        $this->color_producto = $producto->color_producto;
        $this->foto_producto =  $producto->foto_producto;
        $this->precio_producto = $producto->precio_producto;
        $this->stock = $producto->stock;

        $this->openEditModal =  true;
    }

    public function updateProducto(){
        //validar datos

        $producto = Producto::find($this->producto_id);

        //subir imagen
        if($this->foto_producto != null){
            $image_update = $this->foto_producto->getClientOriginalName();
            $this->foto_producto->storeAs('imagesProducts/', $image_update);
        }

        $producto->update([
            'id_tipo_producto' => $this->id_tipo_producto,
            'nombre_disenio_producto' => $this->nombre_disenio_producto,
            'color_producto' => $this->color_producto,
            'foto_producto' => $image_update,
            'precio_producto' => $this->precio_producto,
            'stock' => $this->stock
        ]);

        $this->reset([
            'producto_id',
            'id_tipo_producto',
            'nombre_disenio_producto',
            'color_producto',
            'foto_producto',
            'precio_producto',
            'stock',
            'openEditModal'
        ]);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Exito!', 
            'text' => 'El producto ha sido actualizado con éxito!',
            'icon' => 'success'
        ]);
    }

    public function delete($id){
        $producto = Producto::find($id);
        $this->producto_id = $producto->id;
        $this->openDeleteModal = true;
    }

    public function destroyProducto(){
        $producto = Producto::find($this->producto_id);
        $producto->delete();

        $this->reset([
            'openDeleteModal',
            'producto_id',
            'producto',
        ]);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Exito!', 
            'text' => 'El producto ha sido eliminado con éxito!',
            'icon' => 'success'
        ]);
    }
}
