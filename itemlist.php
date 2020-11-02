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
					<div class="panel panel-headline">
						<form class="form-inline" action="" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name"  class="form-control">
								</div>

								<div class="form-group">
									<label for="name">Stock Balance</label>
									<input type="text" name="name" id="name"  class="form-control">
								</div>

								<div class="form-group">
									<label for="name">Price</label>
									<input type="text" name="name" id="name"  class="form-control">
								</div>

								<div class="form-group">
									<button class="btn btn-success" name="search">Search</button>
									
									<button type="cancel" class="btn btn-danger">Cancel</button>
								</div>


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
											<th>Action</th>
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