<div class="content-module">
				
	<div class="content-module-heading cf">
	
		<h3 class="fl">Table design</h3>
		
		<a class="button round blue image-right ic-add text-upper fr" href="<?php echo base_url().'users/admin/form'?>">Add</a>
		
	
	</div> <!-- end content-module-heading -->
	
	<?php
		if($this->session->flashdata('item') == 'success'){
	?>
	<div class="confirmation-box round"> <?php echo $this->session->flashdata('message'); ?></div>
	<?php } ?>
	<div class="content-module-main" style="display: block;">
	
		<table id="example" class="display">	
			<thead>
				<tr>
					<th>Username</th>
					<? /*<th>Password</th>
					<th>FirstName</th>
					<th>SirName</th>
					<th>Email</th> */?>	
				</tr>
			</thead>
		
			<tbody>
				<?php foreach($result as $row) {?>
				<tr>
					<td><?php echo $row->username?></td>
					<? /*<td><?php echo $row->password?></td>
					<td><?php echo $row->firstname?></td>
					<td><?php echo $row->sirname?></td>
					<td><?php echo $row->email?></td> */?>
					<td>
						<a class="table-actions-button ic-table-edit" href="<?php echo base_url().'users/admin/form/'.$row->id?>"/></a>
						<a class="table-actions-button ic-table-delete" href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo base_url().'users/admin/delete/'.$row->id?>';}"</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>			
		</table>
	</div> <!-- end content-module-main -->

</div>
