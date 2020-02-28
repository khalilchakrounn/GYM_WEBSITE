$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"Core/select_recl.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
   
  
   



    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"Core/delete_reclamation.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  

 $(document).on('click', '#btn_disable', function(){  
    var id=$(this).data("id9");  
        if(confirm("Are you sure ?"))  
        {  
            $.ajax({  
            url:"Core/disable_recl.php",  
            method:"POST",  
             data:{id:id },    
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
}, 5000);   
                fetch_data();  
            }  

        })
        }
});  
 $(document).on('click', '#btn_enable', function(){  
    var id=$(this).data("id9");  
        if(confirm("Are you sure ?"))  
        {  
            $.ajax({  
            url:"Core/enable_recl.php",  
            method:"POST",  
             data:{id:id },    
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
}, 5000);   
                fetch_data();  
            }  

        })
        }
});  


});  