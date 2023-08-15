<?php

namespace App\Http\Controllers;

use App\Models\JenisForm;
use Illuminate\Http\Request;

class JenisFormController extends Controller
{
    public function index(){
        $jenis_forms = JenisForm::where('status', 1)->paginate(10);
        return view('pages.jenis-forms.index', compact(
            'jenis_forms',
        ));
    }

    public function create(){
        return view('pages.jenis-forms.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_form' => 'required',
        ]);

        $array = array(
            'nama_form' => $request['nama_form'],
        );
        
        $jenis_form = JenisForm::create($array);

        return redirect()->route('superadmin.jenis-form.index');
    }

    public function show($id){
        $jenis_form = JenisForm::find($id);
        return view('pages.jenis-forms.show', compact(
            'jenis_form',
        ));
    }

    public function edit($id){
        $jenis_form = JenisForm::find($id);
        return view('pages.jenis-forms.edit', compact(
            'jenis_form',
        ));
    }

    public function update(Request $request, $id){
        $jenis_form = JenisForm::find($id);

        $request->validate([
            'nama_form' => 'required',
        ]);

        $jenis_form->update([
            'nama_form' => $request['nama_form'],
        ]);
        
        return redirect()->route('superadmin.jenis-form.index');
    }

    public function destroy($id){
        $jenis_form = JenisForm::find($id);

        $jenis_form->update([
            'status' => 2,
        ]);
        
        return redirect()->route('superadmin.jenis-form.index');
    }
}
