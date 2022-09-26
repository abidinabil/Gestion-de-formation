<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_c']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit formation</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_formation.php">
				<input type="hidden" class="form-control" name="id_c" value="<?php echo $row['id_c']; ?>">
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">theme:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="theme" value="<?php echo $row['theme']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">mode:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mode" value="<?php echo $row['mode']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">lieu:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lieu" value="<?php echo $row['lieu']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">gouvernorat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gouvernorat" value="<?php echo $row['gouvernorat']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">periode du:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="periode" value="<?php echo $row['periode']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">fin periode:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="f_periode" value="<?php echo $row['fin_periode']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">temps:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="temps" value="<?php echo $row['temps']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">fin_temps:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="f_temps" value="<?php echo $row['fin_t']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">pause:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="pause" value="<?php echo $row['pause']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">fin_pause:</label>
					</div>
					<div class="col-sm-10">
						<input type="time" class="form-control" name="fin_p" value="<?php echo $row['fin_p']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_c']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete formation</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['id_c']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_formation.php?id_c=<?php echo $row['id_c']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>