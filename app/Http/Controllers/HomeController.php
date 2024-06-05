<?php

namespace App\Http\Controllers;

use App\Models\hasil_harapan;
use App\Models\hasil_persepsi;
use App\Models\jawaban_harapan;
use App\Models\jawaban_persepsi;
use App\Models\pertanyaan;
use App\Models\responden;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function index(){
        $data = responden::get();

        return view('index',compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'id_responden' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'pekerjaan' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['id_responden'] = $request->id_responden;
        $data['nama'] = $request->nama;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['umur'] = $request->umur;
        $data['pekerjaan'] = $request->pekerjaan;
        $data['email'] = $request->email;

        responden::create($data);

        return redirect()->route('index');
    }

    public function edit(Request $request,$id){
        $data = responden::find($id);

        return view('edit', compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'id_responden' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'pekerjaan' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['id_responden'] = $request->id_responden;
        $data['nama'] = $request->nama;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['umur'] = $request->umur;
        $data['pekerjaan'] = $request->pekerjaan;
        $data['email'] = $request->email;

        responden::whereId($id)->update($data);

        return redirect()->route('index');
    }

    public function delete(Request $request,$id){
        $data = responden::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('index');
    }

    public function pertanyaan(){
        $data = pertanyaan::get();

        return view('pertanyaan',compact('data'));
    }

    public function persepsi(){
        $data = jawaban_persepsi::get();
        $datapersepsi = hasil_persepsi::get();

        return view('persepsi',compact('data','datapersepsi'));
    }

    public function harapan(){
        $data = jawaban_harapan::get();
        $dataharapan = hasil_harapan::get();

        return view('harapan',compact('data','dataharapan'));
    }

    public function ujivaliditas(){
        return view('validitas');
    }

    public function ujireliabilitas(){
        return view('reliabilitas');
    }

    public function servqual(){
        $data = pertanyaan::get();
        $pers = jawaban_persepsi::get();
        $har = jawaban_harapan::get();
        return view('servqual',compact('data','pers','har'));
    }
}
