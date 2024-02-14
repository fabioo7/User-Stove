<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use DataTables;
use Redirect;
use Helper;
class usersController extends Controller
{
    
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////Filtro de Logar/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function __construct()
{
    $this->middleware('auth');
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  


    public function modalCadUsers(Request $request) 
    {
        $city = DB::table('city')
        ->join('state', 'city.state_id', '=', 'state.id')
        ->select('city.*', 'city.name as city_name','state.name AS state_name')
        ->get();        
        return view('adm.modal.modalCadUsers')
        ->with('city', $city);
    }

    public function modalEditUsers(Request $request) 
    {
      //  $brand = DB::table('brands')->get();
        $id = $request->input('id');

        $city = DB::table('city')
        ->join('state', 'city.state_id', '=', 'state.id')
        ->select('city.*', 'city.name as city_name','state.name AS state_name')
        ->get();

        $url="https://fabiorangel.com.br/api_users/api/checkUsers/$id";
        $output=file_get_contents($url);
        $user=json_decode($output);
        return view('adm.modal.modalEditUsers')->with('user', $user)
        ->with('city', $city);
        ;
    }


    public function vue() 
    {
        return view('adm.vue');
    }



    

}
