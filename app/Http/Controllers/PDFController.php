<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    function htmlPDF(){
        return view('cv');
    }

    function generatePDF(){
        $name="Test";
        //$cvdata = ['Name', 'NameTail', 'Email', 'Phone', 'Profile', 'Skills', 'TechnicalSkills', 'Experience', 'University', 'Certificate'];
        // $dompdf=new Dompdf();
        // $dompdf->loadHtml(view('cv'),$cvdata);
        // $dompdf->setPaper('A4','portrait');
        // $dompdf->render();
        // $dompdf->stream('cv.pdf',['Attachment'=>true]);

        $pdf = PDF::loadView('html', compact('name'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('demonutslaravel.pdf');
    }
}
