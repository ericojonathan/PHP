<?php
	define('local_access', TRUE);
	$PageTitle = "Eric's ACME Shop";
?> 

<style>
ul li:before {
	font-family: "Webdings";
	content: "= ";
}
</style>

<?php include_once("header.php"); ?>

<script>
// JQuery
$(document).ready(function(){
	$(".card").mouseover(function(){
		$(this).css("box-shadow","5px 5px 8px gray");
		$(this).css("height","102%");
	});

$(".card").mouseout(function(){
		$(this).css("box-shadow","2px 2px 8px lightgray");
		$(this).css("height", "100%");
	});

});
</script>

	<div class="hero">
		<div class="hero-body">
			<h1 class="title"><?= $PageTitle; ?></h1>
			<h2 class="subtitle">Where Small Things Count.</h2>
		</div>
	</div>

  <div class="container">
				<p>Welcome to Eric's ACME shop, where you can find nice small things to buy that are perfect for you or as gifts for your loved ones and friends.</p>
				<p>Have fun shopping with us!</p>
				<div id="sample-products" style="margin-top:10px;">
					<div class="columns" style="height:370px">
						<div class="column is-2">
							<a href="">
								<div class="card is-rounded" clearfix style="border:1px solid grey;border-bottom-left-radius:10%;box-shadow:5px 5px 8px lightgray;height:100%">
								<div class="card-image">
									<img src="/assets/images/jewelry_bracelet.svg" style="max-height:300px"></img>
								</div>
								<div class="card-content">
									<h1 class="title" style="text-align:center">
										Gold Bracelet
									</h1>
								</div>
							</div>

							</a>
						</div>
						<div class="column is-2">
							<div class="card is-rounded" style="border:1px solid grey;box-shadow:5px 5px 8px lightgray;height:100%">
								<div class="card-image">
									<img src="/assets/images/little_santa.jpg"></img>
								</div>
								<div class="card-content">
										<h1 class="title" style="text-align:center">
											Little Santa
										</h1>
								</div>
							</div>
						</div>
						<div class="column is-2">
							<div class="card is-rounded" style="border:1px solid grey;box-shadow:5px 5px 8px lightgray;height:100%">
								<div class="card-image">
									<img src="/assets/images/romantic_candles.jpg"></img>
								</div>
								<div class="card-content">
										<h1 class="title is-4" style="text-align:center">
											Romantic Candles	
										</h1>
								</div>
							</div>
						</div>
						<div class="column is-2">
							<div class="card is-rounded" style="border:1px solid grey;box-shadow:5px 5px 8px lightgray;height:100%">
								<div class="card-image">
									<img src="/assets/images/small_xmas_tree.jpg"></img>
								</div>
								<div class="card-content">
										<h1 class="title is-4" style="text-align:center">
											Small Christmas Tree
										</h1>
								</div>
							</div>
						</div>
						<div class="column is-2">
							<div class="card is-rounded" style="border:1px solid grey;box-shadow:5px 5px 8px lightgray;height:100%">
								<div class="card-image">
									<img src="/assets/images/gold_keychain.jpg"></img>
								</div>
								<div class="card-content">
										<h1 class="title is-4" style="text-align:center">
											Gold Keychain
										</h1>
								</div>
							</div>
						</div>

					</div>
				</div>

<?php include_once("footer.php"); ?>
