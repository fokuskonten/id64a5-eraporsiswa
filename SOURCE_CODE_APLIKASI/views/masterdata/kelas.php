<section class="content-header">
    <h1>
        Data Kelas & Rombel
        <small>Daftar Tingkat dan Rombongan Belajar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Data Master</a></li>
        <li class="active">Kelas</li>
    </ol>
</section>

<section class="content">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-institution"></i> Rombongan Belajar Sekolah</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah Kelas</button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr class="bg-gray-light">
                            <th style="width: 40px; text-align: center;">No</th>
                            <th>Kode Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Sub Rombel / Peminatan</th>
                            <th style="width: 100px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($kelas as $k): ?>
                        <tr>
                            <td style="text-align: center;"><?=$no++;?></td>
                            <td><span class="label label-primary"><?=$k['kelas_kd'];?></span></td>
                            <td><strong><?=$k['kelas_nama'];?></strong></td>
                            <td><?=$k['kelas_sub_nama'];?></td>
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
