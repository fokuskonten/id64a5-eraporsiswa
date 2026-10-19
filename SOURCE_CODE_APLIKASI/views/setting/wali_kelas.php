<section class="content-header">
    <h1>
        Pengaturan Rombel & Wali Kelas
        <small>Penetapan Wali Kelas dan Pembagian Anggota Rombel Siswa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Pengaturan</a></li>
        <li class="active">Wali Kelas</li>
    </ol>
</section>

<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-sitemap"></i> Distribusi Rombongan Belajar</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah Anggota Rombel</button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr class="bg-gray-light">
                            <th style="width: 40px; text-align: center;">No</th>
                            <th>Tahun Pelajaran</th>
                            <th>Kelas</th>
                            <th>Nama Siswa</th>
                            <th>Wali Kelas</th>
                            <th style="width: 100px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($rombel as $r): ?>
                        <tr>
                            <td style="text-align: center;"><?=$no++;?></td>
                            <td><span class="label label-default"><?=$r['tahun_akademik'];?></span></td>
                            <td><span class="label label-primary"><?=$r['kelas_nama'];?></span></td>
                            <td><strong><?=$r['siswa_nama'];?></strong></td>
                            <td><?=$r['guru_nama'];?></td>
                            <td style="text-align: center;">
                                <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
