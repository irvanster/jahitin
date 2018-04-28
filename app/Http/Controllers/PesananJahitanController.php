<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PesananJahitan;
use App\ConfirmOrder;
use App\PengukuranBaju;
use App\PengukuranCelana;
use DataTables;
class PesananJahitanController extends Controller
{

    //pesanan
    public function index()
    {
        $lists = PesananJahitan::where('status_pembayaran', 0)
        ->orderBy('tanggal_dipesan','DESC')->paginate(12);
        return view('back.pesananJahitan.index', compact('lists'));
    }
    public function KonfirmasiBayar($id_jahit)
    {
        $update1 = PesananJahitan::findOrFail($id_jahit);
        $update1->status_jahitan = 2;
        $update1->status_pembayaran = 1;
        $update1->update();
        $update2 = ConfirmOrder::findOrFail($id_jahit);
        $update2->tanggal_confir = date('d-m-Y H:i:s');
        $update2->status_confir = 1;
        $update2->update();
        return redirect()->route('b.pesananJahitan.index');
    }
    public function terkonfirmasi()
    {
        $lists = PesananJahitan::where('status_pembayaran', 1)
        ->orderBy('tanggal_dipesan','DESC')->paginate(12);
        return view('back.pesananJahitan.terkonfirmasi', compact('lists'));
    }
    
    public function batalkan($id_jahit)
    {
        PesananJahitan::findOrfail($id_jahit)->update([
            'status_jahitan' => '10',
            'status_pembayaran' => '10'
        ]);
        return back()->with('success', 'Pesanan berhasil dibatalkan');
    }

    public function dibatalkan()
    {
        $lists = PesananJahitan::where('status_jahitan',10)
        ->where('status_pembayaran', 10)->orderBy('tanggal_dipesan','DESC')
        ->paginate(12);
        return view('back.pesananJahitan.dibatalkan', compact('lists'));
    }

    //end pesanan
    
    //proses penjahitan
    public function pengukuran()
    {
        $lists = PesananJahitan::where('status_jahitan', 2)
        ->orderBy('tanggal_dipesan','DESC')->paginate(12);
        return view('back.pesananJahitan.pengukuran', compact('lists'));
    }

    public function storePengukuran(Request $request)
    {
        $id_jahit = $request->id_jahit;
        $tgl = date('d-m-Y H:i:s');
        $l_badan = $request->l_badan;
        $p_lengan = $request->p_lengan;
        $l_kerung = $request->l_kerung;
        $p_bahu = $request->p_bahu;
        $l_pinggang = $request->l_pinggang;
        $l_pinggang2 = $request->l_pinggang2;
        $t_panggul = $request->t_panggul;
        $t_panggul2 = $request->t_panggul2;
        $l_panggul = $request->l_panggul;
        $l_panggul2 = $request->l_panggul2;
        $p_sisi = $request->p_sisi;
        $p_punggung = $request->p_punggung;
        $l_punggung = $request->l_punggung;
        $b_lain = $request->b_lain;
        $p_celana = $request->p_celana;
        $t_duduk= $request->t_duduk;
        $l_pesak = $request->l_pesak;
        $l_paha = $request->l_paha;
        $l_lutut = $request->l_lutut;
        $l_tumit = $request->l_tumit;
        $c_lain = $request->c_lain;
        $status = array(
            'id_jahit'=>$id_jahit,
            'tanggal_status'=>date('d-m-Y H:i:s'),
            'isi_status' => 'Proses Pemotongan Bahan'
        );
        if ($l_badan!="" and $p_celana =="")
        {
            $data = array(
                'id_jahit' => $id_jahit,'tanggal_input' => $tgl,
                'l_badan' => $l_badan,'p_lengan' => $p_lengan,
                'l_kerung' => $l_kerung,'p_bahu' => $p_bahu,
                'l_pinggang' => $l_pinggang,'t_panggul' => $t_panggul,
                'l_panggul' => $l_panggul,'p_sisi' => $p_sisi,
                'p_punggung' => $p_punggung,'l_punggung' => $l_punggung,
                'lain_lain' => $b_lain,
            );
            PengukuranBaju::create($data);
            $update = PesananJahitan::findOrFail($id_jahit);
            if ($update->jenis_jahit == 1) {
                $update->status_jahitan = 4;
                $update->update();
            }else{
                $update->status_jahitan = 3;
                $update->update();
            }
            return back()->with('success','berhasil menginput data!');            
        }elseif ($l_badan=="" and $p_celana !="") 
        {
            $data2 = array(
                'id_jahit' => $id_jahit,'tanggal_input' => $tgl, 
                'p_celana' => $p_celana,'l_pinggang' => $l_pinggang2, 
                't_panggul' => $t_panggul2,'l_panggul' => $l_panggul2, 
                't_duduk' => $t_duduk,'l_pesak' => $l_pesak, 
                'l_paha' => $l_paha,'l_lutut' => $l_lutut, 
                'l_tumit' => $l_tumit,'lain_lain' => $c_lain,
            );
            PengukuranCelana::create($data2);
            $update = PesananJahitan::findOrFail($id_jahit);
            if ($update->jenis_jahit == 1) {
                $update->status_jahitan = 4;
                $update->update();
            }else{
                $update->status_jahitan = 3;
                $update->update();
            }
            return back()->with('success','berhasil menginput data!');            
        }else
        {
            $data = array(
                'id_jahit' => $id_jahit, 'tanggal_input' => $tgl,'l_badan' => $l_badan,
                'p_lengan' => $p_lengan, 'l_kerung' => $l_kerung,
                'p_bahu' => $p_bahu, 'l_pinggang' => $l_pinggang,
                't_panggul' => $t_panggul, 'l_panggul' => $l_panggul,
                'p_sisi' => $p_sisi, 'p_punggung' => $p_punggung,
                'l_punggung' => $l_punggung, 'lain_lain' => $b_lain
            );
            PengukuranBaju::create($data);
            $update = PesananJahitan::findOrFail($id_jahit);
            if ($update->jenis_jahit == 1) {
                $update->status_jahitan = 4;
                $update->update();
            }else{
                $update->status_jahitan = 3;
                $update->update();
            }
            $data2 = array(
                'id_jahit' => $id_jahit,'tanggal_input' => $tgl, 'p_celana' => $p_celana,
                'l_pinggang' => $l_pinggang2, 't_panggul' => $t_panggul2,
                'l_panggul' => $l_panggul2, 't_duduk' => $t_duduk,
                'l_pesak' => $l_pesak, 'l_paha' => $l_paha,
                'l_lutut' => $l_lutut, 'l_tumit' => $l_tumit,
                'lain_lain' => $c_lain
            );
            PengukuranCelana::create($data2);
            return back()->with('success','berhasil menginput data!');
        }
    }
    
    public function PostsJahitan()
    {
        //SELECT * FROM `tb_jahit` WHERE `jenis_jahit` != 1 AND `status_jahitan` = 3
        $lists = PesananJahitan::where('jenis_jahit', '!=' ,1)->where('status_jahitan', 3)
        ->orderBy('tanggal_dipesan','DESC')->paginate(12);
        return view('back.pesananJahitan.postsJahitan', compact('lists'));
    }

    public function diproses()
    {
        $lists = PesananJahitan::where('status_jahitan', 4)
        ->orderBy('tanggal_dipesan','DESC')->paginate(12);
        return view('back.pesananJahitan.pengukuran', compact('lists'));
    }
    
    //end proses penjahitan
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    function get_jahitan()
    {
        $jahitan = PesananJahitan::all();
        return datatables()->of($jahitan)
        ->addColumn('aksi', function($jahitan)
        {
            return (['
                <a href="#"><button class="btn btn-success"><i class="fa fa-check"></i></button></a> <a href="#"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
            ']);
        })
        ->escapeColumns([])
        ->make(true);
    }
}
