<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjahit;
use App\PesanPenjahit;
use Hash;
use File;
class PenjahitController extends Controller
{
    public function index()
    {
        $lists = Penjahit::orderBy('nama_penjahit')->paginate(12);
        return view('back.penjahit.index', compact('lists'));
    }
    public function storePenjahit(Request $request)
    {
        $this->validate($request,[
            'nama_penjahit' => 'required|min:3',
            'identitas_penjahit' => 'required|min:5',
            'alamat_penjahit' => 'required',
            'foto_penjahit' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email_penjahit' => 'required|email|unique:tb_penjahit',
            'telepon_penjahit' => 'required|min:11',
            'password_penjahit' => 'required|min:6|confirmed',
        ]);
        $new = new Penjahit();
        $new->id_penjahit = "P".date("dmYHis");
        $new->nama_penjahit = $request->nama_penjahit;
        $new->identitas_penjahit = $request->identitas_penjahit;
        $new->alamat_penjahit = $request->alamat_penjahit;

        if ($request->hasFile('foto_penjahit')) {
            $fileName = str_limit(str_slug($request->nama_penjahit),20).'.'.
            date('d-m-y_H:i:s').'.'.$request->foto_penjahit->getClientOriginalExtension();
            $request->foto_penjahit->move(public_path('data/foto_penjahit/'), $fileName);
            $new->foto_penjahit = $fileName;
        }

        $new->email_penjahit = $request->email_penjahit;
        $new->password_penjahit = md5($request->password);
        $new->telepon_penjahit = $request->telepon_penjahit;
        $new->status_penjahit = 1;
        $new->nilai_penjahit = 0;
        $new->jml_jahit_selesai = 0;
        
        $new->save();
        return back()->with('success','Berhasil Menambahkan Penjahit Baru!');
    }

    public function updatePenjahit(Request $request, $id_penjahit)
    {
        $this->validate($request,[
            'nama_penjahit' => 'required|min:3',
            'identitas_penjahit' => 'required|min:5',
            'alamat_penjahit' => 'required',
            'foto_penjahit' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email_penjahit' => 'required|email',
            'telepon_penjahit' => 'required|min:11',
            'password_penjahit' => 'confirmed',
        ]);
        $edit = Penjahit::findOrfail($id_penjahit);
        $edit->nama_penjahit = $request->nama_penjahit;
        $edit->identitas_penjahit = $request->identitas_penjahit;
        $edit->alamat_penjahit = $request->alamat_penjahit;

        if ($request->hasFile('foto_penjahit')) {
            File::delete('data/foto_penjahit/'.$edit->foto_penjahit);
            $fileName = str_limit(str_slug($request->nama_penjahit),20).'.'.
            date('d-m-y_H:i:s').'.'.$request->foto_penjahit->getClientOriginalExtension();
            $request->foto_penjahit->move(public_path('data/foto_penjahit/'), $fileName);
            $edit->foto_penjahit = $fileName;
        }else{
            $edit->foto_penjahit = $edit->foto_penjahit;
        }

        $edit->email_penjahit = $request->email_penjahit;
        $edit->password_penjahit = md5($request->password);
        $edit->telepon_penjahit = $request->telepon_penjahit;
        $edit->status_penjahit = 1;
        $edit->nilai_penjahit = 0;
        $edit->jml_jahit_selesai = 0;
        
        $edit->update();
        return back()->with('success',  $edit->nama_penjahit.', Berhasil diperbarui!');
    }
    public function konfirmasi($id_penjahit)
    {
        $penjahit = Penjahit::findOrfail($id_penjahit);
        $penjahit->status_penjahit = 1;
        $penjahit->update();
        return back()->with('success', $penjahit->nama_penjahit.', Berhasil Dikonfirmasi!');
    }

    public function pesanPenjahit()
    {
        $lists = PesanPenjahit::where('status_psn', 1)->orderBy('id_psn_penjahit', 'DESC')->paginate(12);
        return view('back.penjahit.pesan', compact('lists'));
    }
}
