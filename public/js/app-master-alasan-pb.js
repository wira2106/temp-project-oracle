let selectedData,
    dataAlasan =[];

$(document).ready(function(){
   hide_error_message();
   $('#alasan_dipilih').val().toUpperCase();
   $('#alasan_baru').val().toUpperCase();
   $('#table_alasan tbody').on('click', 'tr', function () {
        // Remove the 'selected-row' class from all rows
        $('#table_alasan tbody tr').removeClass('selected-row');

        // Add the 'selected-row' class to the clicked row
        $(this).addClass('selected-row');
              
        // Get Text in field data
        selectedData = $(this).find('td').map(function (data) {
            return $(this).text();
        }).get();
        selectedValue(selectedData[0],selectedData[1]);
    });
});

add =(data)=>{
   $('#form_data').attr('action',link+'/api/add');
   $('.text').val('Tambah')
   $('#form_data').submit();
}
update =(data)=>{
   $('#form_data').attr('action',link+'/api/update');
   $('.text').val('Edit')
   $('#form_data').submit();
}
hapus =(data)=>{
   $('#form_data').attr('action',link+'/api/delete');
   $('.text').val('Edit')
   $('#form_data').submit();
}
kirim =(data)=>{
   $('#form_data').attr('action',link+'/api/kirim');
   $('.text').val('Kirim')
   $('#form_data').submit();
}
hide_error_message = async ()=>{
    $('#error_alasan_baru').hide();
    $('#error_alasan_dipilih').hide();
    $('#reset_input').hide();
    disabled_switch(true)
}
selectedValue=(id,alasanDipilih)=>{
    $("input[name='alasan_dipilih']").val(alasanDipilih);
    $("input[name='id']").val(id);
    $('#reset_input').show();
    disabled_switch(false);
}
reset_alasan = ()=>{
    $("input[name='alasan_dipilih']").val('');
    $("input[name='id']").val('');
    $('#reset_input').hide();
    $('#table_alasan tbody tr').removeClass('selected-row');
    disabled_switch(true)
}
disabled_switch =(condition =false)=>{
    let condition_add = !condition;
    $('#edit').prop('disabled',condition)
    $('#delete').prop('disabled',condition)
    $('#tambah').prop('disabled',condition_add)
}

