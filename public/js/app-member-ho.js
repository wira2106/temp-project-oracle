let selectedData,
    dataMember =[];

$(document).ready(function(){

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
