<div class="modal fade" id="myModal" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">                
                            <img src="{{ asset('public/storage/loading-spinner-blue.gif') }}" alt="" class="loading">
                            <span> &nbsp;&nbsp;Loading... </span>
                        </div>
                    </div>
                </div>
            </div>


<a href="{{ url('admin/users/'.encode($id)) }}"  data-target="#myModal" data-toggle="modal" data-toggle="tooltip" data-original-title="Show" title="Show Detail">
	<i class="fa fa-eye text-inverse m-r-10"></i> 
</a>

blade  :-

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">{{$title}}</h4>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-6 form-group">
            <label class="control-label">First Name</label>
            <div class="input-icon right">
               <input type="text" value="{{(!empty($user_info->first_name))?($user_info->first_name):('') }}" class="form-control" placeholder="Name" readonly>
            </div>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Last Name</label>
            <div class="input-icon right">
               <input type="text" value="{{(!empty($user_info->last_name))?($user_info->last_name):('') }}" class="form-control" placeholder="Mobile Number" readonly>
            </div>
        </div>
    </div>
        
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    <!-- <button type="button" class="btn blue">Save changes</button> -->
</div>

Script :-
<script type="text/javascript">
            $('body').on('hidden.bs.modal', '.modal', function() {
                $(this).removeData('bs.modal');
                $(this).find('.modal-content').html('<div style="text-align: center;"><img width="100" height="100" src="<?php echo asset('public/storage/loading-spinner-blue.gif') ?>"></div>');
            });
        </script>
