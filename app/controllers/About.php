<?php 

class About {
    public function index($nama = 'Sandhika', $pekerjaan = 'Dosen')
    {
        echo "halo nama saya adalah $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'about/page';
    }
}