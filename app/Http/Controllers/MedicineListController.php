<?php

// File: app/Http/Controllers/MedicineListController.php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineListController extends Controller
{
    public function index(Request $request)
    {
        $medicines = Medicine::query()
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('nama_obat', 'like', '%' . $request->input('search') . '%');
            })
            ->when($request->filled('filter'), function ($query) use ($request) {
                $query->where('status', $request->input('filter'));
            })
            ->get();

        return view('auth.medicinelist.index', compact('medicines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string',
            'deskripsi' => 'required|string',
            'tipe_obat' => 'required|in:keras,biasa',
            'stok' => 'required|integer',
        ]);

        $input = $request->all();
        // dd($input);
        Medicine::create([
            'nama_obat' => $input['nama_obat'],
            'deskripsi' => $input['deskripsi'],
            'tipe_obat' => $input['tipe_obat'],
            'stok' => $input['stok'],
        ]);

        return redirect()->route('medicinelist.index')->with('success', 'Medicine successfully added');
    }

    public function create()
    {

    return view('auth.medicinelist.create');
    }

    public function edit($medicineId)
    {
        $medicine = Medicine::find($medicineId);

        if (!$medicine) {
            return abort(404); // Tampilkan halaman 404 jika obat tidak ditemukan.
        }

        return view('auth.medicinelist.edit', compact('medicine'));
    }

    public function update(Request $request, $medicineId)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tipe_obat' => 'required|in:keras,biasa',
        ]);

        $medicine = Medicine::find($medicineId);

        if (!$medicine) {
            return abort(404);
        }

        $medicine->update([
            'nama_obat' => $request->nama_obat,
            'deskripsi' => $request->deskripsi,
            'tipe_obat' => $request->tipe_obat,
        ]);

        return redirect()->route('medicinelist.index')->with('success', 'Medicine successfully updated');
    }

    public function destroy($medicineId)
    {
        $medicine = Medicine::find($medicineId);

        if (!$medicine) {
            return abort(404);
        }

        $medicine->delete();

        return redirect()->route('medicinelist.index')->with('success', 'Medicine successfully deleted');
    }
}
