<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\jawaban;
use App\Models\pertanyaan;
use App\Models\tambahKuis;
use App\Models\User;
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


    public function pertanyaan($idKuis, $idPertanyaan) {
        $pertanyaan = pertanyaan::where('id_tambahKuis', $idKuis)->find($idPertanyaan);

        return view('homepage.kuis', compact('idKuis', 'pertanyaan'));
    }



    public function store(Request $request, $idKuis, $idPertanyaan) {
        $user = auth()->user()->id_user;
        $pertanyaan = pertanyaan::find($idPertanyaan);

        $inputan['id_user'] = $user;
        $inputan['id_pertanyaan'] = $pertanyaan->id_pertanyaan;
        $inputan['jawaban'] = $request->answer;
        $inputan['correct'] = $pertanyaan->correct == $request->answer ? 'ya' : 'tidak';
        jawaban::create($inputan);

        $pertanyaanSelanjutnya = pertanyaan::where('id_tambahKuis', $idKuis)
                                           ->where('id_pertanyaan', '>', $idPertanyaan)
                                           ->first();

        if($pertanyaanSelanjutnya) {
            return redirect()->route('kuis.pertanyaan', ['idKuis' => $idKuis, 'idPertanyaan' => $pertanyaanSelanjutnya->id_pertanyaan]);
        } else{
            return redirect()->route('kuis.berhasil', $idKuis);
        }
    }



    // public function berhasil($idKuis) {
    //     $kuis = tambahKuis::find($idKuis);
    //     $user = auth()->user()->id_user;

    //     $answer = jawaban::where('id_user', $user)->whereHas('pertanyaan', function ($q) use ($idKuis){
    //         $q->where('id_tambahKuis', $idKuis);
    //     })->get();

    //     $score = $answer->filter(function($answer) {
    //         return $answer->correct == 'ya';
    //     })->count();

    //     return view('homepage.berhasil', compact('kuis', 'score'));


    // }
    
    public function berhasil($idKuis){
        $kuis = tambahKuis::find($idKuis);
        $user = auth()->user()->id_user;
        $answer = jawaban::where('id_user', $user)->whereHas('pertanyaan', function($query) use ($idKuis) {
            $query->where('id_tambahKuis', $idKuis);
        })->get();

        $score = $answer->filter(function($answer) {
            return $answer->correct == 'ya';
        })->count();

        return view('homepage.berhasil', compact('kuis', 'score'));
    }




}
