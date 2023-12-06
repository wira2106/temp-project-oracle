let selectedTable,
    selectedData  =  [],
    search  =  false,
    dataMember =[];

$(document).ready(function(){

   $('.tombol_edit').prop('disabled',true);
   $('.tombol_reset').hide();
   view();
   console.log('lewat');
   $('#table_member tbody').on('click', 'tr', function () {
        // Remove the 'selected-row' class from all rows
        $('#table_member tbody tr').removeClass('selected-row');

        // Add the 'selected-row' class to the clicked row
        $(this).addClass('selected-row');
              
        // Get Text in field data
        selectedTable = $(this).find('td').map(function (data) {
            return $(this).text();
        }).get();
        
        selectedValue(selectedTable[1]);
        $('.tombol_edit').prop('disabled',false);
        $('.tombol_reset').show();
      //   selectedValue(selectedData[0],selectedData[1]);
    });
});

view =(search = null)=>{
   let field = null;
   $.getJSON(link + "/api/member/data?search"+search, function(data) {
      $.each(data.data,function(key,value) {
         field+=`
                  <tr>
                        <td scope="row">${value.kode_cabang}</td>
                        <td>${value.kode_member}</td>
                        <td>${value.nama}</td>
                        <td>${value.alamat_ktp}</td>
                  </tr>
               `;
               dataMember[value.kode_member] = value;
      });
   }).done(function() {
      $("#table-content").html(field);
   });

//    $.getJSON(link + "/api/member/data?search="+search, function (data) {
//       console.log(data);

//       // jumlahSeluruh = data.jumlah;
//       // pageTotal = parseInt(Math.ceil(jumlahSeluruh / 10));

//       // $.each(data.data, function (key, value) {
//       //     a += `
//       //     <tr>
//       //             <td style="width: 10%;" class="pointer" >${no}</td>
//       //             <td style="min-width: 30px;" class="pointer" >
//       //                 <img src="${link}/image/${value.foto}" alt="${value.foto}" class="avatar-img rounded-circle" style="width:30px; height:30px;">
//       //             </td>
//       //             <td style="min-width: 185px;" class="pointer" >
//       //                 <div>
//       //                     <p style="margin: 0px;">
//       //                         <h5style="margin: 0px;">
//       //                             <b>${value.nama}</b>
//       //                         </h5>
//       //                     </p>
//       //                     <p style="margin: 0px;">
//       //                         ${value.jabatan}
//       //                     </p>
//       //                 </div>
//       //             </td>
//       //             <td style="min-width: 250px;"  class="pointer" >${value.alamat?value.alamat:'-'}</td>
//       //             <td style="min-width: 100px; padding: 0 4px!important" >
//       //                 <button onclick="edit(${value.id})" class=" btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_user"><i class=" flaticon-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></button>
//       //                 <button class="btn btn-sm btn-danger" onclick="hapus(${value.id},'api/user/delete')" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button>
//       //             </td>
//       //                 `;
          
//       //     a += `    </tr>`;
//       //     indexContent = no;
//       //     no++;
//       // });
//   }).done(function () {
//       // $('#displayPage').html((awal) + '-' + indexContent + '/' + jumlahSeluruh);
//       // $('#displayPage2').html((awal) + '-' + indexContent + '/' + jumlahSeluruh);
//       $('#table-content').html(a);
//       // $('#table').loading('toggle');
//       // setPaging(5, 2);
//   });
}

edit =()=>{
      let data = selectedData;
      console.log(data);
      $('#form_data').attr('action',link+'/api/add');
      $("input[name='kode_cabang']").val(data.kode_cabang)
      $("input[name='alamat_surat']").val(data.alamat_surat)
      $("input[name='kode_member']").val(data.kode_member)
      $("input[name='kota']").val(data.kota)
      $("input[name='nama']").val(data.nama)
      $("input[name='kelurahan']").val(data.kelurahan)
      $("input[name='no_ktp']").val(data.no_ktp)
      $("input[name='kode_pos']").val(data.kode_pos)
      $("input[name='alamat_ktp']").val(data.alamat_ktp)
      $("input[name='no_hp']").val(data.no_hp)
      $("input[name='tgl_lahir']").val(data.tgl_lahir)
      $("input[name='kota_ktp']").val(data.kota_ktp)
      $("input[name='jenis_outlet']").val(data.jenis_outlet)
      $("input[name='kelurahan_ktp']").val(data.kelurahan_ktp)
      $("input[name='sub_outlet']").val(data.sub_outlet)
      $("input[name='kode_pos_ktp']").val(data.kode_pos_ktp)
      $("input[name='pkp']").val(data.pkp)
      $("input[name='area']").val(data.area)
      $("input[name='telepon']").val(data.telepon)
      $("input[name='kredit']").val(data.kredit)
      $("input[name='top']").val(data.top)
      $("input[name='jenis_cust']").val(data.jenis_cust)
      $("input[name='bebas_iuran']").val(data.bebas_iuran)
      $("input[name='retail_khusus']").val(data.retail_khusus)
      $("input[name='ganti_kartu']").val(data.ganti_kartu)
      $("input[name='jarak']").val(data.jarak)
      $("input[name='limit']").val(data.limit)
      $("input[name='npwp']").val(data.npwp)
      $("input[name='blocking_pengiriman']").val(data.blocking_pengiriman)
      $("input[name='salesman']").val(data.salesman)
      $("input[name='alamat_email']").val(data.alamat_email)
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
   selectedData  = dataMember[kode_member];
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
