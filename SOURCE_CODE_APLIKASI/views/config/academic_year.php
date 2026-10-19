<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tahun Pelajaran
        <small>Konfigurasi Tahun Akademik & Periode Semester</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Konfigurasi</a></li>
        <li class="active">Tahun Pelajaran</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-calendar"></i> Master Periode Akademik</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Periode</button>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr class="bg-gray-light">
                        <th style="width: 40px; text-align: center;">No</th>
                        <th>Tahun Pelajaran</th>
                        <th>Semester</th>
                        <th style="width: 120px; text-align: center;">Status Aktif</th>
                        <th style="width: 100px; text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($tahun)): $no = 1; foreach($tahun as $t): ?>
                    <tr>
                        <td style="text-align: center;"><?=$no++;?></td>
                        <td><strong><?=$t['tahun_akademik'];?></strong></td>
                        <td><?=$t['semester'];?></td>
                        <td style="text-align: center;">
                            <?php if($t['semester_aktif'] == 1): ?>
                                <span class="label label-success"><i class="fa fa-check"></i> Aktif</span>
                            <?php else: ?>
                                <span class="label label-default">Non-Aktif</span>
                            <?php endif; ?>
                        </td>
                        <td style="text-align: center;">
                            <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data tahun pelajaran</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>