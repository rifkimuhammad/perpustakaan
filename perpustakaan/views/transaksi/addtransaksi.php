<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 align="center"><font color="black" face="fantasy">Tambah Data Transaksi</font></h4>
                        <br>
                        <form action="model/transaksi/prosesaddtransaksi.php" method="POST">
                            <table class="table">
                            
                               
                                <tr>
                                    <td>Tanggal Transaksi</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi"></input></td>
                                </tr>
                                <tr>
                                    <td>nama Anggota</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="id_anggota" id="id_anggota" ></input></td>
                                </tr>
                                <tr>
                                    <td>nama Pegawai</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_pegawai" id="id_pegawai"></input></td>
                                </tr>
                                <tr>
                                    <td>nama Buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_buku" id="id_buku"></input></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="quantity" id="quantity"></input></td>
                                </tr>
                                <tr>
                                    <td>Jenis Transaksi</td>
                                    <td>:</td>
                                    <td>
                                         <select class="form-control" name="jenis_transaksi" id="jenis_transaksi">
                                            <option value="pinjam">pinjam</option>
                                            <option value="kembali">kembali</option>
                                         </select>
                                    </td>
                                </tr>
                                <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                        <button type="submit" class="btn btn-danger">kembali</button>
                                    </td>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>