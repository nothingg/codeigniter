<? $activate_code =  substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,1 ) .substr( md5( time() ), 1);?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">General</h3>
    </div>
    <div class="panel-body">
    	<div class="table-responsive">
            <form action="<?php echo base_url().'register/general'?>" method="post">
            <div class="form-group">
                
                <label>Given Name</label>
                <input name="name" class="form-control" placeholder="Enter Given Name" value="<?php echo @$result->name?>">
                
                <label>Family Name</label>
                <input name="surname" class="form-control" placeholder="Enter Family Name" value="<?php echo @$result->surname?>">
                
                <label>Title</label>
                <input name="title" class="form-control" placeholder="Enter Title" value="<?php echo @$result->title?>">
                
                <label>Date of Birth</label>
                <input name="birthdate" class="form-control" placeholder="Enter Date of Birth" value="<?php echo @$result->birthdate?>">
                
                <label>Password</label>
                <input name="password" class="form-control" placeholder="Enter Password" value="<?php echo @$result->password?>">
                
                <label>Confirm Password</label>
                <input name="password" class="form-control" placeholder="Confirm Password" value="<?php echo @$result->password?>">
                
                <label>Photo (Official Photo)</label>
                <input name="photo_path" class="form-control" placeholder="Enter " value="<?php echo @$result->photo_path?>">
                
                <label>Mobile</label>
                <input name="mobile" class="form-control" placeholder="Enter Mobile Number" value="<?php echo @$result->mobile?>">
                
                <label>E-Mail</label>
                <input name="email" class="form-control" placeholder="Enter E-Mail" value="<?php echo @$result->email?>">
                
                <label>City of Birth</label>
                <input name="city_birth" class="form-control" placeholder="Enter City of Birth" value="<?php echo @$result->city_birth?>">
                
                <label>Country of Birth</label>
                <input name="country_birth" class="form-control" placeholder="Enter Country of Birth" value="<?php echo @$result->country_birth?>">
                
                <label>Home Address</label>
                <input name="address" class="form-control" placeholder="Enter Home Address" value="<?php echo @$result->address?>">
                
                <label>Postal Address</label>
                <input name="postal_address" class="form-control" placeholder="Enter Postal Address" value="<?php echo @$result->postal_address?>">
                
				<input type="hidden" name="regis_id" value="<?php echo @$result->regis_id?>">
                <button type="submit" class="btn btn-default">Submit Button</button>
            </div>
            </form>
        </div>
    </div>
</div>