<?php

namespace App\Http\Controllers;

use App\Models\Prediction;
use App\Models\SupporterView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SupporterController extends Controller
{
    //
    public function save(Request $request)
    {
        // dd($request);
        $request->validate([
            'comment' => 'required',
            'achievement' => 'required',
        ]);
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
            'achievement' => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        foreach( $request->state_id as $index => $state_id ) {
            $values[$index] = [
                'state_id' => $state_id,
                'user_prediction' => $request->user_prediction[$index],
            ];
         }

         Auth::user()->predictions()->createMany($values);
         Auth::user()->supporterview()->create([
            'comment' => $request->comment,
            'achievement' => $request->achievement,
         ]);

         Alert::success('Success Title', 'Success Message');
         return back();
    }
}
