<?php

class Notif {

public function setNotif($pesan, $aksi, $tipe)
{
    $_SESSION['notif']=[
        'pesan'= $pesan,
        'aksi' = $aksi,
        'tipe' = $tipe
    ];
}

}