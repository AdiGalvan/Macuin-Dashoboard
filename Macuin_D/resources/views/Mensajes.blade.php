
@extends('layouts.plantilla')

@section('titulo', 'Mensajes')

@section('contenido')

@include('partials.modal_perfil')

@include('partials.modal_mensaje')



    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-serif text-gray-800 mb-6">Mensajes Recibidos</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Ejemplo de mensaje recibido -->
            <div class="bg-white rounded-lg shadow-md p-6 flex items-center">
                <div class="justify-start rounded-full mr-4">
                    <i class="material-icons text-green-600 text-xl">chat</i>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Jefe de Soporte</h2>
                    <p class="text-sm text-gray-600">22/05/24</p>
                    <p class="text-gray-700 mt-2">Tickets asignados correctamente.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex items-center">
                <div class="justify-start rounded-full mr-4">
                    <i class="material-icons text-green-600 text-xl">chat</i>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Jefe de Soporte</h2>
                    <p class="text-sm text-gray-600">22/05/24</p>
                    <p class="text-gray-700 mt-2">Tickets asignados correctamente.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex items-center">
                <div class="justify-start rounded-full mr-4">
                    <i class="material-icons text-green-600 text-xl">chat</i>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Jefe de Soporte</h2>
                    <p class="text-sm text-gray-600">22/05/24</p>
                    <p class="text-gray-700 mt-2">Tickets asignados correctamente.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex items-center">
                <div class="justify-start rounded-full mr-4">
                    <i class="material-icons text-green-600 text-xl">chat</i>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Jefe de Soporte</h2>
                    <p class="text-sm text-gray-600">22/05/24</p>
                    <p class="text-gray-700 mt-2">Tickets asignados correctamente.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex items-center">
                <div class="justify-start rounded-full mr-4">
                    <i class="material-icons text-green-600 text-xl">chat</i>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Jefe de Soporte</h2>
                    <p class="text-sm text-gray-600">22/05/24</p>
                    <p class="text-gray-700 mt-2">Tickets asignados correctamente.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 flex items-center">
                <div class="justify-start rounded-full mr-4">
                    <i class="material-icons text-green-600 text-xl">chat</i>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-800">Jefe de Soporte</h2>
                    <p class="text-sm text-gray-600">22/05/24</p>
                    <p class="text-gray-700 mt-2">Tickets asignados correctamente.</p>
                </div>
            </div>

            <!-- Puedes agregar más mensajes recibidos aquí -->
        </div>
    </div>



@endsection