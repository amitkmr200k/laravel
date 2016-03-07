$(document).ready(function(){
$("#copy_residence").change(function(){
var residence_street  = $.trim($('#residence_street').val());
var residence_city  = $.trim($('#residence_city').val());
var residence_state  = $.trim($('#residence_state').val());
var residence_pincode  = $.trim($('#residence_pincode').val());
var residence_contact_no  = $.trim($('#residence_contact_no').val());
var residence_fax_no  = $.trim($('#residence_fax_no').val());
// assiging values to permanent address fields
if(this.checked)
{
    $('#permanent_street').val(residence_street);
    $('#permanent_city').val(residence_city);
    $('#permanent_state').val(residence_state);
    $('#permanent_pincode').val(residence_pincode);
    $('#permanent_contact_no').val(residence_contact_no);
    $('#permanent_fax_no').val(residence_fax_no);
}
else
{
    $('#permanent_street').val('');
    $('#permanent_city').val('');
    $('#permanent_state').val('');
    $('#permanent_pincode').val('');
    $('#permanent_contact_no').val('');
    $('#permanent_fax_no').val('');
}

});
});