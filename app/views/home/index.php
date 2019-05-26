<?php
if (isset($_POST['submit']))
        {
            $id = $_POST['submit'];
            // mysqli_query($dsn, "UPDATE iVote SET value=value+1 WHERE id = $id");    
            echo $id;
        }
?>
<div class="container">
    <div class="jumbotron mt-2">
        <h1 class="display-6" align="center">Pemilihan Presiden Waka-Waka land</h1>
        <form action="" method="POST">
            <input type="radio" name="id" value="<?=$calon['no'];?>" />
            <table align="center" cellpadding="50%" border=0>
                <tr>
                    <td align="center">
                        <?php foreach( $data['calon'] as $calon) : ?>
                        <h1><?= $calon['no']; ?>
                        </h1>
                        <button type="submit" name="submit" class="btn" value="<?= $calon['no']; ?>" style="hidden"
                            onclick="nim()" id="submit">
                            <img src="<?= BASEURL?><?= $calon['foto']; ?>" alt="KAnggara75" width="200"
                                class="rounded-circle shadow" value="<?= $calon['no']; ?>">
                        </button>
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
        </form>
    </div>
    <div class="alert alert-warning" role="alert" align="left">
        <p>Hasil:</p>
        <table width=500 border=5>

            <tr>
                <?php foreach( $data['calon'] as $calon) : ?>
                <td>
                    <div class="progress-bar" role="progressbar" style="width: <?= $calon['hasil'] ?>%;"
                        aria-valuenow="<?= $calon['hasil']; ?>" aria-valuemin="0" aria-valuemax="100"><?= $calon['hasil']; ?>%</div>
                </td>
            </tr>
            <tr>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
</div>