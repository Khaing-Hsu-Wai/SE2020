<?php 
require 'link.php';
include 'navbar.php';
include 'sidebar.php';
 ?>
	<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Item</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data">
								
									<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" required="" class="form-control">
								</div>

								<div class="form-group">
									<label for="photo">Photo</label>
									<input type="file" name="photo" id="photo" required="" accept="image/*" class="form-control">
								</div>

								<div class="form-group">
									<label for="stockbalance">Stock Balance</label>
									<input type="text" name="stockbalance" id="stockbalance" required="" class="form-control">
								</div>
								

								<div class="form-group">
									<label for="price">Price</label>
									<input type="text" name="price" id="price" required="" class="form-control">
								</div>

								<div class="form-group">
									<label for="warehouse">Warehouse</label>
									<input type="text" name="warehouse" id="warehouse"  class="form-control">
								</div>

								<div class="form-group">
									<label for="description">Description</label>
									<textarea name="description" id="description" required="" class="form-control"></textarea>
								</div>

								<div class="form-group">
									<button class="btn btn-success" name="add">Save</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>

							</form>
						</div>
					</div>


					<div class="panel panel-headline">
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Photo</th>
											<th>Stock Balance</th>
											<th>Price</th>
											<th>Warehouse</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody id="itemlist">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->




<?php 
require 'footer.php';
 ?>