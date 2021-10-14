<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Risfan Yani</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    tes
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">
                     <h1 class="h5 mb-2 text-gray-800">Mata Kuliah</h1>
                </nav>
            </div>
           
                <div class="container" style="height:100vh">
                    <div class="div d-flex justify-content-between">
                            <a href="matakuliah/form_tambah_matakuliah.php" class="px-2 py-2 my-4 btn btn-success">Tambah Mata Kuliah</a>
                            <a href="dosen/index_dosen.php" class="px-2 py-2 my-4 btn btn-primary">Lihat Data Dosen</a>   
                    </div> 
                                    
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode MK</th>
                            <th scope="col">Nama MK</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                include('koneksi.php');
                                $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_matakuliah");
                                
                                $no = 1;
                                
                                while($mk = mysqli_fetch_assoc($hasil)){
                            ?>
                                
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $mk['kode_mk'];?></td>
                                    <td><?= $mk['nama_mk']; ?></td>
                                    <td>
                                        <a href="matakuliah/edit_matakuliah.php?kode_mk=<?= $mk['kode_mk']; ?>" class="btn btn-sm btn-success">Edit</a>
                                        <a href="matakuliah/hapus_matakuliah.php?kode_mk=<?= $mk['kode_mk']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++; }?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <!-- Footer -->
        </div>

    </div>
</body>

</html>
