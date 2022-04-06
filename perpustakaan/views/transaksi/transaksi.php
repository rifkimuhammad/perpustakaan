
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" align="center"><font color="black" face="fantasy">SELAMAT DATANG DI DATA TRANSAKSI</font></h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" align="center">
                            
                            <a href="beranda.php?page=transaksi&aksi=add">
                                <button class="btn btn-primary"><font color="white" face="fantasy">Tambah Data</font></button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                           
                                            <th>Tanggal Transaksi</th>
                                            <th>nama Anggota</th>
                                            <th>nama Pegawai</th>
                                            <th>nama Buku</th>
                                            <th>Quantity</th>
                                            <th>Jenis Transaksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                        $sql = "SELECT t.*,b.nama_buku,a.nama_anggota,p.nama_pegawai from tabel_transaksi t left join tabel_buku b on t .id_buku = b.id_buku left join tabel_anggota a on t.id_anggota = a.id_anggota left join tabel_pegawai p on t.id_pegawai = p.id_pegawai";
                                        $show = $database->query($sql);

                                        foreach($show as $transaksi):
                                    ?>
                                        <tr>
                                           
                                            <td><?php echo $transaksi['tanggal_transaksi']?></td>
                                            <td><?php echo $transaksi['nama_anggota']?></td>
                                            <td><?php echo $transaksi['nama_pegawai']?></td>
                                            <td><?php echo $transaksi['nama_buku']?></td>
                                            <td><?php echo $transaksi['quantity']?></td>
                                            <td><?php echo $transaksi['jenis_transaksi']?></td>
                                            <td>
                                                 <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $transaksi['id_transaksi']?>"
                                                     class="btn btn-info btn-circle">
                                                    <i class="fas fa-edit"></i>
                                                 </a>
                                                 <a href="model/transaksi/prosesdeletetransaksi.php?id=<?php echo $transaksi['id_transaksi']?>"
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