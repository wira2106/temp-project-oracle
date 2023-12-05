let selectedTable,
    selectedData  =  [],
    search  =  false,
    dataMember =[];

$(document).ready(function(){

   $('.tombol_edit').prop('disabled',true);
   $('.tombol_reset').hide();
   $('#table_member tbody').on('click', 'tr', function () {
        // Remove the 'selected-row' class from all rows
        $('#table_member tbody tr').removeClass('selected-row');

        // Add the 'selected-row' class to the clicked row
        $(this).addClass('selected-row');
              
        // Get Text in field data
        selectedTable = $(this).find('td').map(function (data) {
            return $(this).text();
        }).get();
      //   dataMember[13221] = {name:'testing'};
      //   dataMember[13222] = {name:'testing2'};
        selectedValue(selectedTable[1]);
        $('.tombol_edit').prop('disabled',false);
        $('.tombol_reset').show();
      //   selectedValue(selectedData[0],selectedData[1]);
    });
});

view =(search = null)=>{

}

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
selectedValue =(kode_member)=>{
   console.log(kode_member);
   console.log(dataMember[kode_member]);
}
reset_selected=()=>{
   selectedData  =  [];
   $('.tombol_edit').prop('disabled',true);
   $('#table_member tbody tr').removeClass('selected-row');
   $('.tombol_reset').hide();
   if (search) {
      view();
   }

}
