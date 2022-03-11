<div>
    <div class="max-w-7xl mx-auto bg-gray-200">
        <div class="px-6 py-4 flex items-stretch bg-gray-300">
            <span
                class="flex items-center bg-blue-200 leading-normal rounded rounded-r-none border border-r-0 border-black px-3 text-grey-dark whitespace-no-wrap ">Buscar:
            </span>
            <input type="text"
                class="flex-shrink flex-grow w-px leading-normal rounded rounded-l-none px-3 relative focus:border-blue focus:shadow border border-black mr-4"
                placeholder="Buscar Producto" wire:model="search">
            @livewire('create-productos')
        </div>
    </div>

    @if($productos->count())
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('id')">
                    ID
                    @if($sort == 'id')
                        @if($direction == 'asc')
                            <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                        @endif 
                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('id_tipo_producto')">
                    Producto
                    @if($sort == 'id_tipo_producto')
                        @if($direction == 'asc')
                            <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                        @endif 
                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('nombre_disenio_producto')">
                    Diseño
                    @if($sort == 'nombre_disenio_producto')
                        @if($direction == 'asc')
                            <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                        @endif 
                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('color_producto')">
                    Color
                    @if($sort == 'color_producto')
                        @if($direction == 'asc')
                            <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                        @endif 
                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('foto_producto')">
                    Imagen
                    @if($sort == 'foto_producto')
                        @if($direction == 'asc')
                            <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                        @endif 
                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('precio_producto')">
                    Precio
                    @if($sort == 'precio_producto')
                        @if($direction == 'asc')
                            <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                        @endif 
                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('stock')">
                    Stock
                    @if($sort == 'stock')
                        @if($direction == 'asc')
                            <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                        @endif 
                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <span class="sr-only">Editar</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($productos as $producto)
                <tr>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{$producto->id}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{$producto->nombre_tipo}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{$producto->nombre_disenio_producto}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{$producto->color_producto}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{$producto->foto_producto}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{$producto->precio_producto}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{$producto->stock}}
                        </div>
                    </td>
                    <td class="px-6 py-4 text-right text-sm font-medium">
                        <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring focus:ring-yellow-200 active:bg-yellow-600 disabled:opacity-25 transition'" wire:click="edit({{$producto->id}})">Editar</a>
                        <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition'" wire:click="delete({{$producto->id}})">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <div class="px-6 py-4 text-center">
            No existe ningún registro.
        </div>
    @endif

    <!-- Modal de Edición -->
    <x-jet-dialog-modal wire:model="openEditModal">
        <x-slot name="title">
            Editar Producto
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Tipo Producto: "/>
                <select name="tipo_producto_id" class="w-full rounded-md shadow-sm mt-1 block" data-live-search="true" wire:model.defer="nombre_tipo" >
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
                <x-jet-label value="Imagen:"/>
                <input type="file" wire:model.defer="foto_producto">
                
                <x-jet-input-error for="foto_producto"/>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="updateProducto" wire:loading.attr="disabled" class="disabled:opacity-25">Editar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('openEditModal', false)" wire:loading.attr="disabled" class="disabled:opacity-25">Cancelar</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

    <!-- Modal de Eliminación -->
    <x-jet-dialog-modal wire:model="openDeleteModal">
        <x-slot name="title">
            Eliminar Producto
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <p id="producto_id" wire:model.defer="producto_id">¿Estás seguro de eliminar este producto?</p>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="destroyProducto" wire:loading.attr="disabled" class="disabled:opacity-25">Eliminar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('openDeleteModal', false)" wire:loading.attr="disabled" class="disabled:opacity-25">Cancelar</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
