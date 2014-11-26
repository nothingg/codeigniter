
<h1>Test</h1>


<a href="<?php echo base_url().'users/form' ?>" class="btn btn-primary btn-lg" role="button">Add »</a>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
    	<div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>UserName</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                	<?php 
						foreach($result as $row)
						{
					?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $row->username ?></td>
                        <td></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
