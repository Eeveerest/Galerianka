$(document).ready(function(){

    getCategories();
    getCategoriesFilter();
    AddCategory();
    EditCategory();

});

function getCategories(){
    $.ajax({
        url: "getAdminCategories.php",
        method: 'POST'
    }).done(function( data ) {
        $('#categoryData').html(data);
        $('td').css( 'padding-bottom', "1rem" );
        $('td').css( 'padding-top', "1rem" );
        $('td').css( 'color', "whitesmoke" );
        $('td').css( 'border-bottom', "1px solid whitesmoke" );
        
    })
}

function getCategoriesFilter(){
    $('#searchform').on('submit',function(e){
        e.preventDefault();
        $('#categoryData').html('<tr>\n' +
            '                        <td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
            '                    </tr>');
        $.ajax({
                url: "getAdminCategoriesFilter.php",
                method: 'POST',
                data: {
                    search: $('#search').val(),
                }
            }).done(function( data ) {
                $('#categoryData').html(data);
                $('#categoryData').html(data);
                $('td').css( 'padding-bottom', "1rem" );
                $('td').css( 'padding-top', "1rem" );
                $('td').css( 'color', "whitesmoke" );
                $('td').css( 'border-bottom', "2px solid whitesmoke" );
            });
    });

}

function AddCategory(){
  $('#addform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "addAdminCategory.php",
            method: 'POST',
            data: {
                InputName: $('#InputName').val()          
            },
            success: function (response)
                {
                    
                    if (response=="Added")
                    {
                      $("#categoryModal").modal('hide');
                        $('#categoryData').html('<tr>\n' +
                        '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
                        '</tr>');
                            $.ajax({
                                url: "getAdminCategories.php",
                                method: 'POST'  
                            }).done(function( data ) {
                                
                                $('#categoryData').html(data);
                                $('td').css( 'padding-bottom', "1rem" );
                                $('td').css( 'padding-top', "1rem" );
                                $('td').css( 'color', "whitesmoke" );
                                $('td').css( 'border-bottom', "2px solid whitesmoke" );
                                $('#InputName').val('');
                                getLatest();
                            });  
                    }
                    else{
                       if (response.match("1")){
                        $('#nameError').html('Must have name');
                       }else{
                        $('#nameError').html('');
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

function EditCategory(){
  $('#editform').on('submit',function(e) {
    e.preventDefault();
        $.ajax({
           url: "editAdminCategories.php",
            method: 'POST',
            data: {
                InputName: $('#InputName2').val(),
                CategoryId: $('#CatId').val()
            },
            success: function (response)
                {
                    
                    if (response=="Edited")
                    {
                      $("#editModal").modal('hide');
                        $('#categoryData').html('<tr>\n' +
                        '<td colspan="9"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></td>\n' +
                        '</tr>');
                            $.ajax({
                                url: "getAdminCategories.php",
                                method: 'POST'  
                            }).done(function( data ) {
                                
                                $('#categoryData').html(data);
                                $('td').css( 'padding-bottom', "1rem" );
                                $('td').css( 'padding-top', "1rem" );
                                $('td').css( 'color', "whitesmoke" );
                                $('td').css( 'border-bottom', "2px solid whitesmoke" );
                                $('#InputName2').val('');
                                $('#CatId').val('');
                                getLatest();
                            });  
                    }
                    else{
                       if (response.match("1")){
                        $('#name2Error').html('Must have name');
                       }else{
                        $('#name2Error').html('');
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



