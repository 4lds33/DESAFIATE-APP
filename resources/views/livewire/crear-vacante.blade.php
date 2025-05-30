<form class="md:w-1/2 space-y-5">
        <div>
            <x-input-label for="titulo" :value="__('Titulo Vacante')" />
            <x-text-input wire:model="form.titulo" 
            id="titulo" class="block mt-1 w-full" 
            type="text" wire:model="titulo" :value="old('titulo')"
            placeholder="Titulo Vacante"/>
        </div>  

        <div>
            <x-input-label for="salario" :value="__('Salario Mensual')" />
            <select
                id="salario"
                name="salario"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            >
                <option>--Seleccione --</option>
                @foreach ($salarios as $salario )
                    <option value="{{ $salario-> id }}">{{$salario->salario}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <x-input-label for="categoria" :value="__('Categoria')" />
            <select
                id="categoria"
                name="categoria"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            >
                <option>--Seleccione --</option>
                @foreach ($categorias as $categoria )
                    <option value="{{ $salario-> id }}">{{$categoria->categoria}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <x-input-label for="empresa" :value="__('Empresa')" />
            <x-text-input wire:model="form.empresa" 
            id="empresa" class="block mt-1 w-full" :value="old('empresa')"
            type="text" name="empresa" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>
        </div> 

        <div>
            <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
            <x-text-input wire:model="form.empresa" 
            id="ultimo_dia" class="block mt-1 w-full" :value="old('ultimo_dia')"
            type="date" name="ultimo_dia"/>
        </div>
        
        <div>
            <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
            <textarea
                name="descripcion"
                placeholder="Descripción general del puesto experiencia"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"
            ></textarea>
        </div>

        <div>
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input wire:model="form.titulo" 
            id="imagen" class="block mt-1 w-full" 
            type="file" name="imagen"
            />
        </div>  

        <x-danger-button>
            Crer Vacante
        </x-danger-button>
</form>