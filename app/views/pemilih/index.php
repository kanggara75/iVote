<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Data Pemilih
            </button>
            <br>
            <h1>Daftar Pemilih</h1>
            <ul class="list-group">
                <?php foreach( $data['pemilih'] as $pemilih) : ?>
                <li class="list-group-item d-flex justify-content-between align-items   -center">
                    <?= $pemilih['no']; ?>. <?= $pemilih['nama']; ?>
                    <a href="<?= BASEURL; ?>pemilih/detail/<?= $pemilih['no']; ?>"
                        class="badge badge-primary">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Pemilih</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>pemilih/tambah" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim"
                            placeholder="Nomor Induk Mahasiswa">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="number" class="form-control" id="status" name="status"
                            placeholder="Status Pemilih">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>