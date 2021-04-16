<?php include 'crud.php'; ?>

<!--Edit form-->
  
    <div class="card bg-light shadow">
    <div class="card-body text-left">
      <form method="post" action="crud.php" >
        <input type="hidden" name="team_id" value="<?php echo $id; ?>">
        <div class="form-group">
          <label>Team Navn</label>
          <input type="text" name="team_navn" class="form-control" value="<?php echo $team_navn; ?>" >
        </div>
      
        <div class="form-group">
          <label>Points</label>
          <input type="number" name="points" class="form-control" value="<?php echo $points; ?>">
        </div>
        <div class="form-group">
            <?php if ($update == true): ?>
              <button class="btn btn-warning" type="submit" name="update">update</button>
              <button class="btn btn-secondary" type="submit" name="close">Close</button>
            <?php
          else: ?>
              <button class="btn btn-info" type="submit" name="save" >Add Team</button>
              <button class="btn btn-secondary" aligh="text-left" type="submit" name="close" >Close</button>
            <?php
          endif ?>
        </div>
      </form>
     </div>
  </div>

