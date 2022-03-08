<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowProductsBody extends Component
{
    public $antideslizante = false;

    public function render()
    {
        return view('livewire.show-products-body');
    }

    public function openAntideslizante()
    {
        if($this->antideslizante == false){
            $this->antideslizante = true;
        }else{
            $this->antideslizante = false;
        }
            

    }
}
