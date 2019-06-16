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
                <tr><?php foreach( $data['calon'] as $calon) : ?>
                    <td align="center">
                        <h1><?= $calon['no']; ?>
                        </h1>
                        <button type="submit" name="submit" class="btn" value="<?= $calon['no']; ?>" style="hidden"
                            onclick="nim()" id="submit">
                            <img src="<?= BASEURL?>img/<?= $calon['foto']; ?>" alt="KAnggara75" width="200"
                                class="rounded-circle shadow" value="<?= $calon['no']; ?>">
                        </button>
                        <h1 align="center">
                            Kandidat
                            <?= $calon['ketua']; ?> &
                            <?= $calon['wakil']; ?>
                        </h1>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </form>
    </div>
    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary" align="center">Hasil</h1>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <?php foreach( $data['calon'] as $calon) : ?>
                <li class="list-group-item">
                    <h4 class="small font-weight-bold"><?= $calon['ketua']; ?> & <?= $calon['wakil']; ?> <span class="float-right"><?= $calon['hasil']; ?>%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $calon['hasil']; ?>%" aria-valuenow="<?= $calon['hasil']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>