<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="<?=base_url('favicon.ico');?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url('favicon.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('apple-icon.png');?>">
    <link rel="manifest" href="<?=base_url('manifest.json');?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ERaporSiswa — FokusKonten Official</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="theme-color" content="#1e3a8a">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/AdminLTE.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background: #f1f5f9; display: flex; align-items: center; justify-content: center; min-height: 100vh;">
    <div class="login-box" style="margin: 0 auto; width: 400px; max-width: 95%;">
        <div class="login-logo" style="margin-bottom: 20px; text-align: center;">
            <img src="<?=base_url('logo.png');?>" alt="Logo" style="width: 72px; height: 72px; border-radius: 50%; object-fit: cover; box-shadow: 0 4px 12px rgba(0,0,0,0.15); border: 3px solid #ffffff; margin-bottom: 10px;">
            <div style="font-weight: 700; font-size: 26px; color: #0f172a; letter-spacing: -0.5px;">ERaporSiswa</div>
            <p style="font-size: 13px; color: #64748b; margin-top: 2px;">Sistem Penilaian Siswa & Cetak Rapor Sekolah</p>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 10px; box-shadow: 0 10px 25px rgba(0,0,0,0.06); padding: 25px; border: 1px solid #e2e8f0;">
            <?=$this->session->flashdata('msg');?>

            <!-- 1-Click Credential Helper -->
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 10px; margin-bottom: 18px; text-align: center;">
                <small style="display: block; font-weight: 600; color: #475569; margin-bottom: 6px;">Akses Login Cepat (1-Klik):</small>
                <button type="button" class="btn btn-xs btn-primary" onclick="fillCred('admin', 'admin')" style="font-weight: 600;">
                    <i class="fa fa-user-shield"></i> Admin (admin / admin)
                </button>
            </div>

            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" value="admin" autofocus required autocomplete="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" value="admin" required autocomplete="current-password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat" style="border-radius: 6px; padding: 10px; font-weight: 600; font-size: 14px;">
                    Masuk ke Sistem <i class="fa fa-arrow-right"></i>
                </button>
            </form>

            <div class="text-center" style="margin-top: 20px; font-size: 12px; color: #64748b; font-family: sans-serif;">
                Didukung oleh <a href="https://fokuskonten.my.id" target="_blank" style="color: #2563eb; font-weight: 600; text-decoration: none;">FokusKonten</a> &bull; Solusi Aset Digital Terpercaya
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    function fillCred(u, p) {
        document.getElementById('inputUsername').value = u;
        document.getElementById('inputPassword').value = p;
    }
    </script>
</body>

</html>