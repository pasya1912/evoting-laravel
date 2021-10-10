# Script Evoting OSIS & MPK Berbasis Laravel

Teknologi Frontend :
1. Mazer - Bootstrap 5 Admin Template by Ahmad Saugi
2. Tailwind CSS ( Voting Page )

Teknologi Backend :
1. PHP ( Laravel 8 )
2. MySQL

# Fitur

Voters :
1. Login voting menggunakan Password
2. Voting menggunakan token
3. Dapat memilih satu OSIS dan MPK pertokennya
4. Dapat melakukan Set password bila password belum di set.

Admin : 
1. Terdapat Dashboard yang berisi Jumlah suara, Jumlah kandidat, dll.
2. Terdapat halaman penambahan kandidat, Detail kandidat, dan edit kandidat, serta hapus kandidat.
3. Kandidat berupa nama pasangan, nama ketua & wakil, kelas ketua & wakil, gambar, visi serta misi.
4. Terdapat halaman Voters yang berisi setiap token. dimana terdapat informasi status milih ( apakah sudah atau belum ), serta status set password.
5. Terdapat fitur tambah token ( dimana admin bisa menambah token hingga ribuan token, namun dibatasi 500 sekali buat ), terdapat fitur hapus token.
6. Terdapat fitur filter token yang ingin dicari juga.
7. Terdapat fitur Export Excel, dimana admin dapat menerima data Voters berupa Excel file.

Fitur dalam sisi Programming :
1. UI/UX dibuat se-responsive mungkin
   Yang artinya tampilan bergantung pada ukuran layar pengunjung.
2. Back-end dibuat menggunakan laravel
   Laravel merupakan Framework php terpopuler, maka dari itu saya menggunakannya karena saya mendapat banyak fitur mantep.
3. Code dibuat Se-clean Mungkin menggunakan OOP .
   Karena saya menggunakan Laravel, tentu saja saya sudah menggunakan Object Oriented Programming Model View Controller. jadi walaupun terdapat banyak file tapi setiap file saling terhubung membuat kode menjadi rapih ( Readable ), Dapat diperbesar ( Ditambah fitur, dll dengan mudah ) atau extensible , 
4. Menggunakan gaya coding Pattern Service - Repository
   Apasih pattern service repository ? jadi saya menggunakan pola code dimana Logic Bisnis, Query Database, Return data tidak menumpuk di controller. Jadi saya pisahkan dimana Controller hanya memvalidasi request / data lalu dikirim ke service , jika membutuhkan Query ke database maka Repository database pun dipanggil. nantinya akan mereturn data kembail ke controller yang akan di tampilkan berupa data pada Web maupun API.
5. Menggunakan Queue pada proses Voting
   Apasih queue ? jadi ini adalah fitur dari Laravel dimana kita bisa menjalankan proses/code dibalik layar dengan antrian. Nah real scenarionya ini seperti pada saat Voters ( pemilih ) melakukan voting, disitu Javascript melakukan ajax ke api /simpansuara. setelah itu langsung di masukkan ke antrian voting, sehingga wakut yang dibutuhkan pun lebih cepat, tidak harus menunggu sampai proses logic selesai. proses penyimpanan suara dan perubahan status vote dilakukan dibalik layar.
6. Menggunakan Caching pada beberapa Query Database untuk menghemat penggunakan memory
   Coba bayangkan ada 1000-5000 orang yang melakukan voting secara bersamaan dalam waktu 1-3 detik ? itu akan membebani memmory dikarenakan code kita melakukan querying pada database 1000x-5000x dalam waktu 1-3 detik . nah disinilah Sistem Caching berguna, Sebagai contoh Query database untuk menampilkan kandidat disimpan dalam Cache selama 10 detik. nah karena menggunakan caching, Query kedatabase hanya sekali setiap 10 detik, baru setelah cache nya expired maka code tersebut akan melakukan query lagi sebanyak 1x setiap 10 detik.



Pada presentasi kali ini saya menggunakan server VPS ubuntu 16.0.4 Apache Mysql-server. serta penggunaan supervisord untuk mengotomatisasi Queue.



Jadi Kesimpulannya adalah Script Evoting OSIS dan MPK berbasis Laravel ini saya buat dengan code yang Efisien, Dapat diperbesar/perluas ( Extendible ), Dapat dipelihara ( maintainable ), serta Mudah dibaca orang lain.
    

Script ini bagian dari DoIT 5.0 UNSIKA dibawa oleh Rafli Pasya ( 1E Teknik Informatika )
