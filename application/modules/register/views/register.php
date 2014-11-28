<? $activate_code =  substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 1);?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Register</h3>
    </div>
    <div class="panel-body">
    	<div class="table-responsive">
            <form action="<?php echo base_url().'register/saveRegis'?>" method="post">
            <div class="form-group">
                
                <label>E-Mail</label>
                <input name="email" class="form-control" placeholder="Enter Username">

                <label>Password</label>
                <input name="password" class="form-control" placeholder="Enter Password">

                <label>Confirm Password</label>
                <input name="cpassword" class="form-control" placeholder="Confirm Password">
                
				<input type="hidden" name="activate_code" value="<?=$activate_code;?>">
                <button type="submit" class="btn btn-default">Submit Button</button>
            </div>
            </form>
        </div>
    </div>
</div>