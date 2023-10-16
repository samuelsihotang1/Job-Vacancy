<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->create([
      'name' => 'BPTI Kemdikbud',
      'email' => 'admin@gmail.com',
      'password' => bcrypt('admin@gmail.com'),
      'name_slug' => 'BPTI Kemdikbud',
      'codename' => 'xxxxx'
    ]);

    // User
    $users = [
      'Jeff Bezos',
      'Elon Musk',
      'Bill Gates',
      'Warren Buffett'
    ];
    for ($i = 0; $i < count($users); $i++) {
      User::factory()->create([
        'name' => $users[$i],
        'email' => Str::of($users[$i])->slug('_') . '@gmail.com',
        'password' => bcrypt(Str::of($users[$i])->slug('_') . '@gmail.com'),
        'name_slug' => Str::of($users[$i])->slug('-'),
        'codename' => rand(1000, 9999),
      ]);
    }

    // Categories
    $categories = [
      'Jam Karya',
      'Kompetisi',
      'Organisasi',
      'Asisten Dosen',
    ];
    for ($i = 0; $i < count($categories); $i++) {
      DB::table('categories')->insert([
        'name' => $categories[$i],
        'name_slug' => Str::of($categories[$i])->slug('-'),
      ]);
    }

    // Jobs
    $jobs = [
      'Penyusun Jadwal Acara',
      'Juri Lomba Menulis',
      'Koordinator Acara Amal',
      'Asisten Laboratorium Kimia',
      'Pemateri Seminar',
      'Panitia Penyelenggara Turnamen Game Online',
      'Sekretaris Organisasi Mahasiswa',
      'Asisten Pengajaran Matematika',
      'Fotografer Acara',
      'Wasit Sepak Bola',
      'Bendahara Klub Olahraga',
      'Peneliti Mahasiswa',
      'Pengurus sound system untuk Pesta',
      'Hakim Kontes Kecantikan',
      'Ketua Tim Penggalangan Dana',
      'Asisten Penelitian Biologi',
    ];
    
    $text = [
      'Tugas seorang Penyusun Jadwal Acara adalah merencanakan dan menyusun jadwal acara dengan cermat. Mereka harus memastikan semua kegiatan berjalan lancar dan sesuai dengan waktu yang telah ditetapkan.',
      'Seorang Juri Lomba Menulis memiliki tanggung jawab untuk menilai dan memberikan penilaian terhadap karya tulis peserta lomba. Mereka harus memiliki pengetahuan yang baik dalam bidang penulisan.',
      'Koordinator Acara Amal bertanggung jawab untuk mengorganisir acara amal dan memastikan semua aspeknya berjalan dengan baik. Mereka juga dapat terlibat dalam penggalangan dana untuk tujuan amal.',
      'Seorang Asisten Laboratorium Kimia membantu dalam eksperimen dan praktikum kimia di laboratorium. Mereka harus memiliki pengetahuan tentang prosedur keselamatan dan pengelolaan bahan kimia.',
      'Pemateri Seminar adalah orang yang memberikan presentasi atau ceramah di seminar. Mereka harus memiliki pengetahuan yang mendalam dalam topik yang akan disampaikan.',
      'Anggota Panitia Penyelenggara Turnamen Game Online bertanggung jawab untuk mengatur dan menjalankan turnamen game online, termasuk administrasi dan penanganan masalah teknis.',
      'Seorang Sekretaris Organisasi Mahasiswa memiliki peran penting dalam mengelola dokumentasi, catatan, dan komunikasi internal organisasi mahasiswa.',
      'Asisten Pengajaran Matematika membantu instruktur dalam mengajar pelajaran matematika. Mereka dapat memberikan bantuan kepada siswa dalam pemahaman materi.',
      'Fotografer Acara bertugas untuk mengabadikan momen penting dalam sebuah acara melalui fotografi. Mereka harus memiliki keahlian dalam fotografi dan peralatan yang sesuai.',
      'Wasit Sepak Bola memiliki peran penting dalam memastikan permainan sepak bola berlangsung fair. Mereka membuat keputusan dalam pertandingan berdasarkan aturan yang berlaku.',
      'Bendahara Klub Olahraga mengelola keuangan klub olahraga, termasuk pengeluaran, pemasukan, dan penggalangan dana untuk mendukung aktivitas klub.',
      'Seorang Peneliti Mahasiswa melakukan penelitian dalam bidang tertentu sebagai bagian dari studi mereka. Mereka mengumpulkan data dan menganalisis temuan.',
      'Pengurus sound system untuk Pesta bertanggung jawab atas sistem audio dalam sebuah acara atau pesta, termasuk pengaturan dan pengoperasian peralatan suara.',
      'Hakim Kontes Kecantikan memiliki tanggung jawab untuk menilai peserta kontes kecantikan berdasarkan kriteria tertentu, seperti penampilan dan kepribadian.',
      'Ketua Tim Penggalangan Dana memimpin upaya untuk mengumpulkan dana bagi suatu tujuan tertentu, seperti amal atau proyek organisasi.',
      'Asisten Penelitian Biologi membantu peneliti dalam eksperimen dan penelitian di bidang biologi. Mereka dapat terlibat dalam pengumpulan data dan analisis.'
    ];
    
    $short_text = [
      'Tugas seorang Penyusun Jadwal Acara adalah merencanakan dan menyusun jadwal acara dengan cermat. Mereka harus memastikan semua kegiatan berjalan lancar dan sesuai dengan waktu yang telah ditetapkan.',
      'Seorang Juri Lomba Menulis memiliki tanggung jawab untuk menilai dan memberikan penilaian terhadap karya tulis peserta lomba. Mereka harus memiliki pengetahuan yang baik dalam bidang penulisan.',
      'Koordinator Acara Amal bertanggung jawab untuk mengorganisir acara amal dan memastikan semua aspeknya berjalan dengan baik. Mereka juga dapat terlibat dalam penggalangan dana untuk tujuan amal.',
      'Seorang Asisten Laboratorium Kimia membantu dalam eksperimen dan praktikum kimia di laboratorium. Mereka harus memiliki pengetahuan tentang prosedur keselamatan dan pengelolaan bahan kimia.',
      'Pemateri Seminar adalah orang yang memberikan presentasi atau ceramah di seminar. Mereka harus memiliki pengetahuan yang mendalam dalam topik yang akan disampaikan.',
      'Anggota Panitia Penyelenggara Turnamen Game Online bertanggung jawab untuk mengatur dan menjalankan turnamen game online, termasuk administrasi dan penanganan masalah teknis.',
      'Seorang Sekretaris Organisasi Mahasiswa memiliki peran penting dalam mengelola dokumentasi, catatan, dan komunikasi internal organisasi mahasiswa.',
      'Asisten Pengajaran Matematika membantu instruktur dalam mengajar pelajaran matematika. Mereka dapat memberikan bantuan kepada siswa dalam pemahaman materi.',
      'Fotografer Acara bertugas untuk mengabadikan momen penting dalam sebuah acara melalui fotografi. Mereka harus memiliki keahlian dalam fotografi dan peralatan yang sesuai.',
      'Wasit Sepak Bola memiliki peran penting dalam memastikan permainan sepak bola berlangsung fair. Mereka membuat keputusan dalam pertandingan berdasarkan aturan yang berlaku.',
      'Bendahara Klub Olahraga mengelola keuangan klub olahraga, termasuk pengeluaran, pemasukan, dan penggalangan dana untuk mendukung aktivitas klub.',
      'Seorang Peneliti Mahasiswa melakukan penelitian dalam bidang tertentu sebagai bagian dari studi mereka. Mereka mengumpulkan data dan menganalisis temuan.',
      'Pengurus sound system untuk Pesta bertanggung jawab atas sistem audio dalam sebuah acara atau pesta, termasuk pengaturan dan pengoperasian peralatan suara.',
      'Hakim Kontes Kecantikan memiliki tanggung jawab untuk menilai peserta kontes kecantikan berdasarkan kriteria tertentu, seperti penampilan dan kepribadian.',
      'Ketua Tim Penggalangan Dana memimpin upaya untuk mengumpulkan dana bagi suatu tujuan tertentu, seperti amal atau proyek organisasi.',
      'Asisten Penelitian Biologi membantu peneliti dalam eksperimen dan penelitian di bidang biologi. Mereka dapat terlibat dalam pengumpulan data dan analisis.'
    ];
    
    for ($i = 0; $i < count($jobs); $i++) {
      DB::table('jobs')->insert([
        'name' => $jobs[$i],
        'name_slug' => Str::of($jobs[$i])->slug('-'),
        'user_id' => $i%4+1,
        'short_text' => $short_text[$i],
        'text' => $text[$i],
        'category_id' => $i%4+1,
        'hours' => rand(1,9),
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }

    // Applies
    // for ($i = 0; $i < count($jobs); $i++) {
    //   DB::table('applies')->insert([
    //     'user_id' => $i%4+1,
    //     'job_id' => $i+1,
    //     'motivation' => 'income',
    //     'created_at' => now(),
    //     'updated_at' => now(),
    //   ]);
    // }
  }
}
