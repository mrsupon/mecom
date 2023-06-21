<?php

namespace App\Http\Controllers\Dashboards\Vendor;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseClass
{
    public function editProfile()
    {
        $id = Auth::user()->id ;
        $user = User::find($id);
        return view('dashboards.vendor.profile.edit', compact('user') );
    }
    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->phone = $request->phone ;
        $data->address = $request->address ;
        $data->vendor_join = $request->vendor_join ;
        $data->vendor_short_info = $request->vendor_short_info ;

        if($request->file('photo'))
        {
            $file = $request->file('photo');
            @unlink(public_path('dashboards/assets/vendor/profile/images/'.$data->photo));
            $filename = date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('dashboards/assets/vendor/profile/images/'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $toastr = array(
            "message"=>"Vendor Profile Updated Successfully",
            "alertType"=>"success"
        );

        return redirect()->back()->with($toastr) ;
    }
    public function editPassword()
    {
        return view('dashboards.vendor.password.edit' );
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password'=>'required',
            'password'=>'required|confirmed'
        ]);
        if(!Hash::check($request->current_password, auth::user()->password) )
        {
            return back()->with("error","Current Password Doesn't Match!");
        }
        User::whereId(auth()->user()->id)->update([
            'password'=>Hash::make($request->password)
        ]);

        return back()->with('status','Password Changed Successfully') ;
    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('dashboards.login');
    }
}
