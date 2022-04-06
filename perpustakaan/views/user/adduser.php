<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data user</h4>
                        <br>
                        <form action="model/user/prosesadduser.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>id user</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="id_pegawai" id="id_pegawai" ></textarea></td>
                                </tr>
                                
                                <tr>
                                    <td>User Name</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="username" id="username" ></textarea></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="password" id="password"></input></td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="level" id="level"></input></td>
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