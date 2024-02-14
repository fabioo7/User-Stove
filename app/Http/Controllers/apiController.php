<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Redirect;

class apiController extends Controller
{


    public function users() //Listagem
    {
        return response(DB::table('users')->get(), 200);
    }



    public function checkUsers($id) //
    {
        return response(User::where('id', $id)->get(), 200);
    }



    public function insertUsers(Request $request) //Insert
    {

        $origin  = $request->input('origin');

        $insertUser = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'city' => $request->input('city')
        ]);

        if ($insertUser) {
            if ($origin != 'site') {
                return http_response_code(200);
            } else {
                return Redirect::to("users");
            }
        }
    }


    public function updateUsers(Request $request) //atualiza
    {
        $origin  = $request->input('origin');

        $updateUser = User::where('id', '=', $request->input('id'))->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'city' => $request->input('city')
        ]);

        if ($updateUser) {
            if ($origin != 'site') {
                return http_response_code(200);
            } else {
                return back()->with('mensagem', 'Produto Cadastrado com sucesso!');
            }
        }
    }


    public function delUsers(Request $request) //deleta

    {
        $id = $request['id'];
        $origin = $request->input('origin');
        $del = User::where('id', '=', $id)->delete();

        if ($del) {
            if ($origin != 'site') {
                return http_response_code(200);
            } else {
                return Redirect::to("Users");
            }
        }
    }
}
