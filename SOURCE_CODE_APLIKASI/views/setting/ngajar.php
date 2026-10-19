<section class="content-header">
    <h1>
        Penugasan Mengajar
        <small>Distribusi Pengampu Mata Pelajaran & Nilai KKM</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Pengaturan</a></li>
        <li class="active">Mengajar</li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-graduation-cap"></i> Matriks Penugasan Guru & KKM</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Atur Penugasan</button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr class="bg-gray-light">
                            <th style="width: 40px; text-align: center;">No</th>
                            <th>Tahun Akademik</th>
                            <th>Nama Guru / NIP</th>
                            <th>Mata Pelajaran</th>
                            <th style="width: 80px; text-align: center;">KKM</th>
                            <th style="width: 100px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($mengajar as $m): ?>
                        <tr>
                            <td style="text-align: center;"><?=$no++;?></td>
                            <td><span class="label label-info"><?=$m['tahun_akademik'];?> (<?=$m['semester'];?>)</span></td>
                            <td>
                                <strong><?=$m['guru_nama'];?></strong><br>
                                <small class="text-muted">NIP: <?=$m['guru_nip'];?></small>
                            </td>
                            <td><strong><?=$m['mapel_nama'];?></strong></td>
                            <td style="text-align: center;"><span class="badge bg-green"><?=$m['kkm'];?></span></td>
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
