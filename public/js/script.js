$(function () {
    
    $('.tombolTambahData').on('click', function () {

        $('#judulModal').html('Tambah Data Pemilih'); 
        $('.modal-footer button[type=submit]').html('Tambah Data')
    })

    $('.modalUbah').on('click', function () {

        $('#judulModal').html('Ubah Data Pemilih'); 
        $('.modal-footer button[type=submit]').html('Ubah Data'); 
        $('.modal-body form').attr('action', 'http://localhost/iVote/public/admin/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/iVote/public/admin/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama); 
                $('#nim').val(data.nim); 
                $('#id').val(data.id); 
                
            }
        })
        
    })

})