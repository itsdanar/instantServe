<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
 
        DB::table('users')->insert([
            'name' => 'Danar',
            'email' => 'danar@gmail.com',
            'password' => Hash::make('password',['rounds' => 12]),
            'email_verified_at' => now(),
        ]);


    		DB::table('posts')->insert([
    			'nama_layanan' => 'layanan dummy',
    			'deskripsi_layanan' => 'Laundry merupakan salah satu pelayanan jasa di bidang cuci mencuci pakaian dengan memiliki jenis cucian yang telah ditetapkan harga oleh pihak penyedia jasa dan waktu Page 2 2 lama cucian biasanya ditentukan oleh penyedia dengan batas minimal dan maksimal selesainya cucian yang dipesan pelanggan.',
    			'alamat' => 'jalan tukad batu',
                'kontak' => '0328938293',
                'image_url' => 'sa',
                'alt' => 'test',
                'user_id' => 1,
    		]);
 

    }
}
