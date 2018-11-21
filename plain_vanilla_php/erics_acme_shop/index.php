<?php
	$PageTitle = "Eric's ACME Shop";
?>
<?php include_once("header.php"); ?>
	<div class="hero">
		<div class="hero-body">
			<h1 class="title"><?= $PageTitle; ?></h1>
			<h2 class="subtitle">Where Small Things Count.</h2>
		</div>
	</div>
  <div class="container">
				<p>Welcome to Eric's ACME shop, where you can find nice small things to buy that are perfect for you or as gifts for your loved ones and friends.</p>
				<p>Have fun shopping with us!</p>
				<div id="sample-products" style="margin-top:10px">
					<div class="columns">
						<div class="column is-2">
							<div class="card">
								<div class="card-image">
									<img src="/assets/images/jewelry_bracelet.svg"></img>
								</div>
								<div class="card-content">
										<h1 class="title" style="text-align:center">
											Gold Bracelet
										</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

<?php include_once("footer.php"); ?>
