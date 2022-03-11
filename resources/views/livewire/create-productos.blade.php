<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Agregar Producto
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear Producto
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Tipo Producto: "/>
                <select name="id_tipo_producto" class="w-full rounded-md shadow-sm mt-1 block" data-live-search="true" wire:model.defer="id_tipo_producto" >
                    <option value="0">{{__('Seleccione tipo de producto')}}</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}">
                            {{ $tipo->nombre_tipo }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <x-jet-label value="Diseño:"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre_disenio_producto"/>
                
                <x-jet-input-error for="nombre_disenio_producto"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Color:"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="color_producto"/>
                
                <x-jet-input-error for="color_producto"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Precio:"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="precio_producto"/>
                
                <x-jet-input-error for="precio_producto"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Stock:"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="stock"/>
                
                <x-jet-input-error for="stock"/>
            </div>

            <div class="mb-4">
                <input type="file" name="foto_producto" id="foto_producto" class="inputfile" wire:model.defer="foto_producto"/>
                <label for="foto_producto">Imagen</label>
                <h1 id="fotoName"></h1>
                
                <x-jet-input-error for="foto_producto"/>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">Crear Tipo</x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('open', false)" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">Cancelar</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

    @push('js')
        <script type="text/javascript">
            let imagenFoto = document.querySelector('#foto_producto');
            imagenFoto.addEventListener('change',() => {
                var texto = imagenFoto.files[0].name
                console.log(texto);
                document.querySelector('#fotoName').innerText = imagenFoto.files[0].name;
            });
        </script>
    @endpush


</div>
