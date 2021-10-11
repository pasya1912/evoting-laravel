# Script Evoting OSIS & MPK Berbasis Laravel

Teknologi Frontend :
1. Mazer - Bootstrap 5 Admin Template by Ahmad Saugi
2. Tailwind CSS ( Voting Page )

Teknologi Backend :
1. PHP ( Laravel 8 )
2. MySQL

## Cara Pakai di Hosting
1. Download Scriptnya
2. Upload ke hosting , Jika lewat github harap install package nya dulu dengan cara composer install ( wajib punya akses ssh ), jika tidak bisa lewat upload biasa.
3. jika memakai hosting cpanel, buka crontab lalu masukkan `php /path/to/laravel/artisan queue:work --sleep=3 --tries=3 --max-time=3600`
4. edit file .htaccess menjadi :

```
<IfModule mod_rewrite.c>

    RewriteEngine On

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ public/index.php [L]

</IfModule>
```
5. Import laravel_pilketos.sql ke database.
6. sukses !

## Cara pakai di vps
1. Install composer di vps
4. Jika memakai VPS ikuti https://www.niagahoster.co.id/blog/cara-install-laravel-di-ubuntu/ ( pastikan document rootnya difolder public )
Note : Jangan install laravelnya, karena sudah ada laravel, sebagai gantinya ketikan :
`git clone https://github.com/pasya1912/evoting-laravel.git` lalu lanjutkan deh di folder evoting-laravel. kestep berikutnya.

5. lalu buat user baru pada mysql server dengan mengijinkan semua permision ( user baru tapi punya akses admin / root )
6. Buat database baru dengan user yang baru dibuat.
5. import laravel_pilketos.sql ke mysql ( Bisa pakai adminer, maupun inport langsung pake command )
6. Jika download lewat github. copy .env.example ke .env.
7. lalu ketikan sudo nano .env, masukkan username,database,password dari database.
8. Setelah itu sudah jadi deh.



Jika ingin mempercepat pagespeed / performa / kecepatan website pakai library laravel/octane dapat meningkatkan kecepatan yang cukup tinggi
Reqruitment : PHP 8 ++, Upgrade php dulu jika belum php 8
 untuk tutorial penginstallan :
https://www.youtube.com/watch?v=H7bCbrF1yts ( Bahasa inggris, indian accent)


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
7. Security terjamin aman.
   Karena saya seorang bug hutner jadi tentunya tau letak dimana bug biasanya ada. Ditambah lagi saya menggunakan framework laravel, dimana laravel ini sudah ada SQL Injection, dan XSS peventif nya. Lalu bug seperti double vote, dll sudah diperbaiki. Namun balik lagi tidak ada sistem yang aman.




Pada presentasi kali ini saya menggunakan server VPS ubuntu 16.0.4 Apache Mysql-server. serta penggunaan supervisord untuk mengotomatisasi Queue ( queue worker ).
Lalu pada server Ubuntu saya menggunakan Laravel Octane untuk memperbesar performa website sehingga load / pagespeednya lebih kencang lagi.

`Laravel Octane supercharges your application's performance by serving your application using high-powered application servers, including Swoole and RoadRunner. Octane boots your application once, keeps it in memory, and then feeds it requests at supersonic speeds.`




Jadi Kesimpulannya adalah Script Evoting OSIS dan MPK berbasis Laravel ini saya buat dengan code yang Efisien, aman ( secure ), Dapat diperbesar/perluas, Dapat dipelihara ( maintainable ), serta Mudah dibaca orang lain.



## Login admin
Username : admin@gmail.com
Password : admin1337

Script ini bagian dari DoIT 5.0 UNSIKA dibawa oleh Rafli Pasya ( 1E Teknik Informatika )
