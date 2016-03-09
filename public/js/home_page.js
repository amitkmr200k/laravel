$(document).ready(function ()
{
    $('#hide').hide();
    $('#hide_info').hide();

    $('#show_info').click(function ()
    {
        $('#hide').fadeToggle("slow");
        $('#show_info').hide();
        $('#hide_info').show();
    });

    $('#hide_info').click(function ()
    {
        $('#hide').fadeToggle("slow");
        $('#hide_info').hide();
        $('#show_info').show();
    });
});