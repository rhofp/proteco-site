<?php

namespace App\Http\Controllers;

use App\Classes;
use Cart;
use Illuminate\Http\Request;
use App\User;
use FPDI;

class GeneralController extends Controller {

    public function index() {
//        return view('inicio');
        return redirect('cursos');
    }

    public function blog() {
        return view('blog');
    }

    public function courses() {
        // $classes = Classes::where('state', 1)->orderBy('startDate', 'asc')->orderBy('startTime', 'asc')->get();
        $classes = Classes::where('state', 1)
        ->whereColumn('maxQuota','>','currentQuota')
        ->orderBy('startDate', 'asc')->orderBy('startTime', 'asc')->get();
        return view('cursos', compact('classes'));
    }

    public function joinup() {
        return view('convocatoria');
    }

    public function downloadFiles($file) {
        return response()->download('./archivos/' . $file);
    }

    public function downloadSyllabus($file) {
        return response()->download('./temarios/' . $file);
    }

    public function downloadGeneration($file) {
        return response()->download('./archivos/' . $file);
    }

    public function perfil(Request $request) {
        $user = User::findOrFail($request->user()->id);
        $inscriptions = $user->inscriptions()->get();
        return view('perfil', compact('inscriptions', 'user'));
    }

    public function logoutFlush(Request $request) {
        Cart::destroy();
        return redirect('logout');
    }

    public function arduino(Request $request) {
        $pdf = new FPDI();
        $path = public_path();
        $pdf->SetSourceFile($path . "/archivos/recibo.pdf");
        $pdf->AddPage();
        $pdf->UseTemplate($pdf->importPage(1), 0, 0, null, null);
        $pdf->SetFont('Arial');
        $pdf->SetFontSize(12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetXY(90, 45);
        $pdf->Write(0, "2016 - 2");
        $pdf->SetXY(33, 72);
        $pdf->Write(0, "NA");
        $pdf->SetXY(39, 78);
        $pdf->Write(0, utf8_decode($request->user()->name) . " " . utf8_decode($request->user()->firstLastName) . " " . utf8_decode($request->user()->secondLastName));
        $pdf->SetXY(37, 83.5);
        $pdf->Write(0, $request->user()->email);
        $pdf->SetFontSize(14);
        $pdf->SetXY(19, 88.5);
        $cuenta = $request->user()->account;
        if ($request->user()->usertype_id == 1) {
            $pdf->Write(0, "Cuenta: ");
            $pdf->SetFontSize(12);
            $pdf->SetXY(37, 88.5);
        } elseif ($request->user()->usertype_id == 2) {
            $pdf->Write(0, "RFC: ");
            $pdf->SetFontSize(12);
            $pdf->SetXY(32, 88.5);
        } elseif ($request->user()->usertype_id == 3) {
            $pdf->Write(0, "RFC: ");
            $pdf->SetFontSize(12);
            $pdf->SetXY(32, 88.5);
        }
        $pdf->Write(0, $cuenta);
        $pdf->SetXY(19, 110);
        $i = 1;
        $space = 8;
        $pdf->Write(0, "Tarjeta ARDUINO UNO con cable");
        $pdf->SetXY(19, 110 + $space);
        $space += 8;
        $i++;
        $pdf->SetFontSize(14);
        $pdf->SetFont('Arial', 'B');
        $pdf->SetXY(19, 110 + $space);
        $pdf->Write(0, "Total a pagar: $440");
        $pdf->Output();
        exit;
    }
    
    public function raspberry(Request $request) {
        $pdf = new FPDI();
        $path = public_path();
        $pdf->SetSourceFile($path . "/archivos/recibo.pdf");
        $pdf->AddPage();
        $pdf->UseTemplate($pdf->importPage(1), 0, 0, null, null);
        $pdf->SetFont('Arial');
        $pdf->SetFontSize(12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetXY(90, 45);
        $pdf->Write(0, "2016 - 2");
        $pdf->SetXY(33, 72);
        $pdf->Write(0, "NA");
        $pdf->SetXY(39, 78);
        $pdf->Write(0, utf8_decode($request->user()->name) . " " . utf8_decode($request->user()->firstLastName) . " " . utf8_decode($request->user()->secondLastName));
        $pdf->SetXY(37, 83.5);
        $pdf->Write(0, $request->user()->email);
        $pdf->SetFontSize(14);
        $pdf->SetXY(19, 88.5);
        $cuenta = $request->user()->account;
        if ($request->user()->usertype_id == 1) {
            $pdf->Write(0, "Cuenta: ");
            $pdf->SetFontSize(12);
            $pdf->SetXY(37, 88.5);
        } elseif ($request->user()->usertype_id == 2) {
            $pdf->Write(0, "RFC: ");
            $pdf->SetFontSize(12);
            $pdf->SetXY(32, 88.5);
        } elseif ($request->user()->usertype_id == 3) {
            $pdf->Write(0, "RFC: ");
            $pdf->SetFontSize(12);
            $pdf->SetXY(32, 88.5);
        }
        $pdf->Write(0, $cuenta);
        $pdf->SetXY(19, 110);
        $i = 1;
        $space = 8;
        $pdf->Write(0, "Tarjeta RASPBERRY PI 3 Model B");
        $pdf->SetXY(19, 110 + $space);
        $space += 8;
        $i++;
        $pdf->SetFontSize(14);
        $pdf->SetFont('Arial', 'B');
        $pdf->SetXY(19, 110 + $space);
        $pdf->Write(0, "Total a pagar: $1250");
        $pdf->Output();
        exit;
    }


}
