<div class="min-w-fit">
    <x-button wire:click="$set('open', true)"> Crear placa</x-button>
    <x-dialog-modal wire:model="open" max-width="sm">
        <x-slot name="title">
            <h2><strong>Crear placa</strong></h2>
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-col gap-2 justify-center">
                <label>
                    <x-input class="w-full" placeholder="Placa" wire:model="placa" type="text" name="placa"
                             id="placa"/>
                </label>
                <x-input-error for="placa"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="resetValues" class="mr-2">Cancelar</x-secondary-button>
            <button wire:click="store"
                    class="px-4 py-2.5 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                Agregar
            </button>
        </x-slot>
    </x-dialog-modal>
</div>
