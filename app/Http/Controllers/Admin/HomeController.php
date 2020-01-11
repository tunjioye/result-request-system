<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateAdminProfile;
use App\Http\Requests\ChangeUserPassword;
use Redirect;
use Illuminate\Hashing\BcryptHasher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * profile
     *
     * @return void
     */
    public function profile()
    {
        return view('admin.profile');
    }

    /**
     * update_profile
     *
     * @param UpdateAdminProfile $request
     * @return void
     */
    public function update_profile(UpdateAdminProfile $request)
    {
        Auth::user()->update($request->all());

        session()->flash('success', 'Profile SUCCESSFULLY updated!');
        return redirect()->back();
    }

    /**
     * change_password
     *
     * @param ChangeUserPassword $request
     * @return void
     */
    public function change_password(ChangeUserPassword $request)
    {
        $bcrypt = new BcryptHasher;

        if ($bcrypt->check($request->current_password, Auth::user()->password)) {
            Auth::user()->password = bcrypt($request->new_password);
            Auth::user()->save();

            session()->flash('success', 'Password SUCCESSFULLY Changed!');
            return redirect()->back();
        } else {
            return redirect()->back()->withErrors([
                'current_password' => 'Current Password entered is incorrect, PASSWORD UNCHANGED!'
            ])->withInput();
        }
    }
}
