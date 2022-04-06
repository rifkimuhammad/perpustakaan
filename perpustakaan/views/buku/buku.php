
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" align="center"><font color="black" face="fantasy">SELAMAT DATANG DI DATA BUKU</font></h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" align="center">
                         
                            <a href="beranda.php?page=buku&aksi=add">
                                <button class="btn btn-primary"><font color="white" face="fantasy">Tambah Data Buku</font></button></a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Isbn</th>
                                            <th>Nama Buku</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          
                                           <th>Isbn</th>
                                           <th>Nama Buku</th>
                                           <th>Penulis</th>
                                           <th>Penerbit</th>
                                           <th>Tahun Terbit</th>
                                           <th>Aksi</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $sql = "select * from tabel_buku";
                                        $show = $database->query($sql);

                                        foreach($show as $buku):
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $buku['isbn']?></td>
                                            <td><?php echo $buku['nama_buku']?></td>
                                            <td><?php echo $buku['penulis']?></td>
                                            <td><?php echo $buku['penerbit']?></td>
                                            <td><?php echo $buku['tahun_terbit']?></td>
                                            <td>
                                            <a href="beranda.php?page=buku&aksi=edit&id=<?php echo $buku['id_buku']?>"
                                                class="btn btn-info btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                <a href="model/buku/prosesdeletebuku.php?id=<?php echo $buku['id_buku']?>"
                                                class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                    </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>