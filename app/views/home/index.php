<?php
if (isset($_POST['submit']))
        {
            $id = $_POST['submit'];
            // mysqli_query($dsn, "UPDATE iVote SET value=value+1 WHERE id = $id");    
            echo $id;
        }
?>
<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4" align="center">Pemilihan Presiden Waka-Waka land</h1>
        <form action="" method="POST">
        <input type="radio" name="id" value="<?=$calon['no'];?>" />

            <table align="center" cellpadding="50%" border=5>
                <tr>
                    <td align="center">
                        <?php foreach( $data['calon'] as $calon) : ?>
                        <h1><?= $calon['no']; ?>
                        </h1>
                        <button type="submit" name="submit" id="btn" class="btn" value="<?= $calon['no']; ?>" style="hidden">
                            <img src="<?= BASEURL?><?= $calon['foto']; ?>" alt="KAnggara75" width="200" class="rounded-circle shadow" value="<?= $calon['no']; ?>">
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
</div>