<?php 
include 'header.php'; 
$db=new DbOparation();
$database=$db->GetAllDatabaseName();
echo '<pre>';
print_r($database);
?>
<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="col">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Database List</h6>
			</div>
			<div class="card-body">
				<section id="list">
					<table class="table table-striped" id="dataTable">
						<thead class="bg-primary text-light">
							<th>SL NO </th>
							<th>Database Name </th>
							<th>User</th>
							<th>Configure</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<td>1</td>
							<td>Default::root </td>
							<td>7.4 stable</td>
							<td>active</td>
							<td>/var/www/html/</td>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>