<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Classes;
use App\Semester;
use App\Course;
use App\Place;
use App\ClassType;
use FPDI;

class ClassController extends Controller {

    public $days = [
        'Lunes' => 'Lunes',
        'Martes' => 'Martes',
        'Miércoles' => 'Miércoles',
        'Jueves' => 'Jueves',
        'Viernes' => 'Viernes',
        'Sábado' => 'Sábado',
        'Domingo' => 'Domingo'];

    public function index() {
        $classes = Classes::all();
        return view('classes.index', compact('classes'));
    }

    public function create() {
        $semesters = Semester::lists('description', 'id');
        $courses = Course::lists('name', 'id');
        $places = Place::lists('description', 'id');
        $classestypes = ClassType::lists('description', 'id');
        $days = $this->days;
        return view('classes.create', compact('semesters', 'courses', 'places', 'classestypes', 'days'));
    }

    public function store(Requests\ClassRequest $request) {
        $data = $request->all();
        $data['state'] = 1;
        $cad = "";
        for ($i = 0; $i < count($data['days']); $i++) {
            $cad .= (($i == 0) ? $data['days'][$i] : mb_strtolower($data['days'][$i], 'UTF-8')) . ($i == count($data['days']) - 2 ? ($i == count($data['days']) - 1 ? "" : " y ") : ", ");
        }
        $data['days'] = trim($cad, ", ");
        Classes::create($data);
        return redirect('classes');
    }

    public function edit($id) {
        $class = Classes::findOrFail($id);
        $semesters = $class->semester->lists('description', 'id');
        $courses = $class->course->lists('name', 'id');
        $places = $class->place->lists('description', 'id');
        $classestypes = $class->classtype->lists('description', 'id');
        $days = $this->days;
        return view('classes.edit', compact('semesters', 'courses', 'places', 'classestypes', 'days', 'class'));
    }

    public function update($id, Requests\ClassRequest $request) {
        $class = Classes::findOrFail($id);
        $data = $request->all();
        $cad = "";
        for ($i = 0; $i < count($data['days']); $i++) {
            $cad .= (($i == 0) ? $data['days'][$i] : mb_strtolower($data['days'][$i], 'UTF-8')) . ($i == count($data['days']) - 2 ? ($i == count($data['days']) - 1 ? "" : " y ") : ", ");
        }
        $data['days'] = trim($cad, ", ");
        $class->update($data);
        return redirect('classes');
    }

    public function inscriptionsByClass($id) {
        $class = Classes::find($id);
        $asistants = $class->inscriptions()->orderBy('state_id', 'ASC')->with('user')->get();

        $pdf = new FPDI();
        $path = public_path();

        $semestre = "2019 - 2";

        $pdf->AddPage('L');
        $pdf->SetSourceFile($path . "/archivos/lista.pdf");
        $pdf->useTemplate($pdf->importPage(1), 0, 0, null, null);
        $pdf->SetFont('Arial');
        $pdf->SetFontSize(12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetXY(135, 30);
        $pdf->Write(0, $semestre);
        $pdf->SetXY(35, 36);
        $pdf->Write(0, utf8_decode($class->course()->first()->name));
        $pdf->SetXY(38, 41.5);
        $pdf->Write(0, $class->startTime);
        $pdf->SetXY(55, 41.5);
        $pdf->Write(0, " - " . $class->endTime);
        $pdf->SetXY(36, 47);
        $pdf->Write(0, date("d/m/Y", strtotime($class->startDate)));
        $pdf->Ln(12);
        $pdf->SetFont('Arial', '', 14);
        $pdf->Cell(23, 12, utf8_decode('Folio'), 'LBTR', 0, 'C');
        $pdf->Cell(125, 12, utf8_decode('Nombre'), 'LBTR', 0, 'C');
        $pdf->Cell(26, 12, utf8_decode('Lunes'), 'LBTR', 0, 'C');
        $pdf->Cell(26, 12, utf8_decode('Martes'), 'LBTR', 0, 'C');
        $pdf->Cell(26, 12, utf8_decode('Miércoles'), 'LBTR', 0, 'C');
        $pdf->Cell(26, 12, utf8_decode('Jueves'), 'LBTR', 0, 'C');
        $pdf->Cell(26, 12, utf8_decode('Viernes'), 'LBTR', 1, 'C');
        $i = 1;
        foreach ($asistants as $row) {
            if ($row->state_id == 5) {
                //$pdf->Cell(23, 12, utf8_decode($i . ' - ' . $row->id . ' *'), 'LBTR', 0, 'L');
            } else {
                $pdf->Cell(23, 12, utf8_decode($i . ' - ' . $row->id), 'LBTR', 0, 'L');
                $pdf->Cell(125, 12, utf8_decode(ucwords($row->user->name . ' ' . $row->user->firstLastName . ' ' . $row->user->secondLastName)), 'LBTR', 0, 'L');
                $pdf->Cell(26, 12, '', 'LBTR', 0, 'C');
                $pdf->Cell(26, 12, '', 'LBTR', 0, 'C');
                $pdf->Cell(26, 12, '', 'LBTR', 0, 'C');
                $pdf->Cell(26, 12, '', 'LBTR', 0, 'C');
                $pdf->Cell(26, 12, '', 'LBTR', 1, 'C');
            }
            
            $i++;
        }
        $pdf->Output("Lista " . utf8_decode($class->course()->first()->name) . ".pdf", "I");
        exit;
    }

}