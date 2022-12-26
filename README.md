# Dwilingo Kids
Aplikasi Android untuk belajarbelajar bahasa Inggris untuk anak-anak di usia 4-8 tahun (PAUD - SD kelas 2), dimana aplikasi ini memiliki beberapa fitur menarik untuk membantu anak-anak dalam menghafal, menyebutkan dan menulis kata-kata tingkat rendah dengan mudah.

Repository ini memuat source code backend REST API
Berikut beberapa tools, bahasa, dan framework yang digunakan :
- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Filament PHP](https://filamentphp.com/)
- [Sanctum](https://github.com/laravel/sanctum) untuk APInya 

### Cara Install Aplikasi ini
```
$ git clone https://github.com/miftahalamsyah/dwilingokids_BE.git
$ cd dwilingokids
$ cp .env.example .env
$ composer install
```
### Sebelum Memulai
```
$ artisan key:generate
$ artisan storage:link
$ artisan migrate --seed
```

### Memulai
```
$ php artisan serve
```

### Akses Dashboard
Akses melalui [http://localhost/admin](http://localhost/admin)

email : admin@example.com dan password : admin

# Dwilingo Kids Android App
Dapat diakses melalui repository berikut :
https://github.com/miftahalamsyah/dwilingokids

Terima Kasih:)
