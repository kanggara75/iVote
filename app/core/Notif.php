<?php

class Notifer {

    public function setNotif($pesan, $aksi, $tipe)
    {
        $_SESSION['notif']=[
            'pesan'=> $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function notif()
    {
        if( isset($_SESSION['notif']) ) {
            echo '<div class="alert alert-' . $_SESSION['notif']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Pemilih <strong>' . $_SESSION['notif']['pesan'] . '</strong> ' . $_SESSION['notif']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" arial-label="Close">
            <span arial-hidden="true">&times;</span>
            </button>
            </div>
            ';
            unset($_SESSION['notif']);
        }
    }
}