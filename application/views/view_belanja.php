<!DOCTYPE html><!DOCTYPE html>







<!-- A grey horizontal navbar that becomes vertical on small screens -->






<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://localhost/e-pos-catering-bilqis/assets/css/page.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Database Belanja</title>
    </head>
    <body>

        <nav class="navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <img src="http://localhost/e-pos-catering-bilqis/assets/image/logo.png" alt="" height="60px"></li>
                <li>  </li>
            </ul>
        </nav>

        <nav class="navbar sticky-top  navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav  ">
                <li class="nav-item active " ><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_belanja">Data Belanja</a>  </li>
                <li class="nav-item ">  <a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_karyawan">Data Karyawan</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_kas">Data Kas</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_member">Data Member</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_menu_makanan">Data Menu Makanan</a></li>
                <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_pemesanan">Data Pemesanan</a></li>

            </ul>
        </nav>

        <div class="image_header_container">
        <img src ="http://localhost/e-pos-catering-bilqis/assets/image/page_header.jpg" alt="">
        </div>
        <br>
        <table class="table table-bordered table-condensed table-striped  m-5">
            <thead>
            <td>Kode Belanja</td>
            <td>Kode Pemesanan</td>
            <td>Nama Bahan</td>
            <td>Harga Satuan</td>
            <td>Jumlah Pembelian</td>
            <td>Total Harga</td>
            <td>Tanggal Belanja</td>
                          <td>Aksi</td>


        </thead>
        <tbody>


            <?php foreach ($belanja as $belanja): ?>
                <tr>
                    <td><?php echo $belanja->kode_Belanja; ?></td>
                    <td><?php echo $belanja->kode_pemesanan; ?></td>
                    <td><?php echo $belanja->namaBahan; ?></td>
                    <td><?php echo $belanja->hargaSatuan; ?></td>
                    <td><?php echo $belanja->jumlahPembelian; ?></td>
                    <td><?php echo $belanja->totalharga; ?></td>
                    <td><?php echo $belanja->tgl_belanja; ?></td>
                    <td> <button type="button" name="button_edit_belanja" class="btn btn-success" onclick="location.href='<?php echo site_url().'/main/edit_belanja/'. $belanja->kode_Belanja;?>'">Edit</button>
                        <button type="button" name="button_delete_belanja" class="btn btn-success"><a href="https://localhost/e-pos-catering-bilqis/index.php/main/delete_belanja/<?php echo $belanja->kode_Belanja; ?> ">Delete</a> </button></td>

                </tr>



            <?php endforeach; ?>
        </tbody>


    </table>


  <button type="button" name="button_insert_belanja" class="btn btn-success m-5" onclick="location.href='<?php echo site_url().'/main/insert_belanja/';?>'">Insert </button>



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
