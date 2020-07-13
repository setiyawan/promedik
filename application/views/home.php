<!doctype html>
<html lang="id">

<?php $this->view('header'); ?>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?=base_url()?>" style="font-weight: 500; font-size: 32px"> 
                        	<img src="<?= base_url() ?>asset/img/icon/logo_1.png" style="max-width: 40px;" alt="logo"> PROMEDIK
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <!-- <li class="nav-item active">
                                    <a class="nav-link" href="index.html"></a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#about_us">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#feature">Layanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact_us">Kontak</a>
                                </li>
                                <li>
                        			<a class="btn-success btn-whatsapp" href="https://wa.me/6285235060891" target="_blank"><img src="<?= base_url() ?>asset/img/icon/whatsapp.svg" style="width: 30px" alt="wa"> Whatsapp</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
     <a class="btn-success whatsapp-launcher" data-toggle="tooltip" title="Hubungi kami via Whatsapp" href="https://wa.me/6285235060891" target="_blank"><img style="margin: 5px 0 0 5px; display: block; width: 50px;" src="<?= base_url() ?>asset/img/icon/whatsapp.svg" alt="wa"></a> 

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Promedik</h5>
                            <h1>Rekam Medis Elektronik</h1>
                            <p>Memudahkan klinik kamu dalam melakukan pencatan pasien, memantau riwayat rekam medis dan manajemen stok obat secara online</p>
                            <a href="#about_us" class="btn_2">Cari tahu lebih lanjut</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="<?= base_url() ?>asset/img/banner_img.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us padding_top" id="about_us">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="<?= base_url() ?>asset/img/ability_img.png" alt="ability">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_text">
                        <h2>Tentang Kami</h2>
                        <p>Promedik adalah layanan rekam medis elektronik yang dapat menunjang aktivitas klinik kamu secara mudah, aman dan dapat diakses kapan saja. 
                        Kamu tidak perlu khawatir lagi masalah riwayat pasien, karena promedik sudah menyediakan layanan yang dapat melihat riwayat pasien dan bagaimana progress kesehatannya. Tidak perlu ada pencatatan secara manual, karena semua data pasien kamu dapat diakses secara online dan kami menjamin kerahasiaan & keamanan data pasien</p>
                        <br>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="<?= base_url() ?>asset/img/icon/banner_1.png" alt="secure">
                                <h5>Kemanan Data</h5>
                            </div>
                            <div class="single_item">
                                <img src="<?= base_url() ?>asset/img/icon/banner_2.png" alt="easy">
                                <h5>Mudah Digunakan</h5>
                            </div>
                            <div class="single_item">
                                <img src="<?= base_url() ?>asset/img/icon/banner_3.png" alt="digital">
                                <h5>Berbasis Digital</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part padding_top" id="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Layanan Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url() ?>asset/img/icon/feature_1.png" alt="1"></span>
                            <h4>Manajemen Data Pasien</h4>
                            <p>Berisi data pribadi pasien mulai dari nama, pekerjaan, golongan darah hingga alamat rumah dengan menerapkan prinsip kerahasiaan data</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url() ?>asset/img/icon/feature_2.png" alt="2"></span>
                            <h4>Stok Obat</h4>
                            <p>Tidak perlu khawatir dalam manajemen obat, karena stok sudah otomatis terupdate. Bahkan kamu bisa memantau obat kadaluarsa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="<?= base_url() ?>asset/img/service.png" alt="3">
                        </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url() ?>asset/img/icon/feature_3.png" alt="4"></span>
                            <h4>Riwayat Rekam Medis</h4>
                            <p>Simple, lengkap dan sesuai dengan kaidah SOAP <i>(subjective, objective, assesment, planing)</i> dalam pencatatan rekam medis </p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url() ?>asset/img/icon/feature_4.png" alt="5"></span>
                            <h4>Laporan Berkala</h4>
                            <p>Promedik mempunyai dashboard yang dapat memantau aktifitas klinik baik dalam periode mingguan maupun bulanan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- Gallery -->
    <section class="gallery_part" id="product">
        <div class="container">
            <div class="section-top-border">
                <h3>Snapshot</h3>
                <div class="row gallery-item">
                    <div class="col-md-6">
                        <a href="<?= base_url() ?>asset/img/product/patient_detail.png" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(<?= base_url() ?>asset/img/product/patient_detail.png);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url() ?>asset/img/product/patient_list.png" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(<?= base_url() ?>asset/img/product/patient_list.png);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url() ?>asset/img/product/medical_record_detail.png" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(<?= base_url() ?>asset/img/product/medical_record_detail.png);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url() ?>asset/img/product/medical_record_list.png" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(<?= base_url() ?>asset/img/product/medical_record_list.png);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url() ?>asset/img/product/medicine_detail.png" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(<?= base_url() ?>asset/img/product/medicine_detail.png);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url() ?>asset/img/product/medicine_list.png" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(<?= base_url() ?>asset/img/product/medicine_list.png);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Gallery -->
    <?php
	    $alert = $this->session->flashdata('alert');
	?>
    <!--::contact_part start::-->
    <section class="contact_part section_padding" id="contact_us">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="contact_part_iner">
                        <form action="contact/add_new_mail" method="post">
                            <h2>Request Akun Demo & Pricelist</h2>
                            <?php if ($alert['is_alert']) { ?>
                            <p  style="color: black;"> <?= $alert['message'] ?> </p>
                        	<?php } ?>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input name="name" type="text" required class="form-control" placeholder="Nama">
                                </div>
                                <div class="form-group col-md-6">
                                    <input name="email" type="email" required class="form-control"
                                        placeholder="Alamat email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input name="phone_number" type="number" class="form-control" placeholder="08123456789">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="message" class="form-control" required id="Textarea" rows="4"
                                        placeholder="Tulis pesan kamu disini"></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <button type="submit" class="btn_2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="<?= base_url() ?>asset/img/reservation.png" alt="reservation" class="reservation_img_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::contact_part end::-->

    <section class="container">
        <div class="qna-area">
            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-1">Apa itu Rekam Medis?</div>
            <div class="collapsible_content collapse" id="collapse-1">
                <p>Dalam artian sederhana rekam medis adalah catatan dan dokumen yang berisi tentang kondisi keadaan pasien, tetapi jika dikaji lebih mendalam rekam medis mempunyai makna yang Iebih kompleks tidak hanya catatan biasa, karena didalam catatan tersebut sudah tercermin segala informasi menyangkut seorang pasien yang akan dijadikan dasar didalam menentukan tindakan Iebih lanjut dalam upaya pelayanan maupun tindakan medis Iainnya yang diberikan kepada seorang pasien yang datang ke rumah sakit.
                <br>
                Menurut PERMENKES No: 269/MENKES/PER/III/2008 Tentang Rekam Medis, Rekam Medis adalah berkas yang berisikan catatan dan dokumen tentang identitas pasien, pemeriksaan, pengobatan, tindakan dan pelayanan lain yang telah diberikan kepada pasien.
                <br>
                <a href="https://ti.ukdw.ac.id/ojs/index.php/eksis/article/view/383"> Handiwidjojo (2009) </a>, menuliskan bahwa Rekam medis adalah keterangan baik yang tertulis maupun terekam tentang identitas, anamnesa, penentuan fisik, laboratorium, diagnosa segala pelayanan dan tindakan medik yang diberikan kepada pasien.  Rekam medis mempunyai pengertian yang sangat luas, tidak hanya sekedar kegiatan pencatatan, akan tetapi mempunyai pengertian sebagai suatu sistem penyelenggaraan rekam medis mulai dari pencatatan selama pasien mendapatkan pelayanan medik, dilanjutkan dengan penyelenggaraan, penyimpanan serta pengeluaran berkas rekam medis dari tempat penyimpanan untuk melayani permintaan/peminjaman oleh pasien atau untuk keperluan lainnya.
                </p>
            </div>

            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-2">Rekam Medis Elektronik</div>
            <div class="collapsible_content collapse" id="collapse-2">
                <p> Rekam Medis Elektronik (RME) atau rekam medis digital adalah penggunaan perangkat teknologi informasi untuk pengumpulan,penyimpanan, pengolahan serta peng-akses-an data yang tersimpan pada rekam medis pasien dirumah sakit dalam suatu sistem manajemen basis data yang menghimpun berbagai sumber datamedis. Bahkan beberapa rumah sakit modern telah menggabungkan RME dengan aplikasi Sistem Informasi Manajemen Rumah Sakit(SIMRS) yang merupakan aplikasi induk yang tidak hanyaberisi RME tetapi sudah ditambah dengan fitur-fitur seperti administrasi, billing, dokumentasi keperawatan, pelaporan dan dashboardscore card.
                <br>
                <a href="https://jsi.cs.ui.ac.id/index.php/jsi/article/view/544"> Andriani (2017) </a> menyebutkan bahwa Rekam Medis Elektronik (RME) merupakan sistem informasi kesehatan terkomputerisasi yang berisi data sosial dan data medis pasien, serta dapat dilengkapi dengan sistem pendukung keputusan. RME dapat membantu manajemen pelayanan kesehatan pasien dengan lebih baik
                <br>
                RME juga dapat diartikan sebagai lingkungan aplikasi yang tersusun atas penyimpanan dataklinis, sistem pendukung keputusan klinis, standarisasi istilah medis, entry data  terkomputerisasi, serta dokumentasi medis dan farmasi.</p>
            </div>

            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-3">Dasar Hukum</div>
            <div class="collapsible_content collapse" id="collapse-3">
                <p> Rekam medis merupakan kegiatan yang diwajibkan dalam penyelenggaraaan pelayanan kesehatan sebagaimana diatur dalam peraturan perundang-undangan yang menjadi dasar hukum pelaksanaan kegiatan rekam medis. Dasar hukum pelaksanaan rekam medis elektronik disamping peraturan perundang-undangan yang mengatur mengenai rekam medis, lebih khusus lagi diatur dalam Permenkes No 269 Tahun 2008 tentang  Rekam Medis pasal 2 : <br>
                1) Rekam medis harus dibuat secara tertulis lengkap, dan jelas atau secara elektronik, <br>
                2) Penyelenggaraan rekam medis dengan menggunakan teknologi informasi elektronik diatur lebih lanjut dengan peraturan tersendiri.</p>
            </div>
         
            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-4">Kerahasiaan Data</div>
            <div class="collapsible_content collapse" id="collapse-4">
                <p> 
                Informasi medis hanya dimasukan ke dalam komputer oleh personil yang berwenang.
                Data pasien harus dijaga dengan ketat. Setiap personil tertentu hanya bisa mengakses data tertentu yang sesuai dengan menggunakan security level tertentu.
                Tidak ada informasi yang dapat dibuka tanpa ijin pasien. Distribusi informasi medis harus dibatasi hanya kepada orang-orang yang berwenang saja. Orang-orang tersebut juga tidak diperkenankan memindah tangankan informasi tersebut kepada orang lain.
                Data yang melampaui batas waktu penyimpanan dapat dihapus setelah memberitahukan kepada dokter dan pasiennya (atau ahli warisnya)
                Terminal yang online hanya dapat digunakan oleh orang yang berwenang.
                </p>
            </div>


            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-5">Manfaat Rekam Medis Elektronik</div>
            <div class="collapsible_content collapse" id="collapse-5">
                <p>
                1) <b>Peningkatan produktivitas:</b> penggunaan sistem RME dapat mengurangi biaya. <br>
                2) <b>Efisiensi:</b> sistem RME yang diadopsi, dapat mengurangi sumber daya yang ada untuk meningkatkan kualitas pelayanan. <br>
                3) Mengurangi kejadian efek samping obat dalam perawatan rawat inap dan rawat jalan. <br>
                4) Penggunaan HIT untuk perawatan pencegahan jangka pendek. Sistem RME dapat mengintegrasikan rekomendasi berbasis bukti untuk layanan pencegahan (seperti ujian screening) dengan data pasien (seperti usia, jenis kelamin, dan riwayat keluarga) untuk mengidentifikasi pasien yang membutuhkan layanan tertentu. Sistem ini dapat mengingatkan penyedia layanan untuk menawarkan layanan selama kunjungan rutin dan mengingatkan pasien untuk jadwal perawatan.<br>
                5) Menggunakan HIT untuk penanganan penyakit kronis jangka pendek. <br>
                Sistem RME dapat menjadi instrumen selama proses pengelolaan penyakit (untuk pasien berisiko tinggi, sistem manajemen kasus membantu koordinasi alur kerja, termasuk komunikasi diantara beberapa spesialis dan pasien)
                 </p>
            </div>

            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-6">Isi Rekam Medis Elektronik</div>
            <div class="collapsible_content collapse" id="collapse-6">
                <p>Secara umum isi dari rekam medis terbagi menjadi dua kelompok yaitu:
                <br>
                1) <b>Data klinis atau data medis</b>, yaitu segala data tentang riwayat penyakit, hasil pemeriksaan fisik, diagnosis, pengobatan serta hasilnya, laporan dokter, perawat, hasil pemeriksaan laboratorium, rontgen, scanning, dan lain-lain-lain.
                <br>
                2) <b>Data demografi</b>, yaitu segala data pendukung yang tidak berhubungan secara langsung dengan data medis, seperti identitas, data social ekonomi, alamat, dan lain sebagainya. Isi dari rekam medis baik data klinis maupun data demografi  itu bersifat rahasia. Maka dari itu di setiap dokumen rekam medis selalu tertulis kata “RAHASIA”. Isi dari dokumen rekam medis itu bersifat rahasia, yaitu menjelaskan hubungan yang khusus antara pasien dengan dokter yang wajib dilindungi sesuai dengan kode etik kedokteran dan peraturan perundang-undangan yang berlaku.</p>

            </div>

            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-7">Pemasangan RME di Promdik.id</div>
            <div class="collapsible_content collapse" id="collapse-7">
                <p>Seperti yang sudah dijelaskan diatas, penggunaan RME di Promedik sangatlah mudah dan aman. Berikut langkah-langkahnya<br>
                1) Pengguna cukup melakukan registrasi ke Promedik <br>
                2) Melakukan pembayaran atau ujicoba secara GRATIS dengan menghubungi contact person<br>
                4) Menunggu proses aktivasi dari administrator<br>
                5) Klinik kamu siap dijalankan</p>
            </div>

            <div class="collapsible_title" data-toggle="collapse" data-target="#collapse-8">Kenapa harus Promedik.id?</div>
            <div class="collapsible_content collapse" id="collapse-8">
                <p> 
                1) Fitur lengkap dan mudah diakses sesuai dengan kaidah penulisan<br>
                2) Keamanan data pasien adalah prioritas bagi kami<br>
                3) Kamu akan mendapatkan FREE maintenance dan pendampingan selama beberapa bulan<br>
                4) Fast response<br>
                5) Fitur yang kami tawarkan dapat di custome dengan kebutuhan kamu<br>
                6) Dan masih banyak fitur unggulan lainnya<br>
                </p>
            </div>
       </div>
    </section>

    <!-- footer part start-->
	<?php $this->view('footer'); ?>

    <!-- footer part end-->
</body>

</html>