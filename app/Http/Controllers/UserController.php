<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('dashboard.user.index',compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        try {

        $request->validate([
            'name' =>'required', 'string', 'max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        toastr()->success(__('site.added_successfully'));  
        
        return back();          
            
        } catch (Exception $e) {
            return response()->json(['errors' => $ex->getMessage()]);
        }
    }


    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required', 'string', 'max:100',
            'email' => 'required|string|email|max:255|unique:users,id,'.$id,
            'new_password' => 'required|min:8',
            'old_password' => 'required',
        ]);

        if ($request->new_password == "" || $request->old_password == "" || $request->email == "" || $request->name == "") {

            toastr()->error(__('site.not_found'));
       
            return redirect()->route('profile.index');

        }else {
            
            $users = User::find($id);
     
            $hashedPassword = $users->password;
            if (\Hash::check($request->old_password , $hashedPassword)) {
                if (\Hash::check($request->new_password , $hashedPassword)) {
     
                    $users = User::find($id);
                    $users->password = bcrypt($request->new_password);
                    $users->name = $request->name;
                    $users->email = $request->email;
                    $users->save();

                    toastr()->info(__('site.updated_successfully'));
       
                    return back();
                }
                else{

                    toastr()->warning(('لا يمكن أن تكون كلمة المرور الجديدة هي كلمة المرور القديمة!'));
       
                    return back();
                } 
            }
            else{

                toastr()->warning(('كلمة المرور القديمة غير متطابقة'));
       
                return back();
            }

        }
    }

    public function destroy(User $user)
    {
        try {         


            if (!$user) {

                toastr()->error(__('site.error'));
           
                 return back();
            }

            $user->delete();

            toastr()->info(__('site.deleted_successfully'));
       
            return back();

        } catch (\Exception $ex) {

            return response()->json(['errors' => $ex->getMessage()]);
        }
    }
}
