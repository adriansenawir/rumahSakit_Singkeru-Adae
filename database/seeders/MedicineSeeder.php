<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data dummy ke tabel medicines
        DB::table('medicines')->insert([
            'nama_obat' => 'Paracetamol',
            'deskripsi' => 'Obat penurun demam dan pereda nyeri.',
            'tipe_obat' => 'biasa',
            'stok' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
