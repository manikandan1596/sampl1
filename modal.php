<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New PRODUCT</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="addForm">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">COMPANY:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="company" id="company">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">PRODUCTS:</label>
						</div>
						<div class="col-md-10">
							<textarea class="form-control" name="product" id="product"></textarea>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="addbutton" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
