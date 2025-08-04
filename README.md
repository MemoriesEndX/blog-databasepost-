
---
````markdown
# Blog DatabasePost 📝

Proyek Laravel sederhana yang dikembangkan selama kegiatan magang. Fokus utama dari aplikasi ini adalah **pengelolaan data postingan blog**, termasuk fitur pencarian, kategori, dan relasi antar data.

---

## 🚀 Fitur yang Diterapkan

- Struktur folder Laravel (MVC)
- Blade Templating Engine & Blade Component
- Menampilkan data ke halaman (View)
- Eloquent Model & Relasi antar tabel:
  - One to Many
  - One to One
- Database Migration & Seeder
- Model Factories untuk dummy data
- Pencarian data postingan (Search)
- Kategori Postingan (Post Category)
- Deteksi & penyelesaian N+1 Problem
- Perbaikan & redesign sederhana pada UI

---

## 🛠️ Instalasi Proyek ke Lokal

### 1. Clone Repository
```bash
git clone https://github.com/MemoriesEndX/blog-databasepost-.git
cd blog-databasepost-
````

### 2. Install Dependency Backend

```bash
composer install
```

### 3. Salin File `.env` dan Generate APP\_KEY

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Atur Database di `.env`

Pastikan sudah membuat database di MySQL. Edit bagian berikut:

```env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migrasi dan Seeder

```bash
php artisan migrate --seed
```

### 6. Jalankan Server Lokal

```bash
php artisan serve
```

Akses aplikasi di `http://127.0.0.1:8000`

---

## ⚙️ Frontend Development (Jika Pakai Vite)

```bash
npm install
npm run dev
```

> Jika mengalami error saat menjalankan `npm run dev` di PowerShell, jalankan perintah berikut sebagai Administrator:

```powershell
Set-ExecutionPolicy RemoteSigned
```
<img width="1919" height="1079" alt="Screenshot 2025-08-04 202804" src="https://github.com/user-attachments/assets/48ca280e-6ee2-4ea5-9a98-487f1da05b8d" />

<img width="769" height="1034" alt="image" src="https://github.com/user-attachments/assets/c26ad019-72ed-4fcc-9531-7df25aff989c" />




