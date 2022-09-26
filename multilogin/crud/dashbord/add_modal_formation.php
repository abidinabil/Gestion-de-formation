<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_formation.php">
            <fieldset>
          <legend>cycle</legend>
             <p>Entreprise:Centre national de l'informatique</p>
          <div class="item">
            <label for="activity">Thème de formation<span>*</span></label>
            <input id="activity" type="text" name="theme" />
          </div>
          <div class="item">
            <label for="fee">Mode de formation<span>*</span></label>
            <input id="fee" type="text" name="mode" />
          </div>
          <div class="item">
            <label for="activity">Lieu de déroulement<span>*</span></label>
            <input id="activity" type="text" name="lieu" />
          </div>
          <div class="item">
            <label for="fee">Gouvernorat<span>*</span></label>
            <input id="fee" type="text" name="gouvernort" />
          </div>
          <div class="item">
            <label for="fee">periode:du:<span>*</span></label>
            <input id="bdate" type="date" name="bdate1" />
            <i class="fas fa-calendar-alt"></i>
          </div>

          <div class="item">
            <label for="bdate">au: <span>*</span></label>
            <input id="bdate" type="date" name="bdate2" />
            <i class="fas fa-calendar-alt"></i>
          </div>

           <div class="item">
            <label for="fee">horaire:du:<span>*</span></label>
            <input id="bdate" type="time" name="btime1" />
            
          </div>

          <div class="item">
            <label for="bdate">à: <span>*</span></label>
            <input id="bdate" type="time" name="btime2" />
            
          </div>

           <div class="item">
            <label for="fee">pause:du:<span>*</span></label>
            <input id="bdate" type="time" name="ptime1" />
            
          </div>

          <div class="item">
            <label for="bdate">à: <span>*</span></label>
            <input id="bdate" type="time" name="ptime2" />
            
          </div>
           
        </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>