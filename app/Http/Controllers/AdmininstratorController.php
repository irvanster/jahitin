<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrator;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Hash;
class AdmininstratorController extends Controller
{
    //Auth
    public function login()
    {
        return view('back.login');
    }
    
    public function storeLogin(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return back()
            ->withErrors(['Email atau Password yang Anda masukkan salah']);
        }else{
            return redirect()->route('b.dashboard');
        }
        
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
    public function storeRegister(Request $request)
    {
        $this->validate($request,[
            'nama_depan' => 'required|min:2',
            'nama_belakang' => 'required|min:2',
            'email' => 'required|email|unique:tb_admin',
            'password' => 'required|min:6|confirmed',
            'telepon' => 'required|integer|min:11',
            'level' => 'required',
        ]);
        Administrator::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'nama_lengkap' => $request->nama_depan.' '.$request->nama_belakang,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telepon' => $request->telepon,
            'level' => $request->input('level', false),
        ]);
        return back();
    }

    //endAuth
    public function index()
    {
        $admins = Administrator::orderBy('nama_lengkap','ASC')->paginate(12);
        return view('back.administrator.index', compact('admins'));
    }
    
    public function get_administrator()
    {
        $administrator = Administrator::select(['id','nama_lengkap','email','telepon'])->OrderBy('nama_depan','ASC');
        return datatables()->of($administrator)
        ->addColumn('aksi', function($administrator)
        {
            return '<a href="#"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a> ';
        })
        ->escapeColumns([])
        ->make(true);
    }
}
