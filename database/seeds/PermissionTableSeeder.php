<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::where('id', '!=', null)->delete();

        //role
        Permission::insert([
            ['id' => 'role.index', 'name' => 'Lihat Role', 'group' => 'ROLE'],
            ['id' => 'role.create', 'name' => 'Buat Role', 'group' => 'ROLE'],
            ['id' => 'role.edit', 'name' => 'Edit Role', 'group' => 'ROLE'],
            ['id' => 'role.delete', 'name' => 'Hapus Role', 'group' => 'ROLE'],
        ]);

        Permission::insert([
            ['id' => 'user.index', 'name' => 'Lihat User', 'group' => 'USER'],
            ['id' => 'user.create', 'name' => 'Buat User', 'group' => 'USER'],
            ['id' => 'user.edit', 'name' => 'Edit User', 'group' => 'USER'],
            ['id' => 'user.delete', 'name' => 'Hapus User', 'group' => 'USER'],
        ]);

        Permission::insert([
            ['id' => 'pkk.index', 'name' => 'Lihat PKK', 'group' => 'PKK'],
            ['id' => 'pkk.create', 'name' => 'Buat PKK', 'group' => 'PKK'],
            ['id' => 'pkk.edit', 'name' => 'Edit PKK', 'group' => 'PKK'],
            ['id' => 'pkk.delete', 'name' => 'Hapus PKK', 'group' => 'PKK'],
        ]);

        Permission::insert([
            ['id' => 'linmas.index', 'name' => 'Lihat Linmas', 'group' => 'LINMAS'],
            ['id' => 'linmas.create', 'name' => 'Buat Linmas', 'group' => 'LINMAS'],
            ['id' => 'linmas.edit', 'name' => 'Edit Linmas', 'group' => 'LINMAS'],
            ['id' => 'linmas.delete', 'name' => 'Hapus Linmas', 'group' => 'LINMAS'],
        ]);

        Permission::insert([
            ['id' => 'kt.index', 'name' => 'Lihat Karang Taruna', 'group' => 'KT'],
            ['id' => 'kt.create', 'name' => 'Buat Karang Taruna', 'group' => 'KT'],
            ['id' => 'kt.edit', 'name' => 'Edit Karang Taruna', 'group' => 'KT'],
            ['id' => 'kt.delete', 'name' => 'Hapus Karang Taruna', 'group' => 'KT'],
        ]);

        Permission::insert([
            ['id' => 'village-apparature.index', 'name' => 'Lihat Perangkat Desa', 'group' => 'PD'],
            ['id' => 'village-apparature.create', 'name' => 'Buat Perangkat Desa', 'group' => 'PD'],
            ['id' => 'village-apparature.edit', 'name' => 'Edit Perangkat Desa', 'group' => 'PD'],
            ['id' => 'village-apparature.delete', 'name' => 'Hapus Perangkat Desa', 'group' => 'PD'],
        ]);

        Permission::insert([
            ['id' => 'annoncement.index', 'name' => 'Lihat Pengumuman', 'group' => 'ANNOUNCEMENT'],
            ['id' => 'annoncement.create', 'name' => 'Buat Pengumuman', 'group' => 'ANNOUNCEMENT'],
            ['id' => 'annoncement.edit', 'name' => 'Edit Pengumuman', 'group' => 'ANNOUNCEMENT'],
            ['id' => 'annoncement.delete', 'name' => 'Hapus Pengumuman', 'group' => 'ANNOUNCEMENT'],
            ['id' => 'annoncement.publish', 'name' => 'Publish Pengumuman', 'group' => 'ANNOUNCEMENT'],
        ]);

        Permission::insert([
            ['id' => 'news.index', 'name' => 'Lihat Berita', 'group' => 'NEWS'],
            ['id' => 'news.create', 'name' => 'Buat Berita', 'group' => 'NEWS'],
            ['id' => 'news.edit', 'name' => 'Edit Berita', 'group' => 'NEWS'],
            ['id' => 'news.delete', 'name' => 'Hapus Berita', 'group' => 'NEWS'],
            ['id' => 'news.publish', 'name' => 'Publish Berita', 'group' => 'NEWS'],
        ]);

        Permission::insert([
            ['id' => 'village-rules.index', 'name' => 'Lihat Peraturan Desa', 'group' => 'PERATURANDESA'],
            ['id' => 'village-rules.create', 'name' => 'Buat Peraturan Desa', 'group' => 'PERATURANDESA'],
            ['id' => 'village-rules.edit', 'name' => 'Edit Peraturan Desa', 'group' => 'PERATURANDESA'],
            ['id' => 'village-rules.delete', 'name' => 'Hapus Peraturan Desa', 'group' => 'PERATURANDESA'],
        ]);

        Permission::insert([
            ['id' => 'perbekel-rules.index', 'name' => 'Lihat Peraturan Perbekel', 'group' => 'PERATURANPERBEKEL'],
            ['id' => 'perbekel-rules.create', 'name' => 'Buat Peraturan Perbekel', 'group' => 'PERATURANPERBEKEL'],
            ['id' => 'perbekel-rules.edit', 'name' => 'Edit Peraturan Perbekel', 'group' => 'PERATURANPERBEKEL'],
            ['id' => 'perbekel-rules.delete', 'name' => 'Hapus Peraturan Perbekel', 'group' => 'PERATURANPERBEKEL'],
        ]);

        Permission::insert([
            ['id' => 'sk-perbekel.index', 'name' => 'Lihat SK Perbekel', 'group' => 'SKPERBEKEL'],
            ['id' => 'sk-perbekel.create', 'name' => 'Buat SK Perbekel', 'group' => 'SKPERBEKEL'],
            ['id' => 'sk-perbekel.edit', 'name' => 'Edit SK Perbekel', 'group' => 'SKPERBEKEL'],
            ['id' => 'sk-perbekel.delete', 'name' => 'Hapus SK Perbekel', 'group' => 'SKPERBEKEL'],
        ]);

        Permission::insert([
            ['id' => 'pariwisata.index', 'name' => 'Lihat Pariwisata', 'group' => 'PARIWISATA'],
            ['id' => 'pariwisata.create', 'name' => 'Buat Pariwisata', 'group' => 'PARIWISATA'],
            ['id' => 'pariwisata.edit', 'name' => 'Edit Pariwisata', 'group' => 'PARIWISATA'],
            ['id' => 'pariwisata.delete', 'name' => 'Hapus Pariwisata', 'group' => 'PARIWISATA'],
        ]);

        Permission::insert([
            ['id' => 'alam.index', 'name' => 'Lihat Alam', 'group' => 'ALAM'],
            ['id' => 'alam.create', 'name' => 'Buat Alam', 'group' => 'ALAM'],
            ['id' => 'alam.edit', 'name' => 'Edit Alam', 'group' => 'ALAM'],
            ['id' => 'alam.delete', 'name' => 'Hapus Alam', 'group' => 'ALAM'],
        ]);

        Permission::insert([
            ['id' => 'senbud.index', 'name' => 'Lihat Seni dan Budaya', 'group' => 'SENBUD'],
            ['id' => 'senbud.create', 'name' => 'Buat Seni dan Budaya', 'group' => 'SENBUD'],
            ['id' => 'senbud.edit', 'name' => 'Edit Seni dan Budaya', 'group' => 'SENBUD'],
            ['id' => 'senbud.delete', 'name' => 'Hapus Seni dan Budaya', 'group' => 'SENBUD'],
        ]);

        Permission::insert([
            ['id' => 'kuliner.index', 'name' => 'Lihat Kuliner', 'group' => 'KULINER'],
            ['id' => 'kuliner.create', 'name' => 'Buat Kuliner', 'group' => 'KULINER'],
            ['id' => 'kuliner.edit', 'name' => 'Edit Kuliner', 'group' => 'KULINER'],
            ['id' => 'kuliner.delete', 'name' => 'Hapus Kuliner', 'group' => 'KULINER'],
        ]);

        Permission::insert([
            ['id' => 'perkebunan.index', 'name' => 'Lihat Pertanian', 'group' => 'PERKEBUNAN'],
            ['id' => 'perkebunan.create', 'name' => 'Buat Pertanian', 'group' => 'PERKEBUNAN'],
            ['id' => 'perkebunan.edit', 'name' => 'Edit Pertanian', 'group' => 'PERKEBUNAN'],
            ['id' => 'perkebunan.delete', 'name' => 'Hapus Pertanian', 'group' => 'PERKEBUNAN'],
        ]);

        Permission::insert([
            ['id' => 'perikanan.index', 'name' => 'Lihat Perikanan', 'group' => 'PERIKANAN'],
            ['id' => 'perikanan.create', 'name' => 'Buat Perikanan', 'group' => 'PERIKANAN'],
            ['id' => 'perikanan.edit', 'name' => 'Edit Perikanan', 'group' => 'PERIKANAN'],
            ['id' => 'perikanan.delete', 'name' => 'Hapus Perikanan', 'group' => 'PERIKANAN'],
        ]);

        Permission::insert([
            ['id' => 'kerajinan.index', 'name' => 'Lihat Kerajinan', 'group' => 'KERAJINAN'],
            ['id' => 'kerajinan.create', 'name' => 'Buat Kerajinan', 'group' => 'KERAJINAN'],
            ['id' => 'kerajinan.edit', 'name' => 'Edit Kerajinan', 'group' => 'KERAJINAN'],
            ['id' => 'kerajinan.delete', 'name' => 'Hapus Kerajinan', 'group' => 'KERAJINAN'],
        ]);

        Permission::insert([
            ['id' => 'mikro.index', 'name' => 'Lihat Usaha Mikro', 'group' => 'MIKRO'],
            ['id' => 'mikro.create', 'name' => 'Buat Usaha Mikro', 'group' => 'MIKRO'],
            ['id' => 'mikro.edit', 'name' => 'Edit Usaha Mikro', 'group' => 'MIKRO'],
            ['id' => 'mikro.delete', 'name' => 'Hapus Usaha Mikro', 'group' => 'MIKRO'],
            ['id' => 'pengaduan-masyarakat.index', 'name' => 'Lihat Pengaduan Masyarakat', 'group' => 'PENGADUAN'],
        ]);
    }
}
