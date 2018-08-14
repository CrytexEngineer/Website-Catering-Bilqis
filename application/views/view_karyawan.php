<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <link rel="stylesheet" href="http://localhost/e-pos-catering-bilqis/assets/css/Main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Database Karyawan</title>
    </head>

    <body>

        <nav class="navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <img src="http://localhost/e-pos-catering-bilqis/assets/image/logo.png" alt="" height="60px"></li>
                <li> </li>
            </ul>
        </nav>

        <nav class="navbar sticky-top  navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav  ">
                <li class="nav-item  "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_belanja">Data Belanja</a> </li>
                <li class="nav-item active"> <a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_karyawan">Data Karyawan</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_kas">Data Kas</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_member">Data Member</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_menu_makanan">Data Menu Makanan</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_pemesanan">Data Pemesanan</a></li>
            </ul>
        </nav>

        <div class="image_header_container">
            <img src="http://localhost/e-pos-catering-bilqis/assets/image/page_header.jpg" alt="">
        </div>
        <br>
             <table class="table table-bordered table-condensed table-striped m-5 ">
            <thead>
            <td>Kode Karyawan</td>
            <td>Nama Karyawan</td>
            <td>Gender</td>
            <td>Tanggal Gajian</td>
            <td>Gaji Karyawan</td>
            <td>Alamat Karyawan</td>
            <td>Nomor Telepon</td>
            <td>Nomor KTP</td>
            <td>Aksi</td>
        </thead>
        <tbody>
            <?php foreach ($karyawan as $karyawan): ?>
                <tr>
                    <td>
                        <?php echo $karyawan->kode_karyawan; ?>
                    </td>
                    <td>
                        <?php echo $karyawan->nama_karyawan; ?>
                    </td>
                    <td>
                        <?php echo $karyawan->gender; ?>
                    </td>
                    <td>
                        <?php echo $karyawan->tgl_gajian; ?>
                    </td>
                    <td>
                        <?php echo $karyawan->gaji_karyawan; ?>
                    </td>
                    <td>
                        <?php echo $karyawan->alamat_karyawan; ?>
                    </td>
                    <td>
                        <?php echo $karyawan->no_telp; ?>
                    </td>
                    <td>
                        <?php echo $karyawan->no_KTP; ?>
                    </td>

                    <td> <button  name="button_edit_karyawan" class="btn btn-success" onclick="location.href='<?php echo site_url().'/main/edit_karyawan/'. $karyawan->kode_karyawan;?>'">Edit</button>
                         <button  name="button_delete_karyawan" class="btn btn-success"><a href="https://localhost/e-pos-catering-bilqis/index.php/main/delete_karyawan/<?php echo $karyawan->kode_karyawan; ?> ">Delete</a> </button></td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>


    <button type="button" name="button_insert_kar" class="btn btn-success m-5" onclick="location.href='<?php echo site_url().'/main/insert_karyawan/';?>'">Insert </button>
    <div class="wrapper">
        <br><br>
        <img src="http://localhost/e-pos-catering-bilqis/assets/image/instagramlogo.png" alt="" height="30px">
        <img src="http://localhost/e-pos-catering-bilqis/assets/image/facebooklogo.png" alt="" height="30px">
        <img src="http://localhost/e-pos-catering-bilqis/assets/image/twitterlogo.jpg" alt="" height="30px">
    </div>  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
