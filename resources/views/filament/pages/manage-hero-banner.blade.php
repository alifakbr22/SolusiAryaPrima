<x-filament-panels::page>
    <form wire:submit="save">
        {{ $this->getSchema('hero') }}

        <div class="mt-6">
            <x-filament-panels::form.actions
                :actions="$this->getFormActions()"
            />
        </div>
    </form>
</x-filament-panels::page>
