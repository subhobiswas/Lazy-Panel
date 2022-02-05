<?php include 'header.php';
$disk=disk();
$os=os();
?>
<style>
	.card {
		overflow: hidden;
	}

	.card-block .rotate {
		z-index: 8;
		float: right;
		height: 100%;
	}

	.card-block .rotate i {
		color: rgba(20, 20, 20, 0.15);
		position: absolute;
		left: 0;
		left: auto;
		right: -10px;
		bottom: 0;
		display: block;
		-webkit-transform: rotate(-44deg);
		-moz-transform: rotate(-44deg);
		-o-transform: rotate(-44deg);
		-ms-transform: rotate(-44deg);
		transform: rotate(-44deg);
	}
</style>
<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-xl-3 col-lg-6">
			<div class="card card-inverse card-success">
				<div class="card-block bg-success">
					<div class="rotate">
						<i class="fa fa-user fa-5x"></i>
					</div>
					<h6 class="text-light m-2" >RAM</h6>
					<h1 class="display-1 text-light m-2"><?php ram() ?></h1>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6">
			<div class="card card-inverse card-danger">
				<div class="card-block bg-danger">
					<div class="rotate">
						<i class="fa fa-list fa-4x"></i>
					</div>
					<h6 class="text-light m-2">CPU</h6>
					<h1 class="display-1 text-light m-2"><?php cpu() ?></h1>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6">
			<div class="card card-inverse card-info">
				<div class="card-block bg-info">
					<div class="rotate">
						<i class="fa fa-twitter fa-5x"></i>
					</div>
					<h6 class="text-light m-2">DISK</h6>
					<p class="display-1 text-light m-2">OS : <?php $os['name'] ?></p>
					<p class="display-1 text-light m-2">VERSION : <?php $os['version'] ?></p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6">
			<div class="card card-inverse card-warning">
				<div class="card-block bg-warning">
					<div class="rotate">
						<i class="fa fa-share fa-5x"></i>
					</div>
					<h6 class="text-uppercase">OS INFO</h6>
					<p class="display-1 text-light m-2">USAGE : <?php formatSizeUnits($disk['useg']) ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>