@extends('layouts.main')

@section('container')
<h2 class="pt-4">Pedoman Pengguna</h2>
<h5 class="pt-1">A.	Pencarian</h5>
<p>1.	Hasil pencarian akan menampilkan Penawaran yang relevan dengan kata kunci dari pencarian Anda.</p>

<h5 class="pt-1">B.	Filter Pencarian</h5>
<p>1.	Anda dapat menentukan Filter Pencarian untuk membuat hasil pencarian menjadi lebih spesifik.</p>
<p>2.	Variabel filter pencarian yang dapat anda tentukan.</p>
<p> a.	Urutan hasil pecarian (harus)</p>
<p> b.	Harga Terendah (opsional)</p>
<p> c.	Harga Tertinggi (opsional)</p>
<p> d.	Jenis Promo (opsional)</p>
<p> e.	Satuan Promo (opsional)</p>
<p> f.	Nilai Terendah Promo (opsional)</p>
<p> g.	Nilai Tertinggi Promo (opsional)</p>
<p> h.	Waktu Mulai Berlakunya Penawaran (opsional)</p>
<p> i.	Waktu Terakhir Berlakunya Penawaran (opsional)</p>
<p> j.	Keyword dari Penawaran (opsional)</p>
<p> k.	Platform Terkait Penawaran (opsional)</p>
<p> l.	Lokasi Terkait Penawaran (opsional)</p>
<p>3.	Jika variabel filter pencarian sudah ditentukan, pilih Done.</p>


<h5 class="pt-1">C. Detail Penawaran</h5>
<p>Pilih suatu penawaran untuk melihat detail penawaran.</p>

<h5 class="pt-1">D.	Perbandingan Penawaran</h5>
<p>1.	Pilih Penawaran.</p>
<p>2.	Pilih opsi Bandingkan.</p>
<p>3.	Penawaran tersebut akan otomatis menjadi Penawaran 1 yang akan dibandingkan.</p>
<p>4.	Pilih Penawaran 2 yang akan dibandingkan.</p>
<p>5.	Jika anda ingin me-reset Penawaran 1 dan/atau Penawaran 2, pilih opsi Reset.</p>
<p>6.	Jika Penawaran 1 dan Penawaran 2 sudah ditentukan, pilih opsi Mulai Bandingkan.</p>
<p>7.	Hasil perbandingan Penawaran 1 dan Penawaran 2 akan ditampilkan.</p>

<h5 class="pt-1">E.	Unfollow Akun (melalui Detail Penawaran)</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p>
<p>2.	Buka bagian Detail Penawaran dari Suatu Penawaran.</p>
<p>3.	Pilih opsi untuk Unfollow dari akun tersebut.</p>
<p>4.	Notifikasi akan muncul untuk mengonfirmasi unfollow Akun.</p>
<p>5.	Jika unfollow dikonfirmasi, pilih Ya.</p>

<h5 class="pt-1">F.	Log-In</h5>
<p>1.	Anda harus memiliki akun Vilomina. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di sini.</p>
<p>2.	Masukkan email akun Vilomina Anda.</p>
<p>3.	Masukkan password akun Vilomina Anda.</p>
<p>4.	Jika email dan password yang dimasukkan sudah benar, pilih Login.</p>
<p>5.	Jika muncul notifikasi yang menyatakan bahwa email dan/atau password yang dimasukkan salah, mohon periksa kembali dan perbaiki email dan/atau password yang dimasukkan.</p>
<p>6.	Jika muncul notifikasi yang menyatakan bahwa username/email yang dimasukkan tidak terdaftar, silahkan buat akun Vilomina di sini.</p>
<p>7.	Jika Anda lupa kata sandi akun Vilomina Anda, pilih opsi Reset Password. Ikuti prosedur reset password dari Vilomina.</p>

<h5 class="pt-1">G.	Buat Akun</h5>
<p>1.	Buka bagian Akun, anda akan diarahkan ke bagian Buat Akun.</p>
<p>2.	Lengkapi informasi tentang akun anda.</p>
<p>a.	Foto profil (opsional)</p>
<p>b.	Nama (harus)</p>
<p>c.	Tanggal lahir (harus)</p>
<p>d.	Email (harus)</p>
<p>e.	Masukkan password untuk akun anda (harus)</p>
<p>f.	Masukkan kembali password untuk akun anda (harus)</p>
<p>3.	Password dan password konfirmasi harus sama.</p>
<p>4.	Jika muncul notifikasi yang menyatakan informasi yang dimasukkan tidak sesuai, mohon periksa kembali informasi yang dimasukkan.</p>
<p>5.	Jika informasi yang dimasukkan sudah benar, pilih Buat Akun.</p>

<h5 class="pt-1">H.	Reset Password</h5>
<p>1.	Masukkan email akun Vilomina Anda.</p>
<p>2.	Link untuk reset password akan dikirim ke email Anda. Klik link terebut, maka Anda akan diarahkan ke bagian untuk mengatur password baru Anda</p>
<p>3.	Masukkan password untuk akun anda</p>
<p>4.	Masukkan kembali password untuk akun anda</p>
<p>5.	Password dan password konfirmasi harus sama.</p>
<p>6.	Jika muncul notifikasi yang menyatakan password yang dimasukkan tidak sesuai, mohon periksa kembali password yang dimasukkan.</p>
<p>7.	Jika password baru yang dimasukkan sudah benar, pilih Simpan.</p>

<h5 class="pt-1">I.	Edit Profil</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di sini.</p>
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Profil.</p>
<p>4.	Anda dapat melakukan penyesuaian pada profil Anda.</p>
<p>a.	Foto profil (opsional)</p>
<p>b.	Nama (harus)</p>
<p>c.	Tanggal lahir (harus)</p>
<p>d.	Email (harus)</p>
<p>5.	Jika muncul notifikasi yang menyatakan bahwa informasi yang dimasukkan tidak sesuai, harap periksa kembali informasi yang dimasukkan.</p>
<p>6.	Jika informasi yang dimasukkan sudah benar, pilih Simpan. </p>

<h5 class="pt-1">J.	Buat Halaman</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p>
<p>2.	Buka bagian Akun. </p>
<p>3.	Pilih opsi Buat Halaman. Satu akun hanya dapat memiliki satu Halaman.</p>
<p>4.	Lengkapi informasi tentang Halaman Anda.</p>
<p>a.	Foto Profil Halaman (opsional)</p>
<p>b.	Nama Halaman (harus)</p>
<p>c.	Deskripsi (opsional)</p>
<p>d.	Negara (opsional)</p>
<p>e.	Provinsi (opsional)</p>
<p>f.	Kota/Kabupaten (opsional)</p>
<p>g.	Alamat (opsional)</p>
<p>5.	If a notification appears stating the added information does not comply with Vilomina's requirements, please check again and make corrections to the added information. </p>
<p>6.	If the information added is correct, select Save. </p>
<p>7.	Jika muncul notifikasi yang menyatakan bahwa informasi yang dimasukkan tidak sesuai, harap periksa kembali informasi yang dimasukkan. </p>
<p>8.	Jika informasi yang dimasukkan sudah benar, pilih Simpan. </p>

<h5 class="pt-1">K.	Edit Informasi Halaman</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p>
<p>2.	Buka bagian Akun.</p>
<p>3.	Pilih opsi Manajemen Halaman. Satu akun hanya dapat memiliki satu Halaman.</p>
<p>4.	Di bagian Informasi Halaman, Anda dapat melakukan penyesuaian pada informasi tersebut.</p>
<p>a.	Foto Profil Halaman (opsional)</p>
<p>b.	Nama Halaman (harus)</p>
<p>c.	Deskripsi (opsional)</p>
<p>d.	Negara (opsional)</p>
<p>e.	Provinsi (opsional)</p>
<p>f.	Kota/Kabupaten (opsional)</p>
<p>g.	Alamat (opsional)</p>
<p>5.	Jika muncul notifikasi yang menyatakan bahwa informasi yang dimasukkan tidak sesuai, harap periksa kembali informasi yang dimasukkan.</p>
<p>6.	Jika informasi yang dimasukkan sudah benar, pilih Simpan.</p>

<h5 class="pt-1">L.	Tambahkan Penawaran ke Manajemen Penawaran</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p> 
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Manajemen Penawaran.</p>
<p>4.	Pilih Tambah Penawaran.</p>
<p>5.	Lengkapi informasi penawaran yang akan Anda tambahkan.</p>
<p>a.	Gambar dari Penawaran (opsional)</p>
<p>b.	Judul dari Penawaran (harus)</p>
<p>c.	Deskripsi dari Penawaran (opsional)</p>
<p>d.	Harga Asli (opsional)</p>
<p>e.	Harga Promosi (opsional)</p>
<p>f.	Jenis Promo (opsional)</p>
<p>g.	Satuan Promo (opsional)</p>
<p>h.	Nilai Promo (opsional)</p>
<p>i.	Waktu Mulai Berlakunya Penawaran (opsional)</p>
<p>j.	Waktu Terakhir Berlakunya Penawaran (opsional)</p>
<p>k.	Keyword dari Penawaran (opsional)</p>
<p>l.	Link Terkait Penawaran (opsional)</p>
<p>m.	Lokasi Terkait Penawaran (opsional)</p>
<p>n.	Syarat dan Ketentuan dari Penawaran (opsional)</p>
<p>7.	Jika muncul notifikasi yang menyatakan bahwa informasi yang dimasukkan tidak sesuai, harap periksa kembali informasi yang dimasukkan.</p>
<p>8.	Jika informasi yang dimasukkan sudah benar, pilih Simpan.</p>

<h5 class="pt-1">M.	Edit Penawaran ke Manajemen Penawaran</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p> 
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Manajemen Penawaran.</p>
<p>4.	Pilih Penawaran yang ingin Anda sesuaikan.</p>
<p>5.	Di bagian Manajemen Penawaran, Anda dapat melakukan penyesuaian pada informasi penawaran.</p>
<p>a.	Gambar dari Penawaran (opsional)</p>
<p>b.	Judul dari Penawaran (harus)</p>
<p>c.	Deskripsi dari Penawaran (opsional)</p>
<p>d.	Harga Asli (opsional)</p>
<p>e.	Harga Promosi (opsional)</p>
<p>f.	Jenis Promo (opsional)</p>
<p>g.	Satuan Promo (opsional)</p>
<p>h.	Nilai Promo (opsional)</p>
<p>i.	Waktu Mulai Berlakunya Penawaran (opsional)</p>
<p>j.	Waktu Terakhir Berlakunya Penawaran (opsional)</p>
<p>k.	Keyword dari Penawaran (opsional)</p>
<p>l.	Link Terkait Penawaran (opsional)</p>
<p>m.	Lokasi Terkait Penawaran (opsional)</p>
<p>n.	Syarat dan Ketentuan dari Penawaran (opsional)</p>
<p>7.	Jika muncul notifikasi yang menyatakan bahwa informasi yang dimasukkan tidak sesuai, harap periksa kembali informasi yang dimasukkan.</p>
<p>8.	Jika informasi yang dimasukkan sudah benar, pilih Simpan. </p>

<h5 class="pt-1">N.	Hapus Penawaran dari Halaman</h5>
<p>1.  Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p>
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Manajemen Penawaran.</p>
<p>4.	Pilih penawaran yang ingin Anda hapus.</p>
<p>5.	Notifikasi akan muncul untuk mengonfirmasi penghapusan penawaran.</p>
<p>6.	Jika penghapusan dikonfirmasi, pilih Ya.</p>

<h5 class="pt-1">O.	Hapus Penawaran yang di-Bookmark</h5>
<p>1.   Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p>
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Bookmark.</p>
<p>4.	Pilih penawaran yang ingin Anda hapus.</p>
<p>5.	Notifikasi akan muncul untuk mengonfirmasi penghapusan penawaran.</p>
<p>6.	Jika penghapusan dikonfirmasi, pilih Ya.</p>

<h5 class="pt-1">P.	Unfollow Akun (melalui bagian Following)</h5>
<p>1.   Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a> 
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Following.</p>
<p>4.	Pilih Akun yang ingin Anda unfollow.</p>
<p>5.	Notifikasi akan muncul untuk mengonfirmasi unfollow Akun.</p>
<p>6.	Jika unfollow dikonfirmasi, pilih Ya.</p>

<h5 class="pt-1">Q.	Notifikasi</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a> </p>
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Notifikasi.</p>
<p>4.	Anda dapat melihat semua notifikasi yang terkait dengan Akun anda disini.</p>

<h5 class="pt-1">R.	Ganti Password</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a></p> 
<p>2.	Buka bagian Akun.</p>
<p>3.	Buka bagian Ganti Password.</p>
<p>4.	Masukkan password akun Vilomina Anda saat ini.</p>
<p>5.	Jika password saat ini yang dimasukkan sudah benar, pilih Berikutnya.</p>
<p>6.	Jika muncul notifikasi yang menyatakan password saat yang dimasukkan tidak sesuai, mohon periksa kembali password yang dimasukkan.</p>
<p>7.	Masukkan password untuk akun anda</p>
<p>8.	Masukkan kembali password untuk akun anda</p>
<p>9.	Password dan password konfirmasi harus sama.</p>
<p>10.	Jika muncul notifikasi yang menyatakan password yang dimasukkan tidak sesuai, mohon periksa kembali password yang dimasukkan.</p>
<p>11.	Jika password baru yang dimasukkan sudah benar, pilih Simpan.</p>

<h5 class="pt-1">S.	Pedoman</h5>
<p>1.	Menuju bagian Footer.</p>
<p>2.	Pilih bagian Pedoman Pengguna.</p>
<p>3.	Anda dapat melihat semua pedoman yang terkait dengan penggunaan platform Vilomina di <a href="/register">sini.</a></p>

<h5 class="pt-1">T.	Syarat dan Ketentuan</h5>
<p>1.	Menuju bagian Footer.</p>
<p>2.	Pilih bagian Syarat dan Ketentuan.</p>
<p>3.	Anda dapat melihat semua Syarat dan Ketentuan yang terkait dengan penggunaan platform Vilomina di <a href="/register">sini.</a></p>

<h5 class="pt-1">U.	Log-out</h5>
<p>1.	Log-In ke akun Vilomina Anda. Jika Anda tidak memiliki akun Vilomina, Anda dapat membuatnya di <a href="/register">sini.</a> </p>
<p>2.	Buka bagian Akun.</p>
<p>3.	Pilih opsi Log-out.</p>
<p>4.	Notifikasi akan muncul untuk mengonfirmasi Log-out.</p>
<p>5.	Jika Log-out dikonfirmasi, pilih Ya.</p>
@endsection