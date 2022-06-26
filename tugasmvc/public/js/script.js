$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Peminjam');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#noKTP').val('');
        $('#jenisKendaraan').val('');
        $('#jenisKelamin').val('');
        $('#id').val('');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Peminjam');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/tugasmvc/public/peminjaman/ubah');

        const id = $(this).data('id');

        $.ajax({
        url:'http://localhost/tugasmvc/public/peminjaman/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
            $('#nama').val(data.nama);
            $('#noKTP').val(data.noKTP);
            $('#jenisKendaraan').val(data.jenisKendaraan);
            $('#jenisKelamin').val(data.jenisKelamin);
            $('#id').val(data.id);
        }
        });

        });
    });