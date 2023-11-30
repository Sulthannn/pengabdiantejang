<?php

require_once ROOTPATH . 'vendor/htmlpurifier/library/HTMLPurifier.auto.php';;

function change_date_to_indonesian($params){
    // Ubah ke dalam objek DateTime
    $dateObj = new DateTime($params);

    // Definisikan array untuk nama hari dan bulan dalam Bahasa Indonesia
    $namaHari = array(
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu"
    );

    $namaBulan = array(
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    );

    // Dapatkan nama hari, tanggal, bulan, dan waktu dalam format yang diinginkan
    $namaHariIndonesia = $namaHari[$dateObj->format('w')];
    $tanggal = $dateObj->format('d');
    $bulanIndonesia = $namaBulan[$dateObj->format('n') - 1];
    $waktu = $dateObj->format('H:i:s');

    // Gabungkan semuanya dalam format yang diinginkan
    $formatBaru = "$namaHariIndonesia, $tanggal $bulanIndonesia, $waktu";

    return $formatBaru;
}

function purify_html($dirty_html){    
    $config = HTMLPurifier_Config::createDefault();
    $config->set('URI.AllowedSchemes', array('data' => true));
    $purifier = new HTMLPurifier($config);

    $clean_html = $purifier->purify($dirty_html);

    return $clean_html;
}