<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class UserController extends Controller
{
    public function subscribe(Request $request){
        $this->validate($request,[
            'email' => 'required|bail|unique:subscribers'
        ]);

        $email = $request->input('email');

        $subscriber = new Subscriber();

        $subscriber->email = $email;

        $subscriber->save();
        return response()->json([
            'status'=>'success',
            'message' => 'Successfully subscribed',
            'subscriber' => $subscriber,
        ], 201);
    }

    public function unSubscribe(Request $request){
        $id = $request->input("id");
        $subscriber = Subscriber::find($id);

        $subscriber->delete();

        return view('unsubscribe');
        // return response()->json([
        //     'status'=>'success',
        //     'message' => 'Successfully unsubscribed',
        // ], 200);
    }
}
