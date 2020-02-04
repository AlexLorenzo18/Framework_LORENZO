<?php

namespace App\Http\Controllers;

use App\User;
use App\Competence;
use Illuminate\Http\Request;
use DB;
use Auth;

class UsersController extends Controller
{

  public function afficher()
  {

  $users = auth()->user();

    return view('users', [
    'users' => $users, 
    ]);

  }

  public function btn_comp()
    {
      $competences = Competence::all();
      return view('comp', [
        'competences' => $competences,
       ]);
        
    }
  public  function update(Request $req)
    {
        DB::table('competence_user')->where('user_id', Auth::user()->id)->where('competence_id', $req->id)->update(['level' => $req->level ]);
        return redirect()->route('current_users');
    }
    public  function delete(Request $req)
    {
        DB::table('competence_user')->where('user_id', Auth::user()->id)->where('competence_id', $req->id)->delete();
        return redirect()->route('current_users');
    }
}