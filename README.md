# Laravel Setup

Project Laravel untuk tugas Pemrograman Web.

## Langkah Instalasi

### 1. Install Homebrew

Install Homebrew melalui Terminal jika belum tersedia.

Setelah instalasi selesai, cek dengan:

```bash
brew --version
```

### 2. Install Composer

Install Composer menggunakan Homebrew:

```bash
brew install composer
```

Cek instalasi Composer:

```bash
composer --version
```

### 3. Membuat Project Laravel

Masuk ke folder tempat project akan dibuat:

```bash
cd ~/Documents
```

Kemudian buat project Laravel menggunakan Composer:

```bash
composer create-project laravel/laravel TugasWeb-P9-LaravelSetup
```

Masuk ke folder project:

```bash
cd TugasWeb-P9-LaravelSetup
```

### 4. Konfigurasi Database

Buat database MySQL melalui phpMyAdmin dengan nama:

```text
laravel_db
```

Kemudian buka file `.env` dan ubah konfigurasi database menjadi:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Menjalankan Migration

Pastikan MySQL pada XAMPP sedang berjalan, kemudian jalankan:

```bash
php artisan migrate
```

### 6. Menjalankan Laravel

Jalankan development server:

```bash
php artisan serve
```

Kemudian buka browser dan akses:

```text
http://127.0.0.1:8000
```

---

## Struktur Folder Laravel

```text
TugasWeb-P9-LaravelSetup/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/
│
├── .editorconfig
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── .npmrc
├── AGENTS.md
├── artisan
├── CLAUDE.md
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js
```

### Penjelasan Folder

- **`app/`** — Berisi kode utama aplikasi Laravel, seperti Controller dan Model.
- **`bootstrap/`** — Berisi file untuk proses awal aplikasi Laravel.
- **`config/`** — Berisi konfigurasi aplikasi Laravel.
- **`database/`** — Berisi file yang berkaitan dengan database, seperti migration.
- **`public/`** — Berisi file yang dapat diakses secara publik.
- **`resources/`** — Berisi view Blade dan asset frontend.
- **`routes/`** — Berisi route aplikasi, termasuk `web.php`.
- **`storage/`** — Digunakan untuk menyimpan file seperti log dan cache.
- **`tests/`** — Berisi file untuk pengujian aplikasi.
- **`vendor/`** — Berisi dependency PHP yang digunakan oleh Laravel.
- **`.env`** — Berisi konfigurasi environment dan database lokal.
- **`.env.example`** — Template konfigurasi environment.
- **`.gitignore`** — Menentukan file yang tidak perlu dimasukkan ke Git.
- **`artisan`** — Command-line interface Laravel.
- **`composer.json`** — Berisi konfigurasi project dan dependency PHP.
- **`composer.lock`** — Menyimpan versi dependency yang digunakan.
- **`package.json`** — Berisi dependency dan konfigurasi JavaScript/Node.js.
- **`phpunit.xml`** — Berisi konfigurasi PHPUnit.
- **`README.md`** — Berisi dokumentasi project.
- **`vite.config.js`** — Berisi konfigurasi Vite.
- **`AGENTS.md`** — Berisi instruksi untuk AI coding agents.
- **`CLAUDE.md`** — Berisi konfigurasi atau instruksi untuk Claude Code.
- **`.editorconfig`** — Menentukan aturan format dasar file.
- **`.gitattributes`** — Berisi konfigurasi atribut untuk Git.
- **`.npmrc`** — Berisi konfigurasi untuk npm.