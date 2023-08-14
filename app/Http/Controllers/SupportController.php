<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){
        $supports = $support->all();
        return view('admin/supports/index', compact('supports'));
    }

    public function insertSupport(Request $request){
        $arrWithData = [
            'subject' => $request->subject,
            'body' => $request->body,
            'status' => 'a'
        ];
        Support::create($arrWithData);
        return redirect('/supports')->with('success', 'Cadastrado com sucesso');
    }


    public function show(string|int $id){
        $support = Support::find($id);
        if($support == null){
            return back();
        }
        return view('admin/supports/show', ['support' => $support]);
    }

    public function edit(Support $support, string|id $id){
        if(!$support = Support::where('id', $id)->first()){
            return back();
        }
        return view('admin/supports.edit', ['support' => $support]);
    }


}
