<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_model1;
use App\Models\data_model2;
use App\Exports\ClientExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index1()
    {
        $data = data_model1::all();
        return view('data-kecelakaan1',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $data2 = data_model2::all();
        return view('data-kecelakaan2',['data2' => $data2]);
    }

    
    public function acc(Request $request)
    {

       

        $request->validate([
          'email' => 'required|email',
          'nama_peserta' => 'required',
          'setatus' => 'required',
          
        ]);

        $data = [
          
          
          'subject' => $request->nama_peserta,
          'email' => $request->email,
          'content' => $request->setatus
        ];

        Mail::send('email-acc', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });



       return back()->with('success', 'Berhasil Di Acc ');  


    }

    public function tolak(Request $request, $id)
    {
    
     
    $request->validate([
          'email' => 'required|email',
          'nama_peserta' => 'required',
          'setatus' => 'required',
          
        ]);
         
        $data = [
          
          
          'subject' => $request->nama_peserta,
          'email' => $request->email,
          'content' => $request->setatus
        ];

        Mail::send('email-tolak', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

       return back()->with('success', 'Berhasil Di Tolak '); 
   

       


    }
    public function isOnline($site = "https://youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        }else{
            return false;
        }
    }
    
    public function show1($id)
    {
       $hapus = data_model1::find($id);
       $file = public_path('/poto/').$hapus->unggah_poto;

       if (file_exists($file)) {
            unlink($file);
        } 

        $hapus->delete();
        return back()->with('success', 'Data Berhasil Di Hapus');
    }

     public function show2($id)
    {
      $hapus = data_model2::find($id);
       $file = public_path('/file_bpjs/').$hapus->file_bpjs;

       if (file_exists($file)) {
            unlink($file);
        } 

        $hapus->delete();
        return back()->with('success', 'Data Berhasil Di Hapus');
    }

    
    public function export_excel()
    {
        return Excel::download(new ClientExport, 'dataclient.xlsx');
    }

   
   
}
