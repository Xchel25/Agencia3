<div class="flex flex-col gap-2">
    <div class="flex w-full items-center gap-3">
        <x-input
            type="text"
            class="w-full"
            placeholder="Buscar categoria"
        />
        @livewire('categoria-create')
    </div>

    <div
        class="rounded-sm border border-stroke bg-white px-5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5"
    >
        <div class="max-w-full overflow-x-auto">
            @if(count($categorias) > 0)
                <table class="w-full table-auto">
                    <thead>
                    <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th
                            class="min-w-[220px] px-4 py-4 font-medium text-black dark:text-white xl:pl-11"
                        >
                            Nombre
                        </th>
                        <th
                            class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white"
                        >
                            Fecha de creacion
                        </th>
                        <th
                            class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white"
                        >
                            Vehiculos asociados
                        </th>
                        <th class="px-4 py-4 font-medium text-black dark:text-white">
                            Acciones
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr wire:key="{{ $categoria->id }}">
                            <td
                                class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11"
                            >
                                <h5 class="font-medium text-black dark:text-white">{{$categoria->nombre}}</h5>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{$categoria->created_at->diffForHumans()}}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <p class="text-black dark:text-white">{{$categoria->vehiculos_count}}</p>
                            </td>
                            <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                <div class="flex items-center space-x-3.5">
                                    <button class="hover:text-primary">

                                    </button>
                                    <button class="hover:text-primary">

                                    </button>
                                    <button class="hover:text-primary">
                                        <x-far-trash-can class="fill-current h-6 w-7"/>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h2 class="py-4 text-center text-3xl dark:text-gray text-graydark">
                    No hay categorias
                </h2>
            @endif
        </div>
    </div>
    @livewire('delete-modal', [
        'modalId' => 'deleteCategoriaModal',
        'action' => 'deleteCategoria',
        'actionName' => 'Eliminar',
        'title' => 'Eliminar categoria',
        'content' => '¿Está seguro de que desea eliminar esta categoria? <small>Esta acción es irreversible</small>',
        ])
</div>
