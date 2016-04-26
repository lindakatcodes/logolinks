<!-- add new link form -->
<div id="logalink" >
    <form action="save.php" method="post" class="form-inline">
        <div class="form-group" id="add">
            <label for="link" class="col-sm-3">Add Link:</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="link" placeholder="Paste url here" style="width: 115%" value="http://">
            </div>
        </div>
        
        <div class="form-group" id="describe">
            <label for="desc" class="col-sm-3">Description:</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="desc" placeholder="Description" style="width:135%">
            </div>
        </div>
        
        <div class="form-group" id="btnsav">
            <div class="col-sm-4 col-sm-offset-8" id="savbtn">
                <button class="btn btn-success" type="submit">
                <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                Log It!</button>
            </div>
        </div>
    </form>
</div>


<?php if($rows == NULL)
    echo "<h3>Add links using the form above. They'll show up here!</h3>";
    else { ?>
<!-- table for linklog view -->
<div id="linklog">
    <table class="table table-striped table-hover table-condensed table-bordered">
        <thead>
            <tr>
                <th>Date Saved</th>
                <th>Hyperlink</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $row): ?>
                <tr>
                    <td><?= $row["Date Saved"] ?></td>
                    <td><a href="<?= $row["Hyperlink"] ?>" target="_blank"><?= $row["Hyperlink"] ?></a></td>
                    <td><?= $row["Description"] ?></td>
                    <?php echo "<td><a href='edit.php?unid=". $row["unid"] ."'>Edit</a></td>"; ?>
                    <?php echo "<td><a href='remove.php?unid=". $row["unid"] ."'>Delete</td>"; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php } ?>