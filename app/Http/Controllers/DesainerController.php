<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desainer;
use App\PesanDesainer;
class DesainerController extends Controller
{
    public function index()
    {
        $lists = Desainer::orderBy('nama_desainer')->paginate(12);
        return view('back.desainer.index', compact('lists'));
    }
    public function storeDesainer(Request $request)
    {
        $this->validate($request,[
            'nama_desainer' => 'required|min:3',
            'identitas_desainer' => 'required|min:5',
            'alamat_desainer' => 'required',
            'foto_desainer' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email_desainer' => 'required|email|unique:tb_desainer',
            'telepon_desainer' => 'required|min:11',
            'password_desainer' => 'required|min:6|confirmed',
        ]);
        $new = new Desainer();
        $new->id_desainer = "P".date("dmYHis");
        $new->nama_desainer = $request->nama_desainer;
        $new->identitas_desainer = $request->identitas_desainer;
        $new->alamat_desainer = $request->alamat_desainer;

        if ($request->hasFile('foto_desainer')) {
            $fileName = str_limit(str_slug($request->nama_desainer),20).'.'.
            date('d-m-y_H:i:s').'.'.$request->foto_desainer->getClientOriginalExtension();
            $request->foto_desainer->move(public_path('data/foto_desainer/'), $fileName);
            $new->foto_desainer = $fileName;
        }

        $new->email_desainer = $request->email_desainer;
        $new->password_desainer = md5($request->password);
        $new->telepon_desainer = $request->telepon_desainer;
        $new->status_desainer = 1;
        $new->nilai_desainer = 0;
        $new->jml_dsn_selesai = 0;
        
        $new->save();
        return back()->with('success','Berhasil Menambahkan desainer Baru!');
    }

    public function updateDesainer(Request $request, $id_desainer)
    {
        $this->validate($request,[
            'nama_desainer' => 'required|min:3',
            'identitas_desainer' => 'required|min:5',
            'alamat_desainer' => 'required',
            'foto_desainer' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email_desainer' => 'required|email',
            'telepon_desainer' => 'required|min:11',
            'password_desainer' => 'confirmed',
        ]);
        $edit = Desainer::findOrfail($id_desainer);
        $edit->nama_desainer = $request->nama_desainer;
        $edit->identitas_desainer = $request->identitas_desainer;
        $edit->alamat_desainer = $request->alamat_desainer;

        if ($request->hasFile('foto_desainer')) {
            File::delete('data/foto_desainer/'.$edit->foto_desainer);
            $fileName = str_limit(str_slug($request->nama_desainer),20).'.'.
            date('d-m-y_H:i:s').'.'.$request->foto_desainer->getClientOriginalExtension();
            $request->foto_desainer->move(public_path('data/foto_desainer/'), $fileName);
            $edit->foto_desainer = $fileName;
        }else{
            $edit->foto_desainer = $edit->foto_desainer;
        }

        $edit->email_desainer = $request->email_desainer;
        $edit->password_desainer = md5($request->password);
        $edit->telepon_desainer = $request->telepon_desainer;
        $edit->status_desainer = 1;
        $edit->nilai_desainer = 0;
        $edit->jml_dsn_selesai = 0;
        
        $edit->update();
        return back()->with('success',  $edit->nama_desainer.', Berhasil diperbarui!');
    }
    public function konfirmasi($id_desainer)
    {
        $desainer = Desainer::findOrfail($id_desainer);
        $desainer->status_desainer = 1;
        $desainer->update();
        return back()->with('success', $desainer->nama_desainer.', Berhasil Dikonfirmasi!');
    }

    public function pesanDesainer()
    {
        $lists = PesanDesainer::where('status_psn', 1)->orderBy('id_psn_desainer', 'DESC')->paginate(12);
        return view('back.desainer.pesan', compact('lists'));
    }
}
