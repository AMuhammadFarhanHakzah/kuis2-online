<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\jawaban;
use App\Models\pertanyaan;
use App\Models\tambahKuis;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kuis = tambahKuis::get();
        return view('homepage.index', compact('kuis'));
    }

    public function mulai($idKuis)
    {
        $mulaiKuis = tambahKuis::find($idKuis);

        return view('homepage.mulai', compact('mulaiKuis'));
    }

    public function pertanyaan($idKuis, $idPertanyaan)
    {
        $pertanyaan = pertanyaan::where('id_tambahKuis', $idKuis)
                                ->where('id_pertanyaan', $idPertanyaan)
                                ->first();

        return view('homepage.kuis', compact('idKuis', 'pertanyaan'));
    }

    public function store(Request $request, $idKuis, $idPertanyaan)
    {
        
        $inputan = $request->all();
        $inputan['id_user'] = auth()->user()->id_user;
        $inputan['id_pertanyaan'] = $idPertanyaan;
        jawaban::create($inputan);
    }

}
