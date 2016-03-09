$(document).ready(function ()
{
    $('#grid').jqGrid(
    {
        url: 'admin_all_user_info',
        datatype: 'json',
        multiselect: true,
        mtype: 'POST',
        colNames: [
        'User Id',
        'User Name',
        'First Name',
        'Middle Name',
        'Last Name',
        'Age',
        'Gender',
        'Date of Birth',
        'marital_status',
        'employed',
        'employer',
        'residence_street',
        'residence_city',
        'residence_state',
        'residence_pincode',
        'residence_contact_no',
        'residence_fax_no',
        'Tweets'
        ],
        colModel: [
        {
            name: 'id',
            width: 30,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'user_name',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'first_name',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'middle_name',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'last_name',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'age',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'gender',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'dob',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'marital_status',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'employment',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'employer',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'residence_street',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'residence_city',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'residence_state',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'residence_pincode',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'residence_contact_no',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'residence_fax_no',
            width: 60,
            editable: true,
            searchoptions: {sopt: ['eq','ne']}
        },
        {
            name: 'act',
            index: 'act',
            width: 60,
            sortable: false
        }
        ],
        pager: '#perpage',
        rowNum: 10,
        rowList: [10,20],
        sortname: 'id',
        sortorder: 'asc',
        height: 'auto',
        viewrecords: true,
        gridview: true,
        caption: 'User Information',
        gridComplete: function ()
        {
            var ids        = $('#grid').jqGrid('getDataIDs');
            var ids_length = ids.length;

            for (var i = 0; i < ids_length; i++)
            {
                tweet_id   = 'tweet' + i;
                view_tweet = '<input id ="' + tweet_id + '"type="button" onclick="modal(id)" class="btn btn-primary" data-toggle="modal"  value="View" />';
                $('#grid').jqGrid('setRowData', ids[i], {act: view_tweet});
            }

            $('#grid').navGrid(
                '#perpage',
                {
                    edit: true,
                    add: false,
                    del: true,
                    search: true,
                    refresh: true,
                    view: false,
                    position: 'left',
                    cloneToTop: true
                }
                );
        },
        editurl: 'update_user_info'
    });
});

function modal(a)
{
    $(document).ready(function ()
    {
        $('#grid').jqGrid('setSelection', a );
        var id = $('#grid').jqGrid('getGridParam','selrow');
        if (id)
        {
            var ret   = $('#grid').jqGrid('getRowData',id);
            user_name = ret.user_name;
            $('#loading_message').show();
            $.ajax({
                method: 'POST',
                url: 'twitter',
                dataType: 'json',
                data:
                {
                    user_name: user_name
                },
                success: function ( msg )
                {
                    $('#modal_content').html(msg.display_tweets);
                    $('#myModal').modal('show');
                    $('#loading_message').hide();
                },
                error: function ()
                {
                    console.log('fail');
                }

            });
        }
        else
        {
            alert('Please select row');
        }//end if
    });

}//end modal()
