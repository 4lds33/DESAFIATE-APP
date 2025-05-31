<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>

    <div>
        <x-input-label for="titulo" :value="__('Título Vacante')" />
        <x-text-input
            id="titulo"
            class="block mt-1 w-full"
            type="text"
            wire:model="titulo"
            placeholder="Título de la Vacante"
        />
        @error('titulo')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>  

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select
            id="salario"
            wire:model="salario"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            <option value="">--Seleccione--</option>
            @foreach ($categorias as $categoriaItem)
                <option value="{{ $categoriaItem->id }}">{{ $categoriaItem->categoria }}</option>
            @endforeach

        </select>
        @error('salario')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select
            id="categoria"
            wire:model="categoria"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            <option value="">--Seleccione--</option>
            @foreach ($categorias as $categoriaItem)
                <option value="{{ $categoriaItem->id }}">{{ $categoriaItem->categoria }}</option>
            @endforeach
        </select>
        @error('categoria')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
            id="empresa"
            class="block mt-1 w-full"
            type="text"
            wire:model="empresa"
            placeholder="Empresa: ej. Netflix, Uber, Shopify"
        />
        @error('empresa')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div> 

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input
            id="ultimo_dia"
            class="block mt-1 w-full"
            type="date"
            wire:model="ultimo_dia"
        />
        @error('ultimo_dia')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea
            id="descripcion"
            wire:model="descripcion"
            placeholder="Descripción general del puesto, experiencia requerida, etc."
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"
        ></textarea>
        @error('descripcion')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
            id="imagen"
            class="block mt-1 w-full"
            type="file"
            wire:model="imagen"
        />
        @error('imagen')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>  

    <x-danger-button>
        Crear Vacante
    </x-danger-button>

</form>
