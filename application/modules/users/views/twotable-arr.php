<?php debug($data)?>
<h1>Test</h1>


<a href="<?php echo base_url().'users/form' ?>" class="btn btn-primary btn-lg" role="button">Add »</a>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
    	<div class="table-responsive">
            <?php echo $data['username'].'-'.$data['password']; ?>

        </div>
    </div>
</div>

