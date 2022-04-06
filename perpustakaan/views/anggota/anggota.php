
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" align="center"><font color="black" face="fantasy">SELAMAT DATANG DI DATA ANGGOTA</font></h1>
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" align="center">
                            <h6>
                                <a href="beranda.php?page=anggota&aksi=add">
                                    <button class="btn btn-primary"><font color="white" face="fantasy">Tambah Data</font></button>
                                </a>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Nama Anggota</th>
                                            <th>Jenis kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                            <th>Nama Anggota</th>
                                            <th>Jenis kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $sql = "select * from tabel_anggota";
                                        $show = $database->query($sql);

                                        foreach($show as $agt):
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $agt['nama_anggota']?></td>
                                            <td><?php echo $agt['jenis_kelamin']?></td>
                                            <td><?php echo $agt['alamat']?></td>
                                            <td><?php echo $agt['no_hp']?></td>
                                            <td>
                                                <a href="beranda.php?page=anggota&aksi=edit&id=<?php echo $agt['id_anggota']?>"
                                                class="btn btn-info btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                <a href="model/anggota/prosesdeleteanggota.php?id=<?php echo $agt['id_anggota']?>"
                                                class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                    </a>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>