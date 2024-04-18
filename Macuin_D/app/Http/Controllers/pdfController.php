<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use DB;
use PDF;
/* use vendor\pdf\dompdf; */


class pdfController extends Controller
{
    public function generarPDF()
    {
        $tickets = DB::table('tickets')->get();
        
        $pdf = PDF::loadView('Ticket_Jefe.generar_pdf', compact('tickets'));

        return $pdf->download('reporte_tickets.pdf');
    }

    public function pdfTicket()
    {
        $ventas = DB::table('ventas')->get();
        $customPaper = array(0, 0, 300, 300);
        $pdf = PDF::loadView('ventas.pdf_tickets', compact('ventas'))->setPaper($customPaper);
        return $pdf->download('ORDEN DE COMPRA.pdf');
    }

    public function pdfTicket_compra()
    {
        $compras = DB::table('compras')->get();
        $customPaper = array(0, 0, 227.559, 300);
        $pdf = PDF::loadView('compras.pdf_compras', compact('compras'))->setPaper($customPaper);
        return $pdf->download('ORDEN DE COMPRA.pdf');
    }
}