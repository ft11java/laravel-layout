<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeModel;

class Employe extends Controller
{
    public function getAllEmploye(){
        $employes=EmployeModel::query()->get();
        return view('employe',compact('employes'));
    }

   public function createEmploye(){
        $employe=new EmployeModel;
        $employe->name='taner';
        $employe->lastname='şentürk';
        $employe->telefon='05542622565';
        $employe->email='bilisim';
        $employe->bilgi='öğretmen';
        $employe->save();
        return('veri kaydedildi');
    }
    
/*
    public function createEmploye(){
        Employe::create([
            'name'=>'taner',
            'lastname'=>'şentürk',
            'telefon'=>'05542622565',
            'email'=>'bilisim',
            'bilgi'=>'öğretmen'
        ]);
       
        
        
    }
   */
}
