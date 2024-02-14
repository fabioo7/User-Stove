<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use DataTables;

class dataTableController extends Controller
{
    



public function users(Request $request) //clientes
{  

        $total_users = DB::table('users')->count();

    if ($request->ajax()) {
        
        $data = DB::table('users');
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $id =  $row->id;
                       $btn = "<a href=\"#\" id=\"btnEdit\"   data-id=\"$id\"  class=\"edit btn btn-primary btn-sm\">Editar</a>";
                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
    
    return view('adm.users')->with('total_products', $total_users)->with('total_brands', $total_users)->with('total_users', $total_users);
}


public function brands(Request $request) //clientes
{  

    if ($request->ajax()) {
        //$data = User::select('*');
        $data = DB::table('brands');
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
 
                       $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
    
    return view('adm.brands');
}



}




