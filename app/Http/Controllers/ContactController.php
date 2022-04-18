<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }

    public function store(Request $request){
        //dd($request->all());
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|max:80|email:rfc,dns',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'nullable|max:500',
            'g-recaptcha-response' => 'required',
        ];
        $messages = [
            'g-recaptcha-response.required' => 'Robot verification is required!',
        ];
        $this->validate($request, $rules, $messages);
        $data=array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => date("Y-m-d")." ".date("h:i:s")
        );
        $result=DB::table('contact')->insert($data);
        if ($result){
            return redirect()->back()->with('success', 'Thank you. I will get back to you soon.');
        }else{
            return redirect()->back()->with('error', 'Oops! Something went wrong');
        }
    }

    public function view(){
        $data=DB::table('contact')->paginate(2);
        return view('admin.contact', compact('data'));
    }

    public function destroy(Request $request){
        // $data=array(
        //     'deleted_at' => date("Y-m-d")." ".date("h:i:s")
        // );
        $result = DB::table('contact')->where('id', '=', $request->id)->delete();
        if ($result){
            return response()->json([
                'success' => 'Query deleted successfully!'
            ]);
        }else{
            return response()->json([
                'error' => 'Something went wrong!'
            ]);
        }
    }
}
