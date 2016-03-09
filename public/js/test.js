$(document).ready(function()
{
    $("#test_button").click(function()
    {
        var text_input  = $.trim($('#input').val());        
        
        $.ajax
        ({
            type: "POST",
            url: 'post_test',
            dataType: 'json',
            //headers: {'X-CSRF-TOKEN': token},
            data: 
            { 
                text: text_input 
            },
            success: function( msg ) 
            {
                $("#print_1").text(msg.hi);
                console.log(msg);
            },
            error:function(msg)
            {
                console.log('fail');
            }
        });   
    });
});