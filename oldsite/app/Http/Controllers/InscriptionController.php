<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Cart;
use App\User;
use App\Ticket;
use App\Inscription;
use App\RegisteredClass;
use FPDI;

class InscriptionController extends Controller {

    public function index() {
        $users = User::has('inscriptions')->get();
        return view('inscriptions.index', compact('users'));
    }

    public function seeInscriptions($id) {
        $inscriptions = User::has('inscriptions')->where('id', $id)->first()->inscriptions()->get();
        $user = User::findOrFail($id);
        foreach ($inscriptions as $inscription) {
            $inscription['fullName'] = $user->name . " " . $user->firstLastName . " " . $user->secondLastName;
            $inscription['email'] = $user->email;
            $inscription['account'] = $user->account;
            $inscription['inscription'] = $inscription->classes()->get();
            foreach ($inscription['inscription'] as $row) {
                $row->course;
            }
        }
        return $inscriptions;
    }

    public function seeInscription($id) {
        $inscription = Inscription::where('id', $id)->first();
        $user = User::findOrFail($inscription->user_id);
        $inscription['fullName'] = $user->name . " " . $user->firstLastName . " " . $user->secondLastName;
        $inscription['email'] = $user->email;
        $inscription['account'] = $user->account;
        $inscription['inscription'] = $inscription->classes()->get();
        foreach ($inscription['inscription'] as $row) {
            $row->course;
        }
        return $inscription;
    }

    public function confirmInscription(Request $request) {
        /* DATOS */
        $id = $request->input('id');
        $futureState = $request->input('futureState');
        $ticket = $request->input('ticket');
        $inscription = Inscription::where('id', $id)->first();

        /* ACCION PAGO COMPLETO */
        if ($futureState === '1') {

            // Verificar que el ticket no exista
            $ticketBase = Ticket::where('description', $ticket)->get();

            if ($ticketBase->isEmpty()) {

                $dataT['description'] = $ticket;
                $dataT['inscription_id'] = $id;

                // Insertar ticket
                Ticket::create($dataT);

                // Cambiar estado a confirmado
                $inscription->state_id = 1;

                // Poner el pago realizado
                $inscription->partialPayment = $inscription->fullPayment;

                // Disminuir cupo
                foreach ($inscription->classes()->get() as $course) {
                    $course->currentQuota += 1;
                    $course->save();
                }

                $inscription->save();

                return $inscription;
            } else {
                return json_encode(0);
            }
        }

        /* ACCION PAGO PARCIAL */

        /* ACCION BECADO */

        return 0;
    }

    public function create() {
        
    }

    public function store(Requests\ClassRequest $request) {
        
    }

    public function edit($id) {
        
    }

    public function register() {
        return view('inscriptions.register');
    }

    public function update($id, Requests\ClassRequest $request) {
        
    }

    public function confirm(Request $request) {
        $num = Cart::count();
        $desc = Cart::total() / 2;
        if ($num >= 3 && $num < 6) {
            if ($request->user()->usertype_id == 1) {
                $desc = 1200;
            } else if ($request->user()->usertype_id == 2) {
                $desc = 2400;
            } else if ($request->user()->usertype_id == 3) {
                $desc = 3250;
            }
        } else if ($num >= 6 && $num < 9) {
            if ($request->user()->usertype_id == 1) {
                $desc = 1200 * 2;
            } else if ($request->user()->usertype_id == 2) {
                $desc = 2400 * 2;
            } else if ($request->user()->usertype_id == 3) {
                $desc = 3250 * 2;
            }
        } else if ($num >= 9 && $num < 12) {
            if ($request->user()->usertype_id == 1) {
                $desc = 1200 * 3;
            } else if ($request->user()->usertype_id == 2) {
                $desc = 2400 * 3;
            } else if ($request->user()->usertype_id == 3) {
                $desc = 3250 * 3;
            }
        } else {
            $desc = Cart::total() / 2;
        }
        return ["content" => Cart::content(), "total" => Cart::total(), "desc" => $desc];
    }

    public function delete($id, Request $request) {
        $user = User::findOrFail($request->user()->id);
        $inscriptions = $user->inscriptions()->findOrFail($id);
        $inscriptions->delete();
        return redirect('perfil');
    }

    public function enroll(Request $request) {
        // Inscriptions
        $num = Cart::count();
        $desc = Cart::total() / 2;
        if ($num >= 3 && $num < 6) {
            if ($request->user()->usertype_id == 1) {
                $desc = 1200;
            } else if ($request->user()->usertype_id == 2) {
                $desc = 2400;
            } else if ($request->user()->usertype_id == 3) {
                $desc = 3250;
            }
        } else if ($num >= 6 && $num < 9) {
            if ($request->user()->usertype_id == 1) {
                $desc = 1200 * 2;
            } else if ($request->user()->usertype_id == 2) {
                $desc = 2400 * 2;
            } else if ($request->user()->usertype_id == 3) {
                $desc = 3250 * 2;
            }
        } else if ($num >= 9 && $num < 12) {
            if ($request->user()->usertype_id == 1) {
                $desc = 1200 * 3;
            } else if ($request->user()->usertype_id == 2) {
                $desc = 2400 * 3;
            } else if ($request->user()->usertype_id == 3) {
                $desc = 3250 * 3;
            }
        } else {
            $desc = Cart::total() / 2;
        }
        $dataI['fullPayment'] = Cart::total() - $desc;
        $dataI['partialPayment'] = 0;
        $dataI['user_id'] = $request->user()->id;
        $dataI['state_id'] = 5;
        $inscription = Inscription::create($dataI);
        // RegisteredClass
        foreach (Cart::content() as $row) {
            $dataR['inscription_id'] = $inscription->id;
            $dataR['class_id'] = $row->id;
            $dataR['approved'] = 0;
            $dataR['attendance'] = 0;
            $dataR['note'] = 0;
            RegisteredClass::create($dataR);
        }
        Cart::destroy();
        return redirect('perfil');
    }

    public function recibo($id, Request $request) {
        $inscriptions = Inscription::where('user_id', $request->user()->id)->where('id', $id)->first();
        $classes = $inscriptions->classes->all();
        $pdf = new FPDI();
        $path = public_path();
        $pdf->SetSourceFile($path . "/archivos/recibo.pdf");
        $pdf->AddPage();
        $pdf->UseTemplate($pdf->importPage(1), 0, 0, null, null);
        $pdf->SetFont('Arial');
        $pdf->SetFontSize(12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetXY(90, 45);
        $pdf->Write(0, "2020 - 2");
        $pdf->SetXY(33, 71.5);
        $pdf->Write(0, $id);
        $pdf->SetXY(39, 77);
        $pdf->Write(0, utf8_decode($request->user()->name) . " " . utf8_decode($request->user()->firstLastName) . " " . utf8_decode($request->user()->secondLastName));
        $pdf->SetXY(37, 83);
        $pdf->Write(0, $request->user()->email);
        $pdf->SetFontSize(14);
        $pdf->SetXY(52, 88.5);
        $cuenta = $request->user()->account;
        /*if ($request->user()->usertype_id == 1) {
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
        }*/
        $pdf->Write(0, $cuenta);
        $pdf->SetXY(19, 120);
        $i = 1;
        $space = 8;
        foreach ($classes as $row) {
            $pdf->Write(0, $i . " - " . utf8_decode($row->course->name) . " | " . date("d-m-Y", strtotime($row->startDate)) . " al " . date("d-m-Y", strtotime($row->endDate)));
            $pdf->SetXY(19, 120 + $space);
            $space += 8;
            $i++;
        }
        $pdf->SetFontSize(14);
        $pdf->SetFont('Arial', 'B');
        $pdf->SetXY(19, 120 + $space);
        $pdf->Write(0, "Total a pagar: $" . $inscriptions->fullPayment);
        $pdf->Output();
        exit;
    }

}
