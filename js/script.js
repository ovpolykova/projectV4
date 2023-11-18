$(document).ready(function(){
   
   // document.getElementById("submit").disabled = true;
    $('.btype').click(function(){

        var classb = '.type' + $(this).val();
        $(classb).slideToggle() ;
    });

    $('.ord').click(function(){
      
        var id_product = $(this).val();
        var ord = '#ord'+id_product;
        var date_order = new Date();
        var d = date_order.getDate();
        var m = date_order.getMonth();
        var y = date_order.getFullYear();
        date_sql = y+'-'+m+'-'+d;
       // alert(date_sql);
        $.ajax({
            type: 'post',
            url: "orders.php",
            data: {
            	id_client : 1,
                id_product : id_product,
                date_order : date_sql
            },
            dataType: 'html',
     	success: function(result) {
            $(ord).text(result); 
           // $(ord).empty().append(result);
     	}
        });
    });
});

// Замена символов
function keyupfio(){
    var fio = $('#fio').val();
    fio = fio.replace(/\d/g,'');
    $('#fio').val(fio);
};
//Валидация
function checkr(){

    var pass = $("#password").val();
    var ppass = $("#ppassword").val();
    var fio = $('#fio').val();
    regexp = /\d+/;
    if (regexp.test(fio)) {
        $("#errfio").html('В фамилии не может быть цифр');
    }  
    else {
        $("#errfio").html('');  
    }

    if (pass.length<6) {
        $("#errpass").html('Пароль меньше 6 символов');
    }  
    else {
        $("#errpass").html('');
    } 

    if (pass != ppass) {
        $("#perrpass").html('Пароль не совпадает'); 
    }
    else {
        $("#perrpass").html('');  
    }

    if ((pass.length >= 6) && (pass == ppass)) {
        document.getElementById("submit").disabled = false;
    } 
    else {
        document.getElementById("submit").disabled = true;
    }
};