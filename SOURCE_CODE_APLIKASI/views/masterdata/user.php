<section class="content-header">
    <h1>
        Data Pengguna
        <small>Pengelolaan Akun Pengguna & Hak Akses</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Data Master</a></li>
        <li class="active">Pengguna</li>
    </ol>
</section>

<section class="content">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-users"></i> Akun Pengguna Terdaftar</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Tambah Pengguna</button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr class="bg-gray-light">
                            <th style="width: 40px; text-align: center;">No</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>No. Telp</th>
                            <th>Hak Akses (Role)</th>
                            <th style="width: 80px; text-align: center;">Status</th>
                            <th style="width: 100px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($users as $u): ?>
                        <tr>
                            <td style="text-align: center;"><?=$no++;?></td>
                            <td><span class="label label-default">@<?=$u['user_name'];?></span></td>
                            <td><strong><?=$u['user_fullname'];?></strong></td>
                            <td><?=$u['user_telp'];?></td>
                            <td>
                                <span class="badge <?=$u['user_type'] == 'administrator' ? 'bg-red' : ($u['user_type'] == 'super_user' ? 'bg-purple' : 'bg-blue');?>">
                                    <?=strtoupper($u['user_type']);?>
                                </span>
                            </td>
                            <td style="text-align: center;">
                                <span class="label label-success">Aktif</span>
                            </td>
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
