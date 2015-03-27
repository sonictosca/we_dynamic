<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\UseCase;
use App\News;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use File;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.main');
    }

    public function indexCases() {
        $cases = UseCase::orderBy('posizione', 'DESC')->get();
        $massimo = UseCase::all()->max('posizione');
        $minimo = UseCase::all()->min('posizione');
        return view('admin.case', compact('cases', 'massimo', 'minimo'));
    }

    public function createCase() {
        return view('admin.addCase');
    }

    public function storeCase(Request $request) {
        $massimo = UseCase::all()->max('posizione');
        $case = new UseCase;
        $case->nome = $request->input('nome');
        $case->settore = $request->input('settore');
        $case->collegamento = $request->input('collegamento');
        if (is_null($massimo)) {
            $case->posizione = 0;
        } else {
            $case->posizione = $massimo + 1;
        }
        $destinationPath = public_path().'/uploaded/';
        $case->immagine = $request->file('immagine')->getClientOriginalName();
        $request->file('immagine')->move($destinationPath, $request->file('immagine')->getClientOriginalName());
        $case->save();
        return redirect('admin/listcase');
    }

    public function editCase($useCase) {
        $use = UseCase::find($useCase);
        return view('admin.editCase', compact('use'));
    }

    public function updateCase($useCase, Request $request) {
        $use = UseCase::find($useCase);
        $use->nome = $request->input('nome');
        $use->settore = $request->input('settore');
        $use->collegamento = $request->input('collegamento');
        $destinationPath = public_path().'/uploaded/';
        if ($request->hasFile('immagine')) {
            File::delete($destinationPath.$use->immagine);
            $use->immagine = $request->file('immagine')->getClientOriginalName();
            $request->file('immagine')->move($destinationPath, $request->file('immagine')->getClientOriginalName());
        }
        $use->save();
        return redirect('admin/listcase');
    }

    public function upCase($case) {
        $useCase = UseCase::find($case);
        $precedente = UseCase::where('posizione', '>', $useCase->posizione)->orderBy('posizione')->first();
        $preTemp = $precedente->posizione;
        $useTemp = $useCase->posizione;
        $useCase->posizione = $preTemp;
        $precedente->posizione = $useTemp;
        $useCase->save();
        $precedente->save();
        return redirect('admin/listcase');
    }

    public function downCase($case) {
        $useCase = UseCase::find($case);
        $successivo = UseCase::where('posizione', '<', $useCase->posizione)->orderBy('posizione', 'DESC')->first();
        $succTemp = $successivo->posizione;
        $useTemp = $useCase->posizione;
        $useCase->posizione = $succTemp;
        $successivo->posizione = $useTemp;
        $useCase->save();
        $successivo->save();
        return redirect('admin/listcase');
    }

    public function deleteCase($case) {
        $useCase = UseCase::find($case);
        $useCase->delete();
        return redirect('admin/listcase');
    }

    public function indexNews() {
        $news = News::all();
        return view('admin.news.list', compact('news'));
    }

    public function addNews() {
        return view('admin.news.addNews');
    }

    public function storeNews(Request $request) {
        $news = new News;
        $news->titolo = $request->input('titolo');
        $news->contenuto = $request->input('contenuto');
        $news->inizio = $request->input('inizio');
        $news->fine = $request->input('fine');
        $destinationPath = public_path().'/uploaded/news/';
        $news->immagine = $request->file('immagine')->getClientOriginalName();
        $request->file('immagine')->move($destinationPath, $request->file('immagine')->getClientOriginalName());
        $news->save();
        return redirect('admin/listnews');
    }
}
