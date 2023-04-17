<?php

return [
    'userManagement' => [
        'title'          => 'Manajemen User',
        'title_singular' => 'Manajemen User',
    ],
    'permission' => [
        'title'          => 'Izin',
        'title_singular' => 'Izin',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Peranan',
        'title_singular' => 'Peranan',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Daftar Pengguna',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'ruangan' => [
        'title'          => 'Ruangan',
        'title_singular' => 'Ruangan',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'nama_ruangan'        => 'Nama Ruangan',
            'nama_ruangan_helper' => ' ',
            'kapasitas'           => 'Kapasitas',
            'kapasitas_helper'    => ' ',
            'lokasi'              => 'Lokasi',
            'lokasi_helper'       => ' ',
            'deskripsi'           => 'Deskripsi',
            'deskripsi_helper'    => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'gambar'              => 'Gambar',
            'gambar_helper'       => ' ',
            'status'              => 'Status',
            'status_helper'       => ' ',
        ],
    ],
    'barang' => [
        'title'          => 'Barang',
        'title_singular' => 'Barang',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'nama_barang'        => 'Nama Barang',
            'nama_barang_helper' => ' ',
            'kapasitas'          => 'Kapasitas',
            'kapasitas_helper'   => ' ',
            'lokasi'             => 'Lokasi',
            'lokasi_helper'      => ' ',
            'deskripsi'          => 'Deskripsi',
            'deskripsi_helper'   => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'gambar'             => 'Gambar',
            'gambar_helper'      => ' ',
        ],
    ],
    'manajemenPeminjaman' => [
        'title'          => 'Manajemen Peminjaman',
        'title_singular' => 'Manajemen Peminjaman',
    ],
    'peminjamanRuangan' => [
        'title'          => 'Peminjaman Ruangan',
        'title_singular' => 'Peminjaman Ruangan',
    ],
    'peminjamanStudioDubbing' => [
        'title'          => 'Peminjaman Studio Dubbing',
        'title_singular' => 'Peminjaman Studio Dubbing',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'ruangan'                => 'Ruangan',
            'ruangan_helper'         => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
            'nama'                   => 'Nama Tenant',
            'nama_helper'            => ' ',
            'ktp'                    => 'No. Ktp',
            'ktp_helper'             => ' ',
            'alamat'                 => 'Alamat',
            'alamat_helper'          => ' ',
            'no_hp'                  => 'No Hp',
            'no_hp_helper'           => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'booking'                => 'Tanggal Booking',
            'booking_helper'         => ' ',
            'selesai_booking'        => 'Selesai Booking',
            'selesai_booking_helper' => ' ',
            'persetujuan'            => 'Dengan ini saya bertanggung jawab atas kualitas dan kuantitas sarana dan prasarana pda Studio Dubbing Selama Masa Peminjaman. Dan Bersedia untuk Bertanggung Jawab apabila ada kerusakan/kehilangan',
            'persetujuan_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'operator'               => 'Dengan Operator/tidak',
            'operator_helper'        => ' ',
        ],
    ],
    'peminjamanRuangKacaBitc' => [
        'title'          => 'Peminjaman Ruang Kaca BITC',
        'title_singular' => 'Peminjaman Ruang Kaca BITC',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'ruangan'                => 'Ruangan',
            'ruangan_helper'         => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
            'nama'                   => 'Nama Tenant',
            'nama_helper'            => ' ',
            'ktp'                    => 'No Ktp',
            'ktp_helper'             => ' ',
            'alamat'                 => 'Alamat',
            'alamat_helper'          => ' ',
            'no_hp'                  => 'No HP',
            'no_hp_helper'           => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'tanggal_booking'        => 'Tanggal Booking',
            'tanggal_booking_helper' => ' ',
            'selesai_booking'        => 'Selesai Booking',
            'selesai_booking_helper' => ' ',
            'jumlah'                 => 'Jumlah Peserta',
            'jumlah_helper'          => ' ',
            'aggrement'              => 'Dengan ini saya bertanggung jawab atas kualitas dan kuantitas sarana dan prasarana pada Ruang Rapat Selama Masa Peminjaman. Dan Bersedia untuk Bertanggung Jawab apabila ada kerusakan/kehilangan',
            'aggrement_helper'       => ' ',
            'infokus'                => 'Dengan Infokus',
            'infokus_helper'         => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'peminjamanCh' => [
        'title'          => 'Peminjaman Conventional Hall',
        'title_singular' => 'Peminjaman Conventional Hall',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'ruangan'              => 'Ruangan',
            'ruangan_helper'       => ' ',
            'user'                 => 'User',
            'user_helper'          => ' ',
            'ktp'                  => 'No KTP',
            'ktp_helper'           => ' ',
            'alamat'               => 'Alamat',
            'alamat_helper'        => ' ',
            'no_hp'                => 'No HP',
            'no_hp_helper'         => ' ',
            'email'                => 'Email',
            'email_helper'         => ' ',
            'tujuan'               => 'Tujuan Peminjaman',
            'tujuan_helper'        => ' ',
            'booking'              => 'Tanggal Booking',
            'booking_helper'       => ' ',
            'selesai'              => 'Selesai Booking',
            'selesai_helper'       => ' ',
            'jumlah'               => 'Jumlah Peserta',
            'jumlah_helper'        => ' ',
            'infokus'              => 'Dengan Infokus',
            'infokus_helper'       => ' ',
            'persetujuan'          => 'Bersedia Membayar Retribusi Sebesar Rp. 2.000.000,- ',
            'persetujuan_helper'   => ' ',
            'persetujuan_2'        => 'Dengan ini saya bertanggung jawab atas kualitas dan kuantitas sarana dan prasarana pada Ruang Rapat Selama Masa Peminjaman. Dan Bersedia untuk Bertanggung Jawab apabila ada kerusakan/kehilangan',
            'persetujuan_2_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'nama'                 => 'Nama Peminjam',
            'nama_helper'          => ' ',
        ],
    ],
    'studioFoto' => [
        'title'          => 'Studio Foto',
        'title_singular' => 'Studio Foto',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'pemohon'           => 'Nama Pemohon',
            'pemohon_helper'    => ' ',
            'alamat'            => 'Alamat',
            'alamat_helper'     => ' ',
            'wa'                => 'No Whatsapp',
            'wa_helper'         => ' ',
            'produk'            => 'Nama Produk',
            'produk_helper'     => ' ',
            'profil'            => 'Profil Singkat Produk',
            'profil_helper'     => ' ',
            'konten'            => 'Konten Promosi yang Akan dibuat',
            'konten_helper'     => ' ',
            'ktp'               => 'Foto KTP',
            'ktp_helper'        => 'Maksimal 2  Mb',
            'oss'               => 'No Oss',
            'oss_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'peminjamanBarang' => [
        'title'          => 'Peminjaman Barang',
        'title_singular' => 'Peminjaman Barang',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'barang'            => 'Barang',
            'barang_helper'     => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'nama_usaha'        => 'Nama Usaha',
            'nama_usaha_helper' => ' ',
            'alamat'            => 'Alamat',
            'alamat_helper'     => ' ',
            'name'              => 'Name Pemilik',
            'name_helper'       => ' ',
            'ktp'               => 'No KTP',
            'ktp_helper'        => ' ',
            'booking'           => 'Tanggal Booking',
            'booking_helper'    => ' ',
            'tujuan'            => 'Tujuan Booking',
            'tujuan_helper'     => ' ',
            'no_hp'             => 'No HP',
            'no_hp_helper'      => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'pendaftaran' => [
        'title'          => 'Pendaftaran',
        'title_singular' => 'Pendaftaran',
    ],
    'penelitian' => [
        'title'          => 'Pendaftaran Penelitian',
        'title_singular' => 'Pendaftaran Penelitian',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'nama'              => 'Nama Lengkap',
            'nama_helper'       => ' ',
            'no_hp'             => 'No HP',
            'no_hp_helper'      => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'univ'              => 'Asal Perguruan Tinggi',
            'univ_helper'       => ' ',
            'alamat'            => 'Alamat',
            'alamat_helper'     => ' ',
            'lama'              => 'Lama Penelitian',
            'lama_helper'       => ' ',
            'judul'             => 'Judul Penelitian',
            'judul_helper'      => ' ',
            'kesbang'           => 'Surat Pengantar ke Kesbang',
            'kesbang_helper'    => ' ',
            'hasil'             => 'Hasil Penelitian',
            'hasil_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'kp' => [
        'title'          => 'Pendaftaran Kerja Praktek',
        'title_singular' => 'Pendaftaran Kerja Praktek',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'nama'              => 'Nama Lengkap',
            'nama_helper'       => ' ',
            'univ'              => 'Asal Perguruan Tinggi',
            'univ_helper'       => ' ',
            'no_hp'             => 'No HP',
            'no_hp_helper'      => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'alamat'            => 'Alamat',
            'alamat_helper'     => ' ',
            'lama'              => 'Lama Kerja Praktek',
            'lama_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'kesbang'           => 'Surat Pengantar ke Kesbang',
            'kesbang_helper'    => ' ',
            'hasil'             => 'Hasil Kerja Praktek',
            'hasil_helper'      => ' ',
        ],
    ],
    'pkl' => [
        'title'          => 'Pendaftaran Pkl',
        'title_singular' => 'Pendaftaran Pkl',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'user'                => 'User',
            'user_helper'         => ' ',
            'nama'                => 'Nama Lengkap',
            'nama_helper'         => ' ',
            'asal_sekolah'        => 'Asal Sekolah',
            'asal_sekolah_helper' => ' ',
            'alamat'              => 'Alamat',
            'alamat_helper'       => ' ',
            'no_hp'               => 'No Hp',
            'no_hp_helper'        => ' ',
            'email'               => 'Email',
            'email_helper'        => ' ',
            'lama'                => 'Lama Kerja Pkl',
            'lama_helper'         => ' ',
            'kesbang'             => 'Kesbang',
            'kesbang_helper'      => ' ',
            'hasil'               => 'Hasil Karya',
            'hasil_helper'        => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],

];