<div class="container mt-5 align-content-center">
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header"><?= $data['judul']; ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <h5 class="card-title">
                        <td>NIM
                        </td>
                        <td>:</td>
                        <td><?= $data['pemilih']['nim']; ?></td>
                    </h5>
                </tr>
                <tr>
                    <h5 class="card-title">
                        <td>Nama
                        </td>
                        <td>
                            :</td>
                        <td><?= $data['pemilih']['nama']; ?></td>
                    </h5>
                </tr>
                <tr>
                    <h5 class="card-title">
                        <td>Status
                        </td>
                        <td>:</td>
                        <td><?= $data['pemilih']['status']; ?></td>
                    </h5>
                </tr>
            </table>
            <br>    
            <button type="button" class="btn btn-warning"><a href="<?= BASEURL;?>pemilih" class="Button">Kembali</a></button>
        </div>
    </div>
</div>