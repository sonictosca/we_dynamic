<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Mail;
use Request;

class ContattiController extends Controller {

    public function invia() {
        Mail::raw('Questo è un messaggio di prova', function($message) {
            $message->to(Request::input('email'), Request::input('nomeCognome'))->subject('Test');
        });
        return 'OK';
    }

}
