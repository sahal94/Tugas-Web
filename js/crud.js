var host = window.location.hostname; 

$(function($){
   
    /* Memanggil fungsi kategori */
    tampil_kat();

});


/* Menangkap data dari tampil_kat.php */
function tampil_kat(){
    
    $.ajax('http://'+host+'/php/loginbootstrap/kat_tampil.php',{
      dataType:'json',
      type: 'POST', 

      success: function(data){
        
        $('table#tbl-artikel tbody tr td').remove();         
        var no = 1;
        $.each(data , function(index, element){
          $('table#tbl-artikel ').find('tbody').append(
            '<tr>'+            
            '  <td class=text-center><span class="value">'+no+'</span></td>'+  
            '  <td><span class="value">'+element.kategori+'</span></td>'+           
            '  <td class="text-center">'+
            '    <a id='+element.kat_id+' href=kategori class="btn btn-small btn-success ubah"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>'+            
            '  </td>'+
            '  <td class="text-center">'+
            '    <a id='+element.kat_id+' href=kategori class="btn btn-small btn-danger hapus"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>'+            
            '  </td>'+            
            '</tr>'                
          )
          no++;
        });
                  
      }
    }); 
 
}
