<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://localhost/e-pos-catering-bilqis/assets/css/page.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Insert Kas</title>
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
    <body>
        <div class="form_container_kas">


          <form class="form-group m-5 " action="index.html" method="post">
                <label for="">Tanggal Kas</label><br>
                <input type="text" name="tanggal_kas" value="" class="form-control"><br>
                <label for="">Kas Masuk</label><br>
                <input type="text" name="kas_masuk" value="" class="form-control"><br>
                <label for="">Kas Akhir</label><br>
                <input type="text" name="kas_akhir" value=""class="form-control"><br>
                <label for="">Kas Keluar</label><br>
                <input type="text" name="kas_keluar" value=""class="form-control"><br>
                <label for="">Keterangan Pengeluaran</label><br>
                <input type="text" name="keterangan_pengeluaran" value=""class="form-control"><br><br>
                <button  name="button_insert_kas" class="btn btn-success">Insert</button>

            </form>
        </div>
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
