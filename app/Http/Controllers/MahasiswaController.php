<?php

namespace App\Http\Controllers;

use App\Mahasiswa as Obj;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    private $title = "Mahasiswa";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = Obj::paginate(10);
        $no = 1;
        $title = $this->title;
        $page = "Data Mahasiswa";
        return view('Mahasiswa/index',compact('data','no','title','page'));





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = $this->title;
        $page = "Tambah Data Mahasiswa";
        return view('Mahasiswa/create',compact('page','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->except(['_token']);
        $save = Obj::create($data);

        if ($save) {
            $request->session()->flash('success','Data Berhasil Disimpan');
        }
        else{
            $request->session()->flash('status','Data Gagal Disimpan');   
        }

        return redirect('/Mahasiswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Obj $obj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($param,Obj $obj)
    {
        //

        $id = explode('-',$param)[1];
        $title = $this->title;
        // print_r($obj);

        $page = "Edit Data Mahasiswa";
        $obj = $obj->find($id);
        return view('Mahasiswa/edit',compact('obj','title','page','param'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update($param,Request $request, Obj $obj)
    {
        //

        $id = explode('-',$param)[1];

        //
        $data = $request->except(['_token']);

        $update = $obj->find($id)->update($data);

        if ($update) {
            $request->session()->flash('success','Data Berhasil Diubah');
        }
        else{
            $request->session()->flash('status','Data Gagal Diubah');   
        }

        return redirect('/Mahasiswa');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Obj $obj,Request $request)
    {
        //
        $delete = $obj->find($id)->delete();


        if ($delete) {
            $request->session()->flash('success','Data Berhasil Dihapus');
        }
        else{
            $request->session()->flash('status','Data Gagal Diubah');   
        }

        return redirect()->back();
    }
}
