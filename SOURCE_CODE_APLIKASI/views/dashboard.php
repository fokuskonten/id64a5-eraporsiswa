<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard E-Rapor Siswa
        <small>Sistem Informasi Penilaian & Raport Kurikulum Terpadu</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Ringkasan Statistik</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="callout callout-info" style="border-left-color: #0073b7; background-color: #f4f8fa !important; color: #333 !important; border: 1px solid #d2d6de; border-left: 5px solid #0073b7;">
        <h4><i class="fa fa-info-circle text-primary"></i> Tahun Pelajaran Aktif: <strong><?=isset($tahun_aktif['tahun_akademik']) ? $tahun_aktif['tahun_akademik'] : '2026/2027';?> - Semester <?=isset($tahun_aktif['semester']) ? $tahun_aktif['semester'] : 'Ganjil';?></strong></h4>
        <p>Sistem E-Rapor Siswa telah siap digunakan untuk pengelolaan data master, penugasan mengajar guru, entri capaian kompetensi, serta pencetakan lembar raport kurikulum nasional.</p>
    </div>

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?=$jml_guru;?></h3>
                    <p>Total Dewan Guru</p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <a href="<?=base_url('masterdata/guru');?>" class="small-box-footer">Kelola Data Guru <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?=$jml_siswa;?></h3>
                    <p>Total Siswa Aktif</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="<?=base_url('masterdata/siswa');?>" class="small-box-footer">Kelola Data Siswa <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?=$jml_kelas;?></h3>
                    <p>Rombongan Belajar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-institution"></i>
                </div>
                <a href="<?=base_url('masterdata/kelas');?>" class="small-box-footer">Kelola Data Kelas <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?=$jml_user;?></h3>
                    <p>Pengguna Terdaftar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-secret"></i>
                </div>
                <a href="<?=base_url('masterdata/user');?>" class="small-box-footer">Kelola Akun Akses <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-laptop"></i> Informasi Modul Operasional E-Rapor</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="info-box bg-gray-light">
                                <span class="info-box-icon bg-blue"><i class="fa fa-book"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Penilaian Siswa</span>
                                    <span class="info-box-number">TP, UH, PTS, PAS</span>
                                    <div class="progress"><div class="progress-bar bg-blue" style="width: 100%"></div></div>
                                    <span class="progress-description">Penghitungan otomatis predikat & deskripsi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="info-box bg-gray-light">
                                <span class="info-box-icon bg-green"><i class="fa fa-print"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Cetak Raport</span>
                                    <span class="info-box-number">Format Resmi</span>
                                    <div class="progress"><div class="progress-bar bg-green" style="width: 100%"></div></div>
                                    <span class="progress-description">Cetak lembar raport per siswa lengkap</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted" style="margin-top: 10px;">
                        Aplikasi didukung dengan modul autentikasi terverifikasi, manajemen data multi-rombel, rekapitulasi nilai dinamis, serta kompatibilitas penuh dengan sistem PWA offline-first FokusKonten.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-shield"></i> Status Lingkungan Sistem</h3>
                </div>
                <div class="box-body">
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Framework</b> <span class="pull-right badge bg-blue">CodeIgniter 3.1.11</span>
                        </li>
                        <li class="list-group-item">
                            <b>Engine PHP</b> <span class="pull-right badge bg-green">PHP 8.2 Compatible</span>
                        </li>
                        <li class="list-group-item">
                            <b>Database</b> <span class="pull-right badge bg-aqua">MariaDB 10.4+ / MySQL</span>
                        </li>
                        <li class="list-group-item">
                            <b>Distribusi PWA</b> <span class="pull-right badge bg-purple">FokusKonten PWA Ready</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>