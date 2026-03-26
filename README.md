Nama: Dinda Aulia Rizky

NIM: 2409116076

Kelas: B'24

# Website Portofolio  𓂃˖˳·˖ ִֶָ ⋆ 🪼 ⋆ ִֶָ˖·˳˖𓂃 ִֶָ

Web portofolio adalah situs web pribadi yang menampilkan informasi mengenai diri seseorang, seperti pengantar, pengalaman kerja, kemampuan, dan sertifikat yang pernah diperoleh. Web portofolio bisa dianggap seperti CV, hanya saja disajikan dalam bentuk website yang lebih menarik dan bisa berinteraksi. Di dalamnya, orang bisa melihat siapa kita, apa yang sudah kita kerjakan, dan kemampuan apa yang kita punya dengan tampilan yang lebih jelas dan lebih menarik. 

Web portofolio ini dibuat agar kita bisa memperkenalkan diri secara profesional, terutama saat sedang kuliah, mencari magang, atau melamar pekerjaan. Dengan membuat website portofolio, kita bisa menampilkan kemampuan dan pengalaman kita dengan cara yang lebih menarik dan terkini. Selain itu, web portofolio juga bisa digunakan untuk memperkuat citra diri agar terlihat lebih profesional dan siap dalam membangun karier.

# 𐙚 Tampilan Tiap Section

## 1. Home

   Bagian Home merupakan halaman utama yang berfungsi sebagai tampilan awal website. Pada bagian ini ditampilkan identitas singkat seperti nama, foto, dan tagline sebagai gambaran umum mengenai pemilik website.

   <img width="1889" height="1026" alt="image" src="https://github.com/user-attachments/assets/c266c953-8ee1-46a1-8605-2b4a246dbc6a" />
   
## 2. About Me

   Bagian About Me berisi penjelasan lebih lengkap mengenai profil diri, termasuk latar belakang, minat, serta kemampuan yang dimiliki. Tujuannya adalah untuk memberikan informasi yang lebih mendalam kepada pengunjung mengenai pribadi penulis. Selain itu, terdapat tombol navigasi “Explore More” yang berfungsi untuk mengarahkan pengunjung menuju bagian lain dari website.

   <img width="1842" height="763" alt="image" src="https://github.com/user-attachments/assets/e9aa8f8d-ad91-479c-ab20-8003d6d6b4ef" />

## 3. Experience

   Bagian Experience memuat berbagai pengalaman yang pernah diikuti, seperti kegiatan organisasi, kepanitiaan, maupun aktivitas lainnya. Bagian ini bertujuan untuk menunjukkan keterlibatan serta kemampuan dalam bekerja sama dan berkontribusi dalam suatu kegiatan.

   Pada bagian atas terdapat judul halaman serta tombol filter kategori yang memungkinkan pengguna memilih tampilan pengalaman berdasarkan klasifikasi tertentu.

  - Halaman Experience pada semua kategori:
   
    <img width="1867" height="1004" alt="image" src="https://github.com/user-attachments/assets/7f7d1350-c873-4e93-ad50-2120b8d7f06b" />

  - Halaman Experience pada kategori Campus:

    <img width="1772" height="714" alt="image" src="https://github.com/user-attachments/assets/bfa60338-7d76-4f38-9a1e-1dff95a284ec" />

  - Halaman Experience pada kategori School:

    <img width="1736" height="814" alt="image" src="https://github.com/user-attachments/assets/2fb8fa28-c106-4398-a1cb-840265c3c563" />

## 4. Certificates

   Bagian Certificates menampilkan sertifikat atau penghargaan yang pernah diperoleh. Hal ini berfungsi sebagai bukti partisipasi dan pengembangan kompetensi dalam berbagai bidang yang relevan. Sertifikat yang ditampilkan meliputi kegiatan seminar, kepanitiaan, pelatihan, serta kegiatan organisasi sekolah.
   
   - Halaman Certificates pada semua kategori:
   
     <img width="1799" height="984" alt="image" src="https://github.com/user-attachments/assets/3acfd130-a845-44f7-9a06-55e25073cfcf" />

   - Halaman Certificates pada Campus:

     <img width="1786" height="1038" alt="image" src="https://github.com/user-attachments/assets/e385ba20-4302-4ca5-a9c8-55b0c25ba08b" />

- Halaman Certificates pada School:

  <img width="1781" height="683" alt="image" src="https://github.com/user-attachments/assets/94c7203a-5ba3-4046-8a1b-d10b6558bf12" />

## 5. Contact

   Bagian Contact berisi informasi kontak seperti email dan media sosial yang dapat digunakan untuk menghubungi pemilik website. Bagian ini memudahkan pihak lain untuk menjalin komunikasi lebih lanjut.

   <img width="945" height="470" alt="image" src="https://github.com/user-attachments/assets/7c84fb63-032b-4613-b53e-ab088d942558" />

# 𐙚 Struktur Kode pada Setiap Section
```bash
WEB_PORTOFOLIO
├── assets => Folder untuk menyimpan file pendukung yakni gambar.
├── index.html => File utama yang berisi struktur halaman website.
└── style.css => File untuk mengatur tampilan dan desain website.
```

# Perubahan yang dilakukan

## 1. Perubahan Sistem dari Statis ke Dinamis

   Pada pengembangan website ini, perubahan utama dilakukan untuk mengubah website dari yang sebelumnya bersifat statis menjadi dinamis. Perubahan tersebut hanya dilakukan pada satu file utama, yaitu:

   📄 index.html → index.php
   
   Perubahan ini memungkinkan website untuk mengambil data secara langsung dari database, sehingga konten dapat diperbarui tanpa perlu mengubah kode secara manual.

## 2. Penambahan Kode PHP pada Bagian Atas File

   Pada file index.php, ditambahkan kode PHP di bagian paling atas yang berfungsi untuk mengambil data dari database.

   <img width="722" height="532" alt="Screenshot 2026-03-27 041223" src="https://github.com/user-attachments/assets/f29a0ac0-ccd0-45fc-acd3-3a63ee69443f" />

## 3. Perubahan pada Bagian Vue.js (Data Binding)

   Pada bagian Vue.js, dilakukan perubahan pada sumber data yang sebelumnya ditulis secara manual menjadi data dari database.
   
   ❌ Sebelum (Statis): 
   
   experienceList: [ ... ],
   
   certificates: [ ... ]
   
   ✅ Sesudah (Dinamis)
   
   'experienceList: <?php echo json_encode($experiences); ?>,'
   
   'certificates: <?php echo json_encode($certificates); ?>'
   
   Fungsi json_encode() digunakan untuk mengubah data dari PHP yang berbentuk array menjadi format JSON. Data dalam format JSON tersebut kemudian dapat dibaca oleh Vue.js sebagai sumber data. Dengan cara ini, Vue.js tetap digunakan untuk menampilkan konten pada halaman website, namun data yang ditampilkan sudah berasal dari database sehingga bersifat dinamis. Perubahan ini merupakan satu-satunya bagian yang dilakukan pada sisi frontend.

## 4. Penambahan File koneksi.php

   Selain perubahan pada index.php, ditambahkan file baru bernama koneksi.php yang berfungsi untuk menghubungkan website dengan database.
   
   <img width="728" height="228" alt="Screenshot 2026-03-27 041156" src="https://github.com/user-attachments/assets/75babc3b-71d4-4ef0-a17f-749533eb9e4e" />
   
   Fungsi mysqli_connect() digunakan untuk membuat koneksi antara website dengan database MySQL. Parameter yang digunakan meliputi localhost sebagai server database, root sebagai username, password kosong sesuai pengaturan default Laragon, serta portofolio_db sebagai nama database yang digunakan. Selain itu, fungsi die() digunakan untuk menampilkan pesan kesalahan apabila koneksi ke database gagal. File koneksi ini berperan sebagai penghubung utama antara sistem website dan database.

# 𐙚 Tools yang Digunakan dalam Pengembangan Website

## 1. HTML (HyperText Markup Language)

   HTML digunakan untuk membangun struktur dasar halaman website seperti navbar, section, card, dan footer. HTML berfungsi sebagai kerangka utama website yang menyusun konten seperti teks, gambar, tombol, dan pembagian section.

   <img width="726" height="168" alt="image" src="https://github.com/user-attachments/assets/087ab606-4be4-4047-a2e7-78c90f03eefd" />

## 2. CSS (Cascading Style Sheets)

   CSS digunakan untuk mengatur tampilan visual website seperti warna, font, animasi, dan layout tambahan. CSS berfungsi memperindah tampilan website agar terlihat modern, responsif, dan memiliki efek animasi seperti hover dan scroll animation.

   Contoh Kode CSS:

   <img width="812" height="226" alt="image" src="https://github.com/user-attachments/assets/ccff35c7-550a-49b7-b417-fbe26e78fa0f" />

## 3. Bootstrap 5

   Bootstrap 5 digunakan untuk mempermudah pembuatan layout yang responsif dan komponen siap pakai seperti navbar, grid system, card, dan button.Bootstrap membantu dalam mengatur tata letak (grid system), membuat website responsif di berbagai ukuran layar, serta menyediakan komponen desain yang konsisten.

   - Contoh Pemanggilan Bootstrap:

      <img width="1001" height="64" alt="image" src="https://github.com/user-attachments/assets/4480bd26-f941-45ac-9c7d-5f0190f4dbd2" />

   - Contoh Penggunaan Class Bootstrap:

      <img width="272" height="49" alt="image" src="https://github.com/user-attachments/assets/323abb9b-0596-48d8-9eed-2bc4164d9e94" />

      <img width="659" height="25" alt="image" src="https://github.com/user-attachments/assets/bfc26f52-34a7-4926-9c07-d657030c058c" />

## 4. Vue.js (JavaScript Framework)

   Vue.js digunakan untuk membuat website menjadi dinamis, seperti menampilkan data, melakukan perulangan, serta fitur filter kategori. Vue.js berfungsi untuk mengelola data secara dinamis. Dengan Vue, konten seperti pengalaman, sertifikat, dan skills dapat ditampilkan secara otomatis berdasarkan data yang tersimpan dalam array.

   - Contoh Pemanggilan Vue:

      <img width="655" height="58" alt="image" src="https://github.com/user-attachments/assets/90533106-4f93-41a4-83e7-c47f37a944aa" />

   - Contoh Inisialisasi Vue:

      <img width="463" height="238" alt="image" src="https://github.com/user-attachments/assets/a90f3085-41ad-4341-a815-9c37ab06fa5b" />

   - Contoh Data Binding & Perulangan

      <img width="486" height="250" alt="image" src="https://github.com/user-attachments/assets/ad62f79d-c479-4c67-a348-979652a15696" />

## 5. Laragon (UPGRADE)

  <img width="823" height="559" alt="image" src="https://github.com/user-attachments/assets/f4a9f546-4e13-4e0c-be73-0aab5df3d405" />

  Laragon adalah aplikasi yang digunakan sebagai web server lokal untuk menjalankan website berbasis PHP dan database MySQL di komputer tanpa perlu hosting online. Laragon menyediakan beberapa komponen penting dalam satu paket, yaitu:
  
  Apache → untuk menjalankan server web
  PHP → untuk memproses kode backend
  MySQL → untuk mengelola database
  phpMyAdmin → untuk mengelola database melalui tampilan GUI
  
  Dalam pengembangan website ini, Laragon digunakan untuk:
  Menjalankan file index.php agar dapat diproses oleh PHP
  Menghubungkan website dengan database portofolio_db
  Menampilkan data experience dan certificates secara dinamis dari database
  Menguji website secara lokal sebelum di-deploy ke internet
  
  Tanpa Laragon, file PHP tidak dapat dijalankan karena browser hanya dapat membaca HTML, CSS, dan JavaScript secara langsung.

## 6. phpMyAdmin (UPGRADE)

<img width="1561" height="409" alt="image" src="https://github.com/user-attachments/assets/5f90af80-2c79-467b-a20a-0c81975f5b1e" />

  phpMyAdmin adalah aplikasi berbasis web yang digunakan untuk mengelola database MySQL secara mudah melalui tampilan antarmuka (GUI), tanpa harus menulis perintah SQL secara manual di terminal. Dalam pengembangan website ini, phpMyAdmin digunakan untuk:
  
  Membuat database portofolio_db
  Membuat tabel seperti experience dan certificates
  Menambahkan, mengedit, dan menghapus data (CRUD)
  Menyimpan data seperti judul, deskripsi, kategori, dan nama file gambar
  
  phpMyAdmin sangat membantu dalam proses pengelolaan data karena menyediakan tampilan yang user-friendly dan terintegrasi langsung dengan Laragon.
    



    
