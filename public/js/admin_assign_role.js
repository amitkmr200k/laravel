$(document).ready(function()
{
    $('#user').click(function ()
    {
        $('#display_message').text('');
         var user_name_selected = $('#user option:selected').attr('name');
        
        var data               = $('#hidden_user_info').attr('value');
        var display            = JSON.parse(data);
        var length             = display.length;
        var i                  = 0;
        show_detail            = '';
        // console.log(length);
        while (i < length)
        {
            match_user_name = display[i].user_name;

            if (user_name_selected === match_user_name)
            {
                show_detail += 'Name : ' + display[i].first_name + ' '
                + display[i].middle_name + ' ' + display[i].last_name + '<br/>';
                show_detail += 'Email ID : ' + display[i].email + '<br/>';
                $('#user_info').html(show_detail);
                m = 'role_' + display[i].role_id;
                $('#role option[id="' + m + '"]').prop('selected', true);
            }

            i++;
        }
    });

    $('#role').change(function (){
        $('#display_message').text('');
    });

    $('#assign_role').click(function (){
        var user_name_selected = $('#user option:selected').attr('id');
        var role_selected      = $("#role option:selected").attr('id');
        console.log(user_name_selected);
        if('undefined' === typeof(user_name_selected))
        {
            $('#display_message').text('User not selected').css('color','red');
        }
        else
        {
            $.ajax
            ({
                method: 'POST',
                url: 'admin_assign_role',
                dataType: 'json',
                data:
                {
                    user: user_name_selected,
                    role: role_selected
                },
                success: function ( msg )
                {
                    console.log('pass');
                    // Reloading a section of the page.
                    $('#reload_hidden_user_info').load("admin_assign_role #hidden_user_info");

                    if ('true' === msg.success)
                    {
                        $('#display_message').text('New Role assigned !!!').css('color','red');
                        $('#role option[id="' + role_selected + '"]').attr('selected', true);
                    }
                     
                },
                error: function()
                {
                    console.log('fail');
                }
            });
        }
    });
});