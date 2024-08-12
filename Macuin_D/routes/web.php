<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('inicio');
// });


Route::view('/', 'Login');
Route::view('/tckGestion', '/Tickets_Cliente/GestionTickets');
Route::view('/tckCancelados', '/Tickets_Cliente/TicketsCancelados');


Route::view('/tckConsultar', '/Tickets_Auxiliar/consultarTickets');
Route::view('/tckMensajes', '/Tickets_Auxiliar/MensajesAux');
Route::view('/tckAuxiliar', '/Tickets_Auxiliar/TicketsAuxiliar');


Route::view('/tckAsignados', '/Tickets_Jefe/TicketsAsignados');
Route::view('/RegUsuario', '/Tickets_Jefe/RegistroUsuario');
Route::view('/RegDepa', '/Tickets_Jefe/RegistroDepartamento');
Route::view('/Mensajes_Jefe', '/Tickets_Jefe/Mensajes');
Route::view('/solicitudTck', '/Tickets_Jefe/Solicitud_Ticket');







Route::get('/Tickets_Jefe/generar_pdf', [pdfController::class, 'generarPDF'])->name('Tickets_Jefe.generar_pdf');



// Route::view('/', 'GestionTickets');
// Route::view('/tckCancelados', 'TicketsCancelados');




