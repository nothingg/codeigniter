<div class="content-module">
	
	<div class="content-module-heading cf">
		<h3 class="fl">Users</h3>
	</div> 
	
	<div class="content-module-main" style="display: block;">
		<?php
			if($this->session->flashdata('item') == 'success'  ){
		?>
			<div class="confirmation-box round"><?php echo $this->session->flashdata('message') ?></div>
		<? } ?>
			<form id="frm_users" method="post" action="<?php echo base_url().'users/admin/save'?>">
			
				<fieldset>
					<p>
						<label for="simple-input">Username</label>
						<input type="text" id="username" name="username" class="round default-width-input" value="<?php echo @$result->firstname ?>"  />
					</p>
					<p>
						<label for="simple-input">RE - Password</label>
						<input type="text" id="password" name="password" class="round default-width-input" value=""  />
					</p>
					<? /*<p>
						<label for="simple-input">FirstName</label>
						<input type="text" id="firstname" name="firstname" class="round default-width-input" value="<?php echo @$result->firstname ?>" />
					</p>
					
					<p>
						<label for="simple-input">Sirname</label>
						<input type="text" id="sirname" name="sirname" class="round default-width-input" value="<?php echo @$result->sirname ?>"  />
					</p>
					
					<p>
						<label for="simple-input">E-mail</label>
						<input type="text" id="email" name="email" class="round default-width-input" value="<?php echo @$result->email ?>"  />
					</p>
					*/?>
					<p>
						<input type="hidden" name="id" value="<?php echo @$result->id ?>" />
						<input type="submit" value="Submit Button" class="round blue ic-right-arrow">
					</p>
				</fieldset>
				
			</form>	
	</div>
</div>

<script>
	$(function(){
		
		$("#frm_users").validate({
			rules: {
				username: "required",
				password: "required",
				
			},
			messages: {
				username: "Please enter your username",
				password: "Please enter your password",
				
			}
		});	
	});
</script>


