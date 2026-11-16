# Jatigede Explore --- Website Wisata Jatigede

**Jatigede Explore** adalah website sederhana untuk memperkenalkan dan
mempromosikan destinasi wisata di kawasan Jatigede, Sumedang. Website
ini dibuat menggunakan HTML, CSS, dan JavaScript yang ditulis langsung
di dalam satu file HTML.

## Fitur Website

-   **Navigasi:** menu Home, Tentang, Galeri, Video, Paket Wisata, dan
    Kontak.
-   **Halaman utama (Hero):** menampilkan judul promosi dan tombol untuk
    menuju bagian paket wisata.
-   **Tentang Jatigede:** berisi pengenalan singkat tentang kawasan
    wisata Jatigede.
-   **Galeri wisata:** menampilkan foto dan deskripsi beberapa tempat
    wisata, seperti Tegal Jarong, Green Garden, Bendungan Jatigede,
    Cisema, Panenjoan, dan Tanjung Duriat.
-   **Video wisata:** menampilkan video YouTube melalui pemutar tertanam
    dan menyediakan tombol untuk membuka video di YouTube.
-   **Paket wisata:** menampilkan gambar, deskripsi, dan harga paket
    Arung Jeram Jatigede, Desa Wisata Karedok, serta Wisata Air dan
    Perahu Waduk Jatigede.
-   **Kontak dan footer:** menampilkan informasi kontak dan navigasi
    tambahan.
-   **Desain responsif:** tata letak menyesuaikan layar desktop, tablet,
    dan ponsel.
-   **Menu mobile:** menu navigasi dapat dibuka dan ditutup pada layar
    kecil.

## Teknologi yang Digunakan

-   **HTML5** --- menyusun struktur dan konten halaman.
-   **CSS3** --- mengatur warna, tata letak, animasi hover, dan tampilan
    responsif.
-   **JavaScript** --- mengatur buka/tutup menu navigasi pada perangkat
    mobile.
-   **Google Fonts (Poppins)** --- menyediakan jenis huruf.
-   **Font Awesome 6.5.0** --- menyediakan ikon.
-   **YouTube** --- menampilkan video wisata.

## Struktur Folder

Pastikan susunan file kurang lebih seperti berikut:

``` text
jatigede-explore/
├── index.html
├── README.md
└── images/
    ├── background.jpeg
    ├── togal_jarong.jpeg
    ├── green_garden.jpg
    ├── bendungan_jatigede.jpeg
    ├── cisema.jpg
    ├── panenjoan.jpg
    ├── tanjung_duriat.jpeg
    ├── arung_jeram.jpg
    ├── wisata_karedok.jpg
    └── wisata_keliling_waduk.jpg
```

Nama file gambar harus sama persis dengan yang ditulis pada atribut
`src` di HTML. Jika nama atau ekstensi gambar berbeda, sesuaikan jalur
pada file HTML. Daftar di atas mengikuti nama gambar yang dirujuk oleh
kode; pastikan semua file gambar tersebut tersedia di folder `images`.

## Cara Menjalankan Website

1.  Simpan kode website dengan nama `index.html`.
2.  Buat folder bernama `images` di lokasi yang sama dengan
    `index.html`.
3.  Masukkan semua gambar yang digunakan ke dalam folder `images`.
4.  Buka file `index.html` menggunakan browser, misalnya Google Chrome,
    Microsoft Edge, atau Firefox.
5.  Pastikan perangkat terhubung ke internet agar Google Fonts, Font
    Awesome, gambar dari Unsplash, dan video YouTube dapat dimuat.

Website ini merupakan website statis sehingga tidak memerlukan database,
server backend, atau proses instalasi khusus untuk dijalankan secara
lokal.

## Bagian yang Bisa Disesuaikan

-   **Foto:** ubah nilai `src` pada tag `<img>` atau URL gambar latar
    sesuai foto yang ingin digunakan.
-   **Video:** ganti URL `src` pada elemen `<iframe>` dan URL pada
    tombol YouTube jika ingin memakai video lain.
-   **Informasi paket:** ubah nama paket, deskripsi, dan harga sesuai
    informasi terbaru dari pengelola wisata.
-   **Kontak:** ganti nomor telepon, alamat email, dan lokasi dengan
    informasi kontak yang benar.
-   **Warna dan tata letak:** sesuaikan aturan CSS yang berada di dalam
    tag `<style>`.
-   **Navigasi mobile:** kode JavaScript di bagian bawah file mengatur
    penambahan dan penghapusan class `active` pada menu navigasi.

## Catatan

-   Harga paket yang ditampilkan merupakan informasi yang tertulis pada
    contoh website dan perlu dikonfirmasi kembali kepada pengelola
    wisata sebelum digunakan sebagai informasi resmi.
-   Tombol **Lihat Detail** dan **Hubungi Kami** masih menggunakan
    `href="#"`, sehingga belum mengarah ke halaman detail atau layanan
    kontak tertentu. Ganti tautannya sesuai kebutuhan.
-   Video YouTube membutuhkan koneksi internet dan dapat gagal
    ditampilkan apabila pemilik video membatasi pemutaran melalui situs
    lain.
-   Pastikan penggunaan gambar memiliki izin atau sesuai dengan
    ketentuan sumber gambar masing-masing.

## Pengembangan Selanjutnya

Website ini dapat dikembangkan dengan memisahkan CSS ke file `style.css`
dan JavaScript ke file `script.js`, menambahkan halaman detail
destinasi, formulir pemesanan paket, integrasi WhatsApp, serta peta
lokasi wisata.

------------------------------------------------------------------------

**Nama proyek:** Jatigede Explore\
**Jenis proyek:** Website promosi wisata statis\
**Wilayah:** Jatigede, Sumedang
