<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use DataTables;
use App\Models\products;
use App\Models\Brands;
use Redirect;

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

  
    public function dashboard() // Pagina de nivel de caixa dagua
    {   
        return view('adm.principal');
    }
  

    public function modalCadUsers(Request $request) 
    {
        $brand = DB::table('brands')->get();
        return view('adm.modal.modalCadUsers')->with('brand', $brand);
    }

    public function modalEditUsers(Request $request) 
    {
      //  $brand = DB::table('brands')->get();
        $id = $request->input('id');
        $url="https://fabiorangel.com.br/api_users/api/checkUsers/$id";
        $output=file_get_contents($url);
        $user=json_decode($output);
        return view('adm.modal.modalEditUsers')->with('user', $user);
    }


    public function vue() 
    {
        return view('adm.vue');
    }



    

}
