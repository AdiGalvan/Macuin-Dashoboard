@extends('layouts.plantilla_auxiliar')

@section('titulo', 'Solicitud de Tickets')

@section('contenido')

@include('partials.modal_perfil')

@include('partials.modal_mensaje')



<!-- component -->
<body class="antialiased font-sans bg-gray-200">

   
    <h3 class="text-center text-2xl font-serif mt-8 mb-4">Solicitud de Tickets</h3>
    
    <div class="container mx-auto px-4 sm:px-8">
        
   <!-- ----------------Botones de agregar y tickets cancelados--------------- -->
        <div class="flex justify-between mb-4">
            <div class="my-2 m-10">
                <div class="mb-2">
                    <button id="openGenerateTicketButton" class="bg-blue-900 hover:bg-blue-600 text-white py-2 px-3 rounded-xl transition-colors top items-center">
                        Tickets asignados
                    </button>
                </div>
                <div class="mb-2">
                    <button id="openGenerateTicketButton" class="bg-blue-900 hover:bg-blue-600 text-white py-2 px-3 rounded-lg transition-colors flex items-center">
                        <i class="material-icons mr-1">add_circle</i>
                        Generar ticket
                    </button>
                </div>
            </div>
            
            <!-- ----------Buscador------ -->
            <div class="my-2 m-10 flex items-center justify-center ">
                <label class="mr-2">Buscar:</label>
                <input placeholder="Buscar" class="rounded-full border-gray-300 border w-full py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:border-gray-500" />
            </div>
        </div>


        <div class="mx-3 sm:-mx-8 px-4 sm:px-8 py-2 overflow-x-auto">
            <div class="inline-block min-w-full shadow-2xl rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal ">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider ">
                                Cliente
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Ticket
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Estatus 
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Asignar
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Comentario
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                PDF
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-2 border-b-2 border-gray-200 bg-white text-sm"> <!-- Ajusta el relleno aquí -->
                                Juan Carlos  
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm "> <!-- Ajusta el relleno aquí -->
                            Fallo en la red
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm font-bold text-red-700"> <!-- Ajusta el relleno aquí -->
                            Pendiente 
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-lg">
                            <button id="" class=" text-orange-500 hover:text-orange-400 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl ">forward_to_inbox</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-lg">
                            <button id="" class=" text-blue-900 hover:text-blue-700 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl">chat</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-xl ">
                                <button id="openModalStatusButton" class=" hover:text-red-700 text-red-800 font-bold py-1 px-1 rounded">
                                    <i class="material-icons text-3xl">picture_as_pdf</i> 
                                </button>
                            </td>
                        </tr>


                        <tr>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                Daniel
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                Error de software
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm font-bold text-green-700">
                                Completado
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-lg">
                            <button id="" class=" text-orange-500 hover:text-orange-400 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl ">forward_to_inbox</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-">
                            <button id="" class=" text-blue-900 hover:text-blue-700 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl">chat</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-xl ">
                                <button id="openModalStatusButton" class=" hover:text-red-700 text-red-800 font-bold py-1 px-1 rounded">
                                    <i class="material-icons text-3xl">picture_as_pdf</i> 
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                José Antonio
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                Error de software
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm font-bold text-orange-700">
                                Cancelado
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-lg">
                            <button id="" class=" text-orange-500 hover:text-orange-400 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl ">forward_to_inbox</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-">
                            <button id="" class=" text-blue-900 hover:text-blue-700 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl">chat</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-xl ">
                                <button id="openModaltatusButton" class=" hover:text-red-700 text-red-800 font-bold py-1 px-1 rounded">
                                    <i class="material-icons text-3xl">picture_as_pdf</i> 
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                David
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                Fallo en la red
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm font-bold text-blue-700">
                                Asignado
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-lg">
                            <button id="" class=" text-orange-500 hover:text-orange-400 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl ">forward_to_inbox</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-">
                            <button id="" class=" text-blue-900 hover:text-blue-700 font-bold py-1 px-1 rounded ">
                                <i class="material-icons text-3xl">chat</i>   
                            </button>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-200 bg-white text-xl ">
                                <button id="" class=" hover:text-red-700 text-red-800 font-bold py-1 px-1 rounded">
                                    <i class="material-icons text-3xl">picture_as_pdf</i> 
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div
                    class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                    
                    <div class="inline-flex mt-2 xs:mt-0">
                    <!-- component -->

                    <div class="flex justify-center">
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
        </div> <!-- div de class -->
    </div> <!-- div de container -->



    @include('partials.modal_status')

  
</body>

@endsection