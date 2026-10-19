<section class="content-header">
    <h1>
        Cetak Raport Siswa
        <small>Penerbitan Buku Laporan Hasil Belajar Peserta Didik</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Raport</a></li>
        <li class="active">Cetak Raport</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-print"></i> Panel Pencetakan Raport Semester</h3>
                    <div class="box-tools pull-right">
                        <span class="label label-success" style="font-size: 12px; padding: 5px 10px;">
                            <i class="fa fa-check-circle"></i> Tahun Aktif: <?=isset($tahun_akademik['tahun_akademik']) ? $tahun_akademik['tahun_akademik'] : '2026/2027';?> - Semester <?=isset($tahun_akademik['semester']) ? $tahun_akademik['semester'] : 'Ganjil';?>
                        </span>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped datatable">
                            <thead>
                                <tr class="bg-gray-light">
                                    <th style="width: 40px; text-align: center;">No</th>
                                    <th>NIS / NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th style="width: 250px; text-align: center;">Format Cetak Raport</th>
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
                                    <td style="text-align: center;">
                                        <button class="btn btn-sm btn-primary" onclick="window.print()"><i class="fa fa-file-pdf-o"></i> Cetak PDF</button>
                                        <button class="btn btn-sm btn-default" onclick="window.print()"><i class="fa fa-print"></i> Lembar Nilai</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
