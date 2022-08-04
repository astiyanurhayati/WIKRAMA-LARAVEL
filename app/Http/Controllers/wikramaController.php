<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wikramaController extends Controller
{
    public function home(){
       return view('home',[
        'title' => 'HOME'
       ]);
    }

    public function eskul(){
        return view('eskul',[
            'title'=>'EKSTRAKULIKULER'
        ]);
    }

    public function sejarah(){
        return view('sejarah',[
            'title'=>'SEJARAH'
        ]);
    }

    public function kerjasama(){
        return view('kerjasama',[
            'title'=>'KERJASAMA'
        ]);
    }

    
    public function testimoni(){
        return view('testimoni',[
            'title'=>'TESTIMONIAL'
        ]);
    }


    public function jurusan(){
        return view('jurusan',[
            'title'=>'JURUSAN'
        ]);
    }

    public function fasilitas(){
        return view('fasilitas',[
            'title'=>'Fasilitas'
        ]);
    }
    
    public function contact(){
        return view('contact',[
            'title'=>'Contact Us'
        ]);
    }
}
