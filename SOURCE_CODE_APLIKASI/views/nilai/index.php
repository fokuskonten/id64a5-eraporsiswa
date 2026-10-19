<section class="content-header">
    <h1>
        Input & Rekapitulasi Nilai Siswa
        <small>Pengisian Nilai TP, UH, PTS, PAS & Konversi Predikat</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Nilai</a></li>
        <li class="active">Rekapitulasi</li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-calculator"></i> Lembar Penilaian Akademik</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Ekspor Nilai</button>
                <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Input Nilai Baru</button>
            </div>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr class="bg-gray-light">
                            <th style="width: 30px; text-align: center;">No</th>
                            <th>NISN / Siswa</th>
                            <th>Mata Pelajaran</th>
                            <th style="text-align: center;">Rata TP</th>
                            <th style="text-align: center;">Rata UH</th>
                            <th style="text-align: center;">PTS</th>
                            <th style="text-align: center;">UAS/PAS</th>
                            <th style="text-align: center; background-color: #e8f4f8;">Nilai Akhir</th>
                            <th style="text-align: center;">Predikat</th>
                            <th>Capaian Kompetensi / Deskripsi</th>
                            <th style="width: 70px; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($nilai as $n): ?>
                        <tr>
                            <td style="text-align: center;"><?=$no++;?></td>
                            <td>
                                <strong><?=$n['siswa_nama'];?></strong><br>
                                <small class="text-muted">NISN: <?=$n['siswa_nisn'];?></small>
                            </td>
                            <td><strong><?=$n['mapel_nama'];?></strong></td>
                            <td style="text-align: center;"><?=$n['rata_tp'];?></td>
                            <td style="text-align: center;"><?=$n['rata_uh'];?></td>
                            <td style="text-align: center;"><?=$n['nilai_pts'];?></td>
                            <td style="text-align: center;"><?=$n['nilai_uas'];?></td>
                            <td style="text-align: center; font-weight: bold; font-size: 14px; background-color: #e8f4f8;">
                                <span class="badge bg-blue" style="font-size: 13px;"><?=$n['nilai_akhir'];?></span>
                            </td>
                            <td style="text-align: center;">
                                <span class="label <?=$n['nilai_huruf'] == 'A' ? 'label-success' : ($n['nilai_huruf'] == 'B' ? 'label-primary' : 'label-warning');?>">
                                    <?=$n['nilai_huruf'];?>
                                </span>
                            </td>
                            <td><small><?=$n['deskripsi'];?></small></td>
                            <td style="text-align: center;">
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
