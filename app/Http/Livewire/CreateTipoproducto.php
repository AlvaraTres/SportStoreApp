<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tipoproducto;

class CreateTipoproducto extends Component
{
    public $open = false;

    public $nombre_tipo;
    
    protected $rules = [
        'nombre_tipo' => 'required|max:100',
    ];

    public function save(){
        $this->validate();

        Tipoproducto::create([
            'nombre_tipo' => $this->nombre_tipo,
        ]);

        $this->reset([
            'open',
            'nombre_tipo',
        ]);

        $this->emit('render_add_tipo_producto');
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Éxito!',
            'text' => 'El tipo de producto ha sido creado éxitosamente!.',
            'icon' => 'success'
        ]);
    }

    public function render()
    {
        return view('livewire.create-tipoproducto');
    }
}
