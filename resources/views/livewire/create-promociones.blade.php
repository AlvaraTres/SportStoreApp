<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Agregar Promoción
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Promoción
        </x-slot>

        <x-slot name="content">
            
            <div class="mb-4">
                <x-jet-label value="Producto: "/>
                <select name="id_producto" class="w-full rounded-md shadow-sm mt-1 block" data-live-search="true" wire:model.defer="id_producto" >
                    <option value="0">{{__('Seleccione producto')}}</option>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">
                            {{ $producto->nombre_disenio_producto }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre Promoción:" />
                <x-jet-input id="nombre_promocion" type="text" class="text-black mt-1 block w-full" wire:model.defer="nombre_promocion"  />
                <x-jet-input-error for="nombre_promocion" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Descripción:" />
                <x-jet-input id="descripcion_promocion" type="text" class="text-black mt-1 block w-full" wire:model.defer="descripcion_promocion"  />
                <x-jet-input-error for="descripcion_promocion" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Valor:" />
                <x-jet-input id="precio_promocion" type="text" class="text-black mt-1 block w-full" wire:model.defer="precio_promocion"  />
                <x-jet-input-error for="precio_promocion" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">Crear</x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('open', false)" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">Cancelar</x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
