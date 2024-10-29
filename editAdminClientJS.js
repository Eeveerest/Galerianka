$(document).ready(function(){
    
  EditClient();
  AddNote();

});


function EditClient(){
  $('#editform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "editAdminClientValid.php",
            method: 'POST',
            data: {
                Email: $('#Email').val(),
                FirstName: $('#FirstName').val(),
                LastName: $('#LastName').val(),
                City: $('#City').val(),
                Code: $('#Postcode').val(),
                House: $('#House').val(),
                ClientID: $('#ClientID').val(),
            },
            success: function (response)
                {
                    
                    if (response=="Edited")
                    {
                           location.reload();
                           alert("Client updated");
                    }
                    else{
                       if (response.match("1")){
                        $('#EmailError').html('Must have email');
                       }else{
                        $('#EmailError').html('');
                       }
                       if (response.match("3")){
                        $('#FNameError').html('Must have first name');
                       }else{
                        $('#FNameError').html('');
                       }
                       if (response.match("2")){
                        $('#LNameError').html('Must have last name');
                       }else{
                        $('#LNameError').html('');
                       }
                    }
                    
                },
            error: function ()
            {
                alert("Error");
            }
        });
   });
   
  }

function AddNote(){
  $('#noteform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "addAdminClientNote.php",
            method: 'POST',
            data: {
                Note: $('#comment').val(),
                ClientID: $('#ClientID').val()
            },
            success: function (response)
                {
                    
                    if (response=="Added")
                    {
                           location.reload();
                           alert("Note updated");
                    }
                    
                },
            error: function ()
            {
                alert("Error");
            }
        });
   });
   
  }






