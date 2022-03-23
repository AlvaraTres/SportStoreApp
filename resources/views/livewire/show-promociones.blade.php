<div>
    <div class="max-w-7xl mx-auto bg-gray-200">
        <div class="px-6 py-4 flex items-stretch bg-gray-300">
            <span
                class="flex items-center bg-blue-200 leading-normal rounded rounded-r-none border border-r-0 border-black px-3 text-grey-dark whitespace-no-wrap ">Buscar</span>
            <input type="text"
                class="flex-shrink flex-grow w-px leading-normal rounded rounded-l-none px-3 relative focus:border-blue focus:shadow border border-black mr-4"
                placeholder="Promoción" wire:model="search">
            @livewire('create-promociones')
        </div>
    </div>

    @if ($promociones->count())
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                        wire:click="order('id_producto')">
                        Producto
                        @if ($sort == 'id_producto')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-numeric-up float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-numeric-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                        wire:click="order('nombre_promocion')">
                        NOMBRE
                        @if ($sort == 'nombre_promocion')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                        wire:click="order('descripcion_promocion')">
                        DESCRIPCION
                        @if ($sort == 'descripcion_promocion')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                        wire:click="order('precio_promocion')">
                        VALOR
                        @if ($sort == 'precio_promocion')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Editar</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($promociones as $promo)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $promo->nombre_disenio_producto }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <div class="text-sm text-gray-900">
                                {{ $promo->nombre_promocion }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <div class="text-sm text-gray-900">
                                {{ $promo->descripcion_promocion }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            <div class="text-sm text-gray-900">
                                {{ $promo->precio_promocion }}
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring focus:ring-yellow-200 active:bg-yellow-600 disabled:opacity-25 transition'" wire:click="edit({{$promo->id}})">Editar</a>
                            <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition'" wire:click="delete({{$promo->id}})">Eliminar</a>
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
            Editar Promoción
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
            <x-jet-secondary-button wire:click="updatePromocion" wire:loading.attr="disabled" class="disabled:opacity-25">Editar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('openEditModal', false)" wire:loading.attr="disabled" class="disabled:opacity-25">Cancelar</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

    <!-- Modal de Eliminación -->
    <x-jet-dialog-modal wire:model="openDeleteModal">
        <x-slot name="title">
            Eliminar Promoción
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <p id="nombre_promocion" wire:model.defer="nombre_promocion">¿Estás seguro de eliminar esta promocion?</p>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="destroyPromocion" wire:loading.attr="disabled" class="disabled:opacity-25">Eliminar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="$set('openDeleteModal', false)" wire:loading.attr="disabled" class="disabled:opacity-25">Cancelar</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
