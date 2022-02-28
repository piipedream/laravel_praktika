<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createRequestRequest;
use App\Models\createRequest;
use App\Models\ApplicationType;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\ErrorHandler\Debug;
use Illuminate\Support\Facades\Log;

class createRequestController extends Controller
{
    public function submit(createRequestRequest $req){
      $createRequest = new createRequest();
      $createRequest->user_id = Auth::id();
      $createRequest->login = $req->input('login');
      $createRequest->address = $req->input('address');
      $createRequest->message = $req->input('message');
      $createRequest->price = $req->input('price');
      if($req->file('Image') != null) {
        $createRequest->image = substr($req->file('Image')->store('public/image') , 13);
      }
      $createRequest->save();

      return redirect()->route('user.private')->with('success', 'Сообщение было добавлено');
    }

    public function allData(){
      $this->authorize('admin');
      $createRequest = new createRequest;
      return view('requests', ['data' => createRequest::all()]);
    }

    public function messagesByUser() {
        $createRequest = new createRequest;
        $data = [];
        $user_id = Auth::user()->id;
        $data = $createRequest->where('user_id', '=', $user_id)->get();

        return view('private', ['data' => $data ]);
    }

    public function showOneMessage($id){
      $createRequest = new createRequest;
      return view('one_request', ['data' => $createRequest->find($id)]);
    }

    public function deleteMessage($id){
      createRequest::find($id)->delete();
      return redirect()->route('request_data')->with('success', 'Сообщение было удалено');
    }

}
