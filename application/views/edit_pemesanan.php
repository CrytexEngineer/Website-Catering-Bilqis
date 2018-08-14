<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/e-pos-catering-bilqis/assets/css/page.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Edit Pemesanan</title>
  </head>

  <nav class="navbar-expand-sm bg-light navbar-light">
      <ul class="navbar-nav">
          <li class="nav-item ">
              <img src="http://localhost/e-pos-catering-bilqis/assets/image/logo.png" alt="" height="60px"></li>
          <li>  </li>
      </ul>
  </nav>

  <nav class="navbar sticky-top  navbar-expand-sm bg-light navbar-light">
      <ul class="navbar-nav  ">
          <li class="nav-item  " ><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_belanja">Data Belanja</a>  </li>
          <li class="nav-item ">  <a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_karyawan">Data Karyawan</a></li>
          <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_kas">Data Kas</a></li>
          <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_member">Data Member</a></li>
          <li class="nav-item "><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_menu_makanan">Data Menu Makanan</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_pemesanan">Data Pemesanan</a></li>

      </ul>
  </nav>

  <div class="image_header_container">
  <img src ="http://localhost/e-pos-catering-bilqis/assets/image/page_header.jpg" alt="">
  </div>
  <br>


  <body>
    <table class="table table-bordered table-condensed table-striped  ">
   <thead>
     <td>Kode Pemesanan</td>
     <td>Kode Pembeli</td>
       <td>Nama Pembeli</td>
     <td>Kode Menu Makanan</td>
     <td>Nama Menu</td>
     <td>Tanggal Pemesanan</td>
     <td>Jumlah Pesanan</td>
     <td>Uang Dibayar</td>
     <td>Status Bayar</td>
     <td>Batas Pelunasan</td>
     <td>Alamat Tujuan</td>

   </thead>
   <tbody>
   <?php foreach ($pemesanan as $pemesanan): ?>
     <tr>
         <td><?php echo $pemesanan->Kd_Pemesanan; ?></td>
         <td><?php echo $pemesanan->Kd_Pembeli; ?></td>
        <td><?php echo $pemesanan->Nama_Member; ?></td>
           <td><?php echo $pemesanan->Kd_MenuMakan; ?></td>
               <td><?php echo $pemesanan->Nama_Menu; ?></td>
         <td><?php echo $pemesanan->Tgl_Pemesanan; ?></td>
         <td><?php echo $pemesanan->Jumlah_Pesanan; ?></td>
         <td><?php echo $pemesanan->Uang_Dibayar; ?></td>
         <td><?php echo $pemesanan->Status_Bayar; ?></td>
         <td><?php echo $pemesanan->Batas_Pelunasan; ?></td>
         <td><?php echo $pemesanan->Alamat_Tujuan; ?></td>
     </tr>
   </tbody>

   </table>


   <form action="<?php echo site_url() . '/main/action_edit_pemesanan/'.$pemesanan->Kd_Pemesanan?>"  method="post" class="form-group m-5">
       <label >Kode Pemesanan</label><br>
       <input type="text" name="kode_pemesanan" value="<?php echo $pemesanan->Kd_Pemesanan; ?>" class="form-control"><br>
       <label >Kode Pembeli</label><br>
       <select class="form-control" name="select_pembeli">
           <?php foreach ($member as $member): ?>
               <option><?php echo $member->Kd_Member ?></option>
           <?php endforeach; ?>
       </select><br>
       <label >Kode Menu Makanan</label><br>
       <select class="form-control" name="select_menu_makanan">
           <?php foreach ($menu_makanan as $menu_makanan): ?>
               <option><?php echo $menu_makanan->Kd_MenuMakan ?></option>
           <?php endforeach; ?>
           </select>
       <label >Tanggal Pemesanan</label><br>
       <input type="text" name="tanggal_pemesanan" value="<?php echo  $pemesanan->Tgl_Pemesanan; ?> " class="form-control"><br>
       <label >Jumlah Pesanan</label><br>
       <input type="text" name="jumlah_pemesanan" value="<?php echo $pemesanan->Jumlah_Pesanan; ?>" class="form-control"><br>
       <label >Uang Dibayar</label><br>
       <input type="text" name="uang_dibayar" value="<?php echo $pemesanan->Uang_Dibayar; ?>" class="form-control"><br>
       <label >Status Pembayaran</label><br>
       <input type="text" name="status_pembayaran" value="<?php echo $pemesanan->Status_Bayar; ?>" class="form-control"><br>
       <label >Batas Pelunasan</label><br>
       <input type="text" name="batas_pelunasan" value="<?php echo $pemesanan->Batas_Pelunasan; ?>" class="form-control"><br>
       <label >Alamat Tujuan</label><br>
       <input type="text" name="alamat_tujuan" value="<?php echo $pemesanan->Alamat_Tujuan; ?>" class="form-control"><br><br>

       <button name="button_update_pemesanan"  class="btn btn-success">Update</button>
   </form>
      <?php endforeach; ?>

      <div class="wrapper">
          <br><br>
          <img src="instagramlogo.png" alt="" height="30px">
          <img src="facebooklogo.png" alt="" height="30px">
          <img src="twitterlogo.jpg" alt="" height="30px">
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
