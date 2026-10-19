<section class="content-header">
    <h1>
        Data Guru & Pendidik
        <small>Pengelolaan Biodata Dewan Guru</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Data Master</a></li>
        <li class="active">Guru</li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-graduation-cap"></i> Daftar Tenaga Pendidik Terdaftar</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Guru</button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr class="bg-gray-light">
                            <th style="width: 40px; text-align: center;">No</th>
                            <th>NIP</th>
                            <th>Nama Lengkap & Gelar</th>
                            <th>L/P</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Alamat Domisili</th>
                            <th style="width: 100px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($guru as $g): ?>
                        <tr>
                            <td style="text-align: center;"><?=$no++;?></td>
                            <td><span class="label label-info"><?=$g['guru_nip'];?></span></td>
                            <td><strong><?=$g['guru_nama'];?></strong></td>
                            <td style="text-align: center;"><span class="badge <?=$g['guru_jk'] == 'L' ? 'bg-blue' : 'bg-maroon';?>"><?=$g['guru_jk'];?></span></td>
                            <td><?=$g['guru_tmp_lhr'];?>, <?=date('d/m/Y', strtotime($g['guru_tgl_lhr']));?></td>
                            <td><?=$g['guru_alamat'];?></td>
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
