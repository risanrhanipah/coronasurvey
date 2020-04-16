<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Survey;

class SurveyController extends Controller
{
    public function index()
    {
        session_start();
        return view('survey.index');
        
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $yes = 0;
        
        Session::put('yes', $yes);

        Session::put(
            'name', $name
        );

        return redirect('/question');
    }

    function question(Request $request)
    {
        $nomor = Session::get('nmr');
        $jmlSoal = 20;
        $question = [
            '',
            'Saya pergi keluar rumah',
            'Saya menggunakan transportasi umum',
            'Saya idak pakai masker saat berkumpul dengan orang lain',
            'Saya berjabat tangan dengan orang lain',
            'Saya tidak membersihkan tangan sebelum pegang kemudi kendaraan',
            'Saya menyentuh benda yang di sentuh orang lain',
            'Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika melakukan kegiatan diluar rumah',
            'Saya makan diluar rumah (warung/restaurant)',
            'Saya tidak minum air hangat, dan mencuci tangan dengan sabun setelah sampai di tujuan',
            'Saya berada di wilayah tempat pasien tertular',
            'Saya pasang hand sanitizer atau pencuci tangan di depan rumah',
            'Saya tidak mencuci tangan dengan sabun saat sampai rumah',
            'Saya tidak menyediakan tissue basah/antiseptik, handsanitizer, masker, dll untuk keluarga dirumah',
            'Saya tidak segera merendam pakaian bekas pakai dengan air hangat',
            'Saya tidak segera mandi setelah sampai dirumah',
            'Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga dirumah',
            'Saya dalam sehari tidak kena cahaya matahari 15 menit',
            'Saya tidak olahraga minimal 30 menit sehari',
            'Saya jarang minum vitamin C & E, dan kurang tidur',
            'Usia saya diatas 60 tahun',
            'Saya mempunyai penyakit jantung/diabetes/gangguan pernafasan kronis'
        ];

        if ($nomor >= $jmlSoal) {
            return view('/selesai');
        }

        // $soal = array_values($nmr);

        
        return view('survey.question',['nomor'=>$nomor, 'jmlSoal'=>$jmlSoal]);
    }

    public function answer(Request $request)
    {
        $yes = Session::get('yes');
        $nmr = 1;
        $nmr++;
        Session::put('nmr', $nmr);

        $jawaban = $request->surv;
        if ($jawaban == 'ya') {
            $yes++;
        }
        return redirect('/question');
    }

    public function selesai()
    {
        $nama = Session::get('nama');
        $surv = Session::get('yes');

        if ($surv >= 15) {
            $msg = "Resiko Tinggi";
        }elseif ($surv >= 8) {
            $msg = "Resiko Sedang"; 
        }elseif ($surv <= 7) {
            $msd = "Resiko Rendah";
        }

        return view('survey.selesai');
    }
}
