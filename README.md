Prosedur instalasi presensikk:
- git clone https://github.com/hansen55kk/presensikk.git
- cd presensikk
- composer install
- ubah file .env.example jadi .env
- create database 'presensikk'
- php artisan key:generate
- php artisan migrate
Setelah itu buat akun super admin dengan cara:
- php artisan tinker
- App\Models\User::factory()->create();
Kemudian login dengan email yang diberikan dan dengan password = 'password' . Data nama, email, dan password bisa diganti di dalam menu profile pada dashboard admin.

Untuk menjalankan aplikasi dengan XAMPP:
- Buka XAMPP
- Jalankan mysql
- php artisan serve
