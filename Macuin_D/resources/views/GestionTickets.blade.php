@extends('layouts.plantilla')

@section('titulo', 'Gestion de tickets')

@section('contenido')

@include('partials.modal_perfil')

@include('partials.modal_mensaje')






<!-- component -->
<body class="antialiased font-sans bg-gray-200">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
          
        <div class="my-2 flex sm:flex-row flex-col">
    <div class="block relative">
        <div class="flex">
            <input placeholder="Buscar"
                class="appearance-none rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />

            <button id="openAddTicketModalButton" class="top-4 right-4 text-white bg-green-400 transition-colors rounded m-1 p-1 focus:outline-none z-20">
                <i class="material-icons">add_circle</i>  
            </button>
        </div>
        <span class="h-full absolute inset-y-0 right-0 flex items-center pr-2">
            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                <path
                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                </path>
            </svg>
        </span>
    </div>
</div>


            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Clasificación
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Estatus
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Fecha Asignada
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Departamento
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Cancelar
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                   
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                   
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    
                                    <button id="openDeleteModalButton" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                       
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                Anterior 
                            </button>
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                Siguente
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.modal_agregar')

    @include('partials.modal_eliminar')

  
</body>


@endsection
