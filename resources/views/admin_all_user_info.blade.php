@extends('master')

@section('title', 'User Information')

@section('body')

<div id="loading_message" class="loading_page"> </div>
<div class="admin">
    <div class="well admin_user_info"><h2> Welcome Admin </h2></div>
     <div class="table-responsive">
    <table id="grid"></table>
    <div id="perpage"></div><br/>
    </div>
</div>
<div class="well">
    <p id="test"> </p>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Tweets</h4>
            </div>
            <div class="modal-body" id ="modal_content">
                <!-- Modal Content here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@stop
