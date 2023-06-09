<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    //
    public function sendEmail(){
    	$details=[
    		'title' => 'Correo de su amigo y servidor Gustavo',
    		'Body' => 'Esto es una prueba para enviar el correo desde mi cuenta'
    	];
    	Mail::to("tavososa491@gmail.com")->send(new TestMail($details));
    	return "Correo Electronico Enviado";
    }
}
