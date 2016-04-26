<form action="save.php" method="post">
    <div class="form-group">
        <label for="link" class="col-md-12">Link to save:  </label>
        <div class="col-md-12">
            <input class="form-control" type="text" name="link" placeholder="Paste url here" style="width: 60%" value="http://">
        </div>
    </div>
    
    <div class="form-group">
        <label for="desc" class="col-md-12"> Description for later reference:  </label>
        <div class="col-md-12">
            <textarea class="form-control" rows="2" name="desc" placeholder="Description" style="width:60%"></textarea>
        </div>
    </div>
    
    <div class="col-md-4 col-md-offset-4" id="savbtn">
        <button class="btn btn-success" type="submit">
        <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
        Save this Link!</button>
    </div>
</form>