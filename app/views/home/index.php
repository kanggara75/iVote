<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4" align="center">Pemilihan Presiden Waka-Waka land</h1>
        <table align="center" cellpadding="50%" border=1>
            <tr>
                <a href="<?= BASEURL; ?>pemilih/detail/<?= $calon['no']; ?>" <td align="center">
                    <?php foreach( $data['calon'] as $calon) : ?>
                    <h1><?= $calon['no']; ?>
                    </h1>
                    <img src="<?= BASEURL?><?= $calon['foto']; ?>" alt="KAnggara75" width="200"
                        class="rounded-circle shadow">
                    <h1 align="center">
                        Kandidat
                        <?= $calon['ketua']; ?> &
                        <?= $calon['wakil']; ?>
                    </h1>
                    <?php endforeach; ?>
                    </td>

            </tr>

        </table>
        <table>

        </table>

    </div>
</div>