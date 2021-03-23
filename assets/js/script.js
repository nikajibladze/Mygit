
$(document).ready(function(){
	 getUserList();
	
});
function register_user(){
    var url=window.location.href; 
      var form_serial =  $('#register_form').serialize();
    $.ajax({
        type: "POST",
        url: "core/functions.php",
        data: 
            form_serial + "&register_user",
        
        success: function(data) {
            if(data!=1){
            document.getElementById("test").innerHTML = data;
        }
        else{
            window.location.replace("http://localhost/referal/login.php");

        }
        }
    });
}
function getUserList(){
    $('#full_user_table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "serverMethod": "post",
        "deferRender": true,
        "ajax": "core/users.php",
        "order": [
            [0, "desc"]
        ],
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "email" },
			 { "data": "orderid" },
			  { "data": "cash" },
			   { "data": "date" }
        ],

    });
	}
