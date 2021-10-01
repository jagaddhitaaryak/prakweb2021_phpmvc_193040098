<?php

class About {
    public function index($nama = 'Jagaddhita', $pekerjaan = 'Mahasiswa') 
    {
        echo "Hello, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}