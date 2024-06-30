<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $datas = Datas::all();
        return response()->json($datas);
    }

    public function show($id)
    {
        $data = Datas::find($id);
        return response()->json($data);
    }

    public function create(Request $request)
    {
        $data = new Datas();
        $data->suhu_in = $request->suhu_in;
        $data->suhu_out = $request->suhu_out;
        $data->kelembaban_out = $request->kelembaban_out;
        $data->save();
        return response()->json("Data berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $data = Datas::find($id);

        $data->suhu_in = $request->suhu_in;
        $data->suhu_out = $request->suhu_out;
        $data->kelembaban_out = $request->kelembaban_out;
        $data->save();
        return response()->json("Data berhasil diubah");
    }

    public function delete($id)
    {
        $data = Datas::find($id);
        $data->delete();
        return response()->json("Data berhasil dihapus");
    }
}
