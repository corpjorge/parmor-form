<?php

namespace App\Http\Controllers;

use App\Mail\RecordMail;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RecordController extends Controller
{
    public function guardar(Record $record, Request $request)
    {
        $request->validate([
            'nombres' => 'required|',
            'apellidos' => 'required|',
            'correo' => 'required|email',
            'ciudad' => 'required|',
            'tipo' => 'required|',
        ]);
        $record->create($request->all());
        Mail::to($request->correo)->send(new RecordMail());
        return redirect()->back()->with('message', 'Enviado correctamente');
    }
}
