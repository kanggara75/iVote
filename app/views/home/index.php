<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4" align="center">Pemilihan Presiden Waka-Waka land</h1>
        <table align="center" cellpadding="50%" border=5>
            <tr>
                
                
                <!-- <a href="<?= BASEURL; ?>pemilih/detail/<?= $calon['no']; ?>">lalal</a> -->
                <td align="center">
                    <?php foreach( $data['calon'] as $calon) : ?>
                    <h1><?= $calon['no']; ?>
                    </h1>
                    <a href="<?= BASEURL; ?><?= $calon['no']; ?>">
                    <img src="<?= BASEURL?><?= $calon['foto']; ?>" alt="KAnggara75" width="200"
                        class="rounded-circle shadow">
                        </a>
                    <h1 align="center">
                        Kandidat
                        <?= $calon['ketua']; ?> &
                        <?= $calon['wakil']; ?>
                    </h1>
                </td>
                <td align="center"> 
                <?php endforeach; ?>
                </td>
            </tr>

        </table>
        <table>

        </table>

    </div>
</div>