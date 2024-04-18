
@extends('layouts.plantilla')

@section('titulo', 'Tickets Cancelados')

@section('contenido')

@include('partials.modal_perfil')

@include('partials.modal_mensaje')



<body class="antialiased font-sans bg-gray-200">
    <h1 class="text-center text-4xl font-serif mt-8 mb-4">Cancelar Tickets</h1>
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
          
            <div class="my-2 flex sm:flex-row flex-col">
               
            <div class="flex items-center">
                <div class="relative flex items-stretch w-full">
                    <input id="buscar-ticket" placeholder="Buscar" class="rounded-full border-gray-300 border w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-gray-500" />
                    <button class=" absolute right-0 top-0 bottom-0  px-2 text-gray-900 hover:text-green-700">
                        <i class="material-icons mt-2">search</i>
                    </button>
                </div>
            </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Tipo
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
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                   Fallas de red 
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  Cancelado 
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    12/12/2021
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                 Contabilidad   
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>

                    <div class="flex justify-center p-5">
                        <nav class="flex space-x-2" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm bg-blue-400 text-white font-semibold rounded-md focus:border-blue-300">
                                Previous
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
                                1
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
                                2
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border cursor-pointer leading-5 rounded-md transition duration-150 ease-in-out focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">
                                3
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm  bg-blue-400 text-white font-semibold rounded-md focus:border-blue-300">
                                Next
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


 

@endsection


