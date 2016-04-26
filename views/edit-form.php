<form action="edit.php" method="post">
    <div class="form-group">
        <label for="link" class="col-md-12">Current Link:  </label>
        <div class="col-md-12">
            <input class="form-control" type="url" name="link" style="width: 60%" value="<?= $values["link"] ?>">
        </div>
    </div>
    
    <div class="form-group">
        <label for="desc" class="col-md-12"> Current Description:  </label>
        <div class="col-md-12">
            <textarea class="form-control" rows="2" name="desc" style="width:60%"><?= $values["info"] ?></textarea>
        </div>
    </div>
    
    <input type="hidden" name="unid" value="<?= $values["unid"] ?>">  

    
    <div class="col-md-4 col-md-offset-4" id="savbtn">
        <button class="btn btn-success" type="submit">
        <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
        Update!</button>
    </div>
</form>