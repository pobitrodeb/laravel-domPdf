<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PdfController extends Controller
{
    public function makePdf()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Congratulations</h1>');
        return $pdf->stream();
    }
}
