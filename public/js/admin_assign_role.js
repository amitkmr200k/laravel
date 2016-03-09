$(document).ready(function ()
{
    $('#loader').hide();
    $('#user_info').hide();

    $('#user').click(function ()
    {
        $('#user_info').slideDown('slow');
        $('#display_message').text('');

        var user_name_selected = $('#user option:selected').attr('name');
        var data               = $('#hidden_user_info').attr('value');
        var display            = JSON.parse(data);
        var length             = display.length;
        var i                  = 0;
        show_detail            = '';

        while (i < length)
        {
            match_user_name = display[i].user_name;

            if (user_name_selected === match_user_name)
            {
                show_name  = display[i].first_name + ' '
                + display[i].middle_name + ' ' + display[i].last_name;
                show_email = display[i].email;
                
                $('#name_assign_role_page').val(show_name);
                $('#email_assign_role_page').val(show_email);
                
                role_select = 'role_' + display[i].role_id;
                
                $('#role option[id="' + role_select + '"]').prop('selected', true);
            }

            i++;
        }
    });

    $('#role').change(function ()
    {
        $('#display_message').text('');
    });

    $('#assign_role').click(function ()
    {
        var user_name_selected = $('#user option:selected').attr('id');
        var role_selected      = $("#role option:selected").attr('id');

        if ('undefined' === typeof(user_name_selected))
        {
            $('#display_message').text('User not selected').css('color','red');
        }
        else
        {
            $('#loader').show();

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
                    // Reloading a section of the page.
                    $('#reload_hidden_user_info').load("admin_assign_role #hidden_user_info");

                    if ('true' === msg.success)
                    {
                        $('#display_message').text('New Role assigned !!!').css('color','red');
                        $('#role option[id="' + role_selected + '"]').attr('selected', true);
                    }

                    $('#loader').hide();
                },
                error: function ()
                {
                    console.log('fail');
                }
            });
        }//end if
    });
});