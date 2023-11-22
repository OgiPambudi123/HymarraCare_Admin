<?php

namespace App\Http\Controllers;

use App\Models\HealthRecord;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showForm()
    {
        $healthRecords = HealthRecord::all();

        return view('upload.form', ['healthRecords' => $healthRecords]);
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');

        // Proses file CSV dan simpan ke database
        $csvData = array_map('str_getcsv', file($file->getPathname()));

        foreach ($csvData as $row) {
            // Mengonversi format tanggal jika diperlukan
            $tgl = date('Y-m-d', strtotime($row[0]));

            // Menggunakan 'id_user' sebagai string (UUID)
            $id_user = $row[1];

            HealthRecord::create([
                'tgl' => $tgl,
                'id_user' => $id_user,
                'penyakit' => $row[2],
                'skincare' => $row[3],
            ]);
        }

        return redirect()->back()->with('success', 'File CSV berhasil diupload');
    }
}
