<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/e-pos-catering-bilqis/assets/css/page.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>edit_karyawan</title>
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
          <li class="nav-item active">  <a class="nav-link" href="http://localhost/e-pos-catering-bilqis/index.php/main/load_karyawan">Data Karyawan</a></li>
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


  <body>
    <table class="table table-bordered table-condensed table-striped  ">
   <thead>
   <td>Kode Karyawan</td>
   <td>Nama Karyawan</td>
   <td>Gender</td>
   <td>Tanggal Gajian</td>
   <td>Gaji Karyawan</td>
   <td>Alamat Karyawan</td>
   <td>Nomor Telepon</td>
   <td>Nomor KTP</td>

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

          </tr>

   </tbody>

   </table>


    <form class="form-group m-5 " action="<?php echo site_url().'/main/action_edit_karyawan/'.$karyawan->kode_karyawan;?>" method="post">
        <label for="">Kode Karyawan</label><br>
        <input type="text" name="kode_karyawan" value="<?php echo  $karyawan->kode_karyawan ?>"class="form-control"><br>
        <label for="">Nama Karyawan</label><br>
        <input type="text" name="nama_karyawan" value="<?php echo $karyawan->nama_karyawan ?>"class="form-control"><br>
        <label for="">Jenis Kelamin</label><br>
        <input type="text" name="jenis_kelamin" value="<?php echo $karyawan->gender ?>"class="form-control"><br>
        <label for="">Alamat Karyawan</label><br>
        <input type="text" name="alamat_karyawan" value="<?php echo $karyawan->tgl_gajian ?>"class="form-control"><br>
        <label for="">Gaji Karyawan</label><br>
        <input type="text" name="gaji_karyawan" value="<?php echo $karyawan->gaji_karyawan ?>"class="form-control"><br>
        <label for="">Nomor KTP</label><br>
        <input type="text" name="nomor_ktp" value="<?php echo $karyawan->alamat_karyawan ?>"class="form-control"><br>
        <label for="">No Telepon</label><br>
        <input type="text" name="nomor_telepon" value="<?php echo $karyawan->no_telp ?>"class="form-control"><br>
        <label for="">Tanggal Gajian</label><br>
        <input type="text" name="tanggal_gajian" value="<?php echo $karyawan->no_KTP ?>"class="form-control"><br><br>
        <button name="button_update_karyawan"class="btn-success"   class="btn btn-success">Update</button>
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
