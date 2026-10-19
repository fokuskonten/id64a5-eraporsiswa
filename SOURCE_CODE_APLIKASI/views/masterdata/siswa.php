<section class="content-header">
    <h1>
        Data Siswa
        <small>Pengelolaan Biodata dan Data Pokok Peserta Didik</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Data Master</a></li>
        <li class="active">Siswa</li>
    </ol>
</section>

<section class="content">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-users"></i> Daftar Peserta Didik Aktif</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Siswa</button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr class="bg-gray-light">
                            <th style="width: 40px; text-align: center;">No</th>
                            <th>NIS / NISN</th>
                            <th>Nama Lengkap Siswa</th>
                            <th>L/P</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Nama Orang Tua / Wali</th>
                            <th>Status Anak</th>
                            <th style="width: 100px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($siswa as $s): ?>
                        <tr>
                            <td style="text-align: center;"><?=$no++;?></td>
                            <td>
                                <b><?=$s['siswa_nis'];?></b><br>
                                <small class="text-muted">NISN: <?=$s['siswa_nisn'];?></small>
                            </td>
                            <td><strong><?=$s['siswa_nama'];?></strong></td>
                            <td style="text-align: center;"><span class="badge <?=$s['siswa_jk'] == 'L' ? 'bg-blue' : 'bg-maroon';?>"><?=$s['siswa_jk'];?></span></td>
                            <td><?=$s['siswa_tmp_lhr'];?>, <?=date('d/m/Y', strtotime($s['siswa_tgl_lhr']));?></td>
                            <td>
                                Ayah: <?=$s['siswa_nama_ayah'];?><br>
                                <small class="text-muted">Ibu: <?=$s['siswa_nama_ibu'];?></small>
                            </td>
                            <td><span class="label label-default"><?=$s['siswa_sts_anak'];?></span></td>
                            <td style="text-align: center;">
                                <button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
