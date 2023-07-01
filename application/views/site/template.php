
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB | PAUD Nurul Istiqomah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?= base_url(); ?>" class="navbar-brand"><b>PPDB</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang PAUD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?= base_url('site/profil'); ?>">Profil</a></li>
                <li><a href="<?= base_url('site/sejarah'); ?>">Sejarah</a></li>
                <li><a href="<?= base_url('site/visimisi'); ?>">Visi Misi</a></li>
               
              </ul>
            </li>
            <li class="active"><a href="#">Daftar Guru </a></li>
            <li><a href="<?= base_url('site/persyaratan'); ?>">Persyaratan PPDB</a></li>
            <li><a  data-toggle="modal" data-target="#add" href="#">Daftar</a></li>
            
          </ul>
          
             <?php  
             echo validation_errors();                       
    echo form_open_multipart('site/hasil_kelulusan','class="navbar-form navbar-left"'); ?>
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" name="no_formulir" placeholder="Cek Kelulusan...">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
           
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
           
            <!-- Tasks Menu -->
           
            <!-- User Account Menu -->
            
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFormTitle">Daftar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php  
             echo validation_errors();                       
    echo form_open_multipart('site/simpan_daftar'); ?>
     <div class="col-md-6">
       <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                        <select class="form-control"  name="id_tahun_ajaran" required>
              
                        <?php foreach ($dt_tahun_ajaran as $t) :?>
                          <option value="<?= $t->id_tahun_ajaran; ?>"><?= $t->tahun_ajaran; ?></option>
                          <?php endforeach;?>
                          </select>
                        
                      </div>
                   <div class="form-group">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input type="text" class="form-control"  name="nama_siswa" required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control"  name="tempat_lahir" required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tgl_lahir" required  >
                        
                      </div>
                      <div class="form-group">
                         <label for="exampleInputEmail1">Jenis Kelamin</label> <br />
                        <input type="radio" id="html" name="jk" value="Laki-Laki">
<label for="html">Laki-Laki</label><br>
<input type="radio" id="css" name="jk" value="Perempuan">
<label for="css">Perempuan</label><br>
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input type="text" class="form-control"  name="agama" required  >
                        
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ayah</label>
                        <input type="text" class="form-control"  name="nama_ayah" required  >
                        
                      </div>
                    </div>

                    <div class="col-md-6">
                       <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ibu</label>
                        <input type="text" class="form-control"  name="nama_ibu" required  >
                        
                      </div>
                     
                      <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="3" > </textarea>
                </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No Telp</label>
                        <input type="number" class="form-control"  name="no_telp" required  >
                        
                      </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Kartu Keluarga</label>
                        <input type="file" class="form-control" name="kartu_keluarga" required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Akta Kelahiran</label>
                        <input type="file" class="form-control" name="akta_kelahiran" required  >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Foto Diri</label>
                        <input type="file" class="form-control" name="foto" required  >
                        
                      </div>

                      </div>
                    
                  </div>
                   
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                   
                    <input type="submit" name="submit"class=" btn btn-primary btn-pill" value="Daftar">
                  </div>
                 </form>
                </div>
              </div>
            </div>
  <?= $contents; ?>

   <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1
      </div>
      <strong>Copyright &copy; 2023 <a href="#">PPDB PAUD Nurul Istiqomah</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script type="text/javascript">


    <?php if ($this->session->flashdata('success')) { ?>
      toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php } else if ($this->session->flashdata('delete')) { ?>
        toastr.error("<?php echo $this->session->flashdata('delete'); ?>");
    <?php } else if ($this->session->flashdata('update')) { ?>
          toastr.info("<?php echo $this->session->flashdata('update'); ?>");
    <?php } ?>


  </script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

       

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        function kirim_tiket() {
            Swal.fire({
                title: 'Yakin akan mengirim formulir pendaftaran?',
                text: "Formulir yang sudah dikirim tidak bisa diubah  kembali",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, kirim saja!'
            }).then((result) => {
                if (result.value) {
          
                    document.getElementById('kirim_tiket').submit();
                }
            })
        }
         
    </script>


</body>
</html>
