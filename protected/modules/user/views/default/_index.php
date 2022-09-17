<div class="row-fluid user-row">
    <div class="span1">
        <img class="img-circle"
             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
             alt="User Pic">
    </div>
    <div class="span10">
        <strong><?php echo $data->username;?></strong><br>
        <span class="text-muted">User level: Administrator</span>
    </div>
    <div class="span1 dropdown-user" data-for=".<?php echo $data->username;?>">
        <i class="icon-chevron-down text-muted"></i>
    </div>
</div>
<div class="row-fluid user-infos <?php echo $data->username;?>">
    <div class="span10 offset1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">User information</h3>
            </div>
            <div class="panel-body">
                <div class="row-fluid">
                    <div class="span3">
                        <img class="img-circle"
                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                             alt="User Pic">
                    </div>
                    <div class="span6">
                        <strong><?php echo $data->username;?></strong><br>
                        <table class="table table-condensed table-responsive table-user-information">
                            <tbody>
                                <tr>
                                    <td>User level:</td>
                                    <td>Administrator</td>
                                </tr>
                                <tr>
                                    <td>Registered since:</td>
                                    <td>11/12/2013</td>
                                </tr>
                                <tr>
                                    <td>Topics</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Warnings</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn  btn-primary" type="button"
                        data-toggle="tooltip"
                        data-original-title="Send message to user"><i class="icon-envelope icon-white"></i></button>
                <span class="pull-right">
                    <button class="btn btn-warning" type="button"
                            data-toggle="tooltip"
                            data-original-title="Edit this user"><i class="icon-edit icon-white"></i></button>
                    <button class="btn btn-danger" type="button"
                            data-toggle="tooltip"
                            data-original-title="Remove this user"><i class="icon-remove icon-white"></i></button>
                </span>
            </div>
        </div>
    </div>
</div>