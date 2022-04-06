
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" align="center"><font color="black" face="fantasy">SELAMAT DATANG DI DATA USER</font></h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" align="center">
                           
                            </h6>
                            <a href="beranda.php?page=user&aksi=add">
                                <button class="btn btn-primary"><font color="white" face="fantasy">Tambah Data</font></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            
                                            <th>nama pegawai</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>aksi</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr align="center">
                                          
                                           <th>nama pegawai</th>
                                           <th>User Name</th>
                                           <th>Password</th>
                                           <th>Level</th>
                                           <th>aksi</th>
                                           
                                        </tr>
                                    </tfoot>
<tbody>
                                        <?php
                                        $sql = "select u.*,p.nama_pegawai from tabel_user U left join tabel_pegawai p on u.id_pegawai = p.id_pegawai";
                                        $show = $database->query($sql);

                                        foreach($show as $user):
                                    ?>
                                        <tr>
                                            
                                            <td><?php echo $user['nama_pegawai']?></td>
                                            <td><?php echo $user['username']?></td>
                                            <td><?php echo $user['password']?></td>
                                            <td><?php echo $user['level']?></td>
                                            <td>
                                            <a href="beranda.php?page=user&aksi=edit&id=<?php echo $user['id_user']?>"
                                                class="btn btn-info btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                <a href="model/user/prosesdeleteuser.php?id=<?php echo $user['id_user']?>"
                                                class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                    </a>
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