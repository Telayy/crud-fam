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

			<form method="POST" action="add.php">
            <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Category:</label>
					</div>
					<div class="col-sm-10">

                    <select name="product_category" class="form-select" aria-label="Default select example" required>
                        <option value="" disable selected>Select A Category</option>
                        <?php
                        $query = "SELECT * FROM `categories`";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run)>0){
                            foreach($query_run as $row){
                            ?>
                            <option value="<?=$row['cat_id'];?>"><?=$row['category_name'];?></option>
                            <?php
                        }}
                        else{
                        ?>
                        <option value="">No Record Found</option>
                        <?php
                        }
                        ?>
                    </select>
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Family:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="product_family" required>
					</div>
				</div>

            </div> <!-- //container-fluid -->
			</div> <!-- // Body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel
                </button>

                <button type="submit" name="add" class="btn btn-primary">
                	<span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

			    </form>
            </div>

        </div>
    </div>
</div>
