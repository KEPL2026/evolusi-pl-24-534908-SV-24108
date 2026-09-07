# evolusi-pl-24-534908-SV-24108

Aplikasi web sederhana berbasis **Laravel 12** sebagai tugas mata kuliah
**Konstruksi dan Evolusi Perangkat Lunak**.

| Keterangan  | Isi                    |
| ----------- | ---------------------- |
| Nama        | Prihastomo Budi Satrio|
| NIM         | 24/534908/SV/24108     |
| Mata Kuliah | Konstruksi dan Evolusi Perangkat Lunak |

## Kebutuhan Sistem

- PHP 8.2 atau lebih baru
- Composer 2.x

Aplikasi ini tidak memerlukan basis data. Sesi dan cache disimpan pada berkas,
sehingga tidak ada langkah migrasi yang perlu dijalankan.

## Cara Menjalankan

```bash
git clone https://github.com/<username>/evolusi-pl-24-534908-SV-24108.git
cd evolusi-pl-24-534908-SV-24108

composer install
cp .env.example .env
php artisan key:generate

php artisan serve
```

Aplikasi dapat diakses pada `http://127.0.0.1:8000`.

## Menjalankan Pengujian

```bash
php artisan test        # menjalankan test suite
vendor/bin/pint --test  # memeriksa gaya penulisan kode
```

## Alur Kerja Git

Repositori ini menggunakan alur bercabang tiga tingkat:

```
main  ← branch stabil, hanya menerima merge dari dev melalui Pull Request
 └── dev  ← branch integrasi, menerima merge dari feature/* melalui Pull Request
      └── feature/*  ← branch pengerjaan fitur
```

Aturan yang diterapkan:

- Tidak ada push langsung ke `main` maupun `dev`; keduanya dilindungi *branch protection rule*.
- Setiap perubahan digabungkan melalui Pull Request.
- Pesan commit mengikuti standar [Conventional Commits](https://www.conventionalcommits.org/),
  misalnya `feat:`, `fix:`, `test:`, `docs:`, `ci:`, dan `chore:`.

## Continuous Integration

Berkas [`.github/workflows/ci.yml`](.github/workflows/ci.yml) menjalankan dua job pada
setiap push dan Pull Request ke `main` dan `dev`:

1. **Automated Tests** — memasang dependensi lalu menjalankan `php artisan test`.
2. **Code Style (Laravel Pint)** — memeriksa gaya penulisan kode dengan `vendor/bin/pint --test`.
