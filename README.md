# SBAuth

SBAuth adalah starter kit autentikasi Laravel berbasis Bootstrap. Ini merupakan adaptasi tidak resmi dari Laravel Breeze — tampilan default yang menggunakan Tailwind telah diubah sepenuhnya ke tampilan SB Admin 2 menggunakan Bootstrap, tanpa Tailwind. Tujuannya memudahkan developer yang ingin memulai proyek Laravel dengan UI Bootstrap lengkap.

## Ringkasan

SBAuth menyediakan scaffold autentikasi (login, register, password reset, email verification) yang siap pakai dan dilengkapi dengan template admin SB Admin 2 berbasis Bootstrap. Semua tampilan Blade, komponen frontend, dan aset telah dimigrasikan dari Tailwind ke Bootstrap agar konsisten bagi developer yang memilih ekosistem Bootstrap.

## Fitur utama

- Autentikasi: login, register, forgot password, reset password, email verification
- UI full Bootstrap menggunakan SB Admin 2 (dashboard, sidebar, form, tabel, dll.)
- Blade views siap pakai dan komponen UI terintegrasi
- Routes, controllers, dan requests mengikuti pola Laravel Breeze untuk kemudahan adaptasi
- Migration dan seeder dasar untuk pengguna
- Build aset dengan npm + Bootstrap (tanpa Tailwind)
- Ringan dan mudah dikustomisasi sebagai starter kit

> Pernyataan: SBAuth adalah proyek non-resmi yang mengadaptasi konsep Laravel Breeze untuk menyediakan opsi Bootstrap/SB Admin 2.

## Persyaratan

- PHP >= 8.x
- Composer
- Node.js & npm

## Instalasi singkat

1. Clone repo

```bash
git clone https://github.com/InstaCodex/SBAuth
cd SBAuth
```

2. Install dependensi PHP

```bash
composer install
cp .env.example .env
php artisan key:generate
```

3. Migrasi database

```bash
php artisan migrate
```

4. Install dependensi Node & build aset

```bash
npm install
npm install bootstrap @popperjs/core
npm run dev
```

5. Jalankan server lokal

```bash
php artisan serve
```

## Struktur penting

- `resources/views` — view Blade yang sudah dimodifikasi untuk Bootstrap
- `resources/js` / `resources/css` — aset frontend, build via `npm run dev`
- `app/Http/Controllers` — controller autentikasi dan profil
- `database/migrations` — migration default untuk users

## Screenshots
<img src="https://raw.githubusercontent.com/InstaCodex/InstaCodex/refs/heads/main/Assets/Laravel%20(2).png" alt="Profile Image" width="100%">

---