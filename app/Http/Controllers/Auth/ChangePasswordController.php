<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
     /*
    Redirects to change password page if the
    has not yet changed the default password
   */
  public function index()
  {
      return view('auth.change-password');
  }

  public function changePassword(Request $request)
  {
      $request->validate([
          'password' => 'string|confirmed'
      ]);

      $user=$request->user();
      $user->is_password_default=false;
      $user->password=Hash::make($request->password);
      $user->save();

      return redirect()->route('dashboard');
  }


}
