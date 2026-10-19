<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tanggal Cetak Raport
        <small>Pengaturan Tanggal & Titimangsa Penerbitan Buku Raport</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Konfigurasi</a></li>
        <li class="active">Tanggal Cetak</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-pencil-square-o"></i> Pengaturan Titimangsa Raport</h3>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tempat / Kota</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="Jakarta" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tanggal Cetak</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" value="2026-12-18" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Kepala Sekolah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="Drs. H. Mulyono, M.Pd." readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">NIP Kepala Sekolah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="19750812 200003 1 004" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-right">
                        <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Konfigurasi</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="callout callout-info">
                <h4><i class="fa fa-info-circle"></i> Petunjuk Titimangsa</h4>
                <p>Data tempat dan tanggal cetak ini akan dicetak otomatis di bagian bawah lembar penilaian raport siswa dan lembar pengesahan kepala sekolah serta wali kelas.</p>
            </div>
        </div>
    </div>
</section>