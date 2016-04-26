<form action="remove.php" method="post">
    <div class="panel panel-warning">
        <div class="panel-heading">Are you sure you want to delete this link?</div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Hyperlink</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $values["link"] ?></td>
                        <td><?= $values["info"] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <input type="hidden" name="unid" value="<?= $values["unid"] ?>">  
        
        <div class="panel-footer">
            <a class="btn btn-default" href="index.php" role="button">No, cancel this action.</a>
            <button type="submit" class="btn btn-warning">Yes, I'm sure. Delete!</button>
        </div>
    </div>
</form>