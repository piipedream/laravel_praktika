<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login(Request $request) {
      if (Auth::check()) {
          return redirect()->to(route('user.private'));
      }

      $formFields = $request->only([
          'email',
          'password'
      ]);

      if(Auth::attempt($formFields)) {
          return redirect()->intended(route('user.private'));
      }

      return redirect()->to(route('user.login'))->withErrors([
          'email' => 'Failed to login'
      ]);
  }
}
