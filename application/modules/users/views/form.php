<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Form</h3>
    </div>
    <div class="panel-body">
    	<div class="table-responsive">
            <form action="<?php echo base_url().'users/save'?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                
                <label>Username</label>
                <input name="username" class="form-control" placeholder="Enter Username" value="<?php echo @$result->username?>">

                <label>Password</label>
                <input name="password" class="form-control" placeholder="Enter Password" value="<?php echo @$result->password?>">

                <label>Address</label>
                <input name="address" class="form-control" placeholder="Enter Password" value="">

                <label>Education</label>
                <input name="academy[]" class="form-control" placeholder="Enter Password" value="">
                <input name="grade[]" class="form-control" placeholder="Enter Password" value="">

                <br>

                 <label>Education</label>
                <input name="academy[]" class="form-control" placeholder="Enter Password" value="">
                <input name="grade[]" class="form-control" placeholder="Enter Password" value="">

                <br> <br>

                <input type="file" name="image">

                <input type="hidden" name="id" value="<?php echo @$result->id ?>" />
                <button type="submit" class="btn btn-default">Submit Button</button>


            </div>
            </form>
        </div>
        
    </div>
</div>