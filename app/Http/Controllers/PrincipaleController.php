<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\UseCase;

class PrincipaleController extends Controller {

	public function index() {
        return view('avvio');
    }

    public function about() {
        return view('about');
    }

    public function grafica() {
        return view('grafica');
    }

    public function servizi() {
        return view('servizi');
    }

    public function altro() {
        return view('altro');
    }

    public function contatti() {
        return view('contatti');
    }

    public function privacy() {
        return view('privacy');
    }

    public function caseStudy() {
        $cases = UseCase::orderBy('posizione', 'DESC')->get();
        return view('case', compact('cases'));
    }

}
