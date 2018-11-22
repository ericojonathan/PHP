<?php
	$PageTitle = "Eric's ACME Shop";
?>
<script>
function showLogin(show){
	if(show == true){
		document.getElementById('modal-login').classList.add('is-active');
	} else if(show == false){
		document.getElementById('modal-login').classList.remove('is-active');
	}
}

function showSignUp(show){
	if(show == true){
		document.getElementById('modal-signup').classList.add('is-active');
	} else if(show == false){
		document.getElementById('modal-signup').classList.remove('is-active');
	}
}

</script>
<?php include_once("header.php"); ?>
	<div id="login" class="box" style="float:right;font-size:14px;margin:15px;width:165px;max-height:60px">
		<div class="columns">
			<div class="column">
				<a onclick="showLogin(true)">Login</a>
			</div>
			<div class="column">
				<a onclick="showSignUp(true)">Sign Up</a>
			</div>
		</div>	

		<div id="modal-login" class="modal">
			<div class="modal-background"></div>
			<div class="modal-card" style="max-width:550px">
				<header class="modal-card-head">
					<p class="modal-card-title" style="color:indianred;font-weight:bold">Login</p>
					<button class="delete" aria-label="close" onclick="showLogin(false)"></button>
				</header>
				<section class="modal-card-body">
					<input id="login_username_txt" class="input" type="text" placeholder="username" style="margin:15px;max-width:475px">
					<input id="login_password_txt" class="input" type="password" placeholder="password" style="margin:15px;max-width:475px">
				</section>
				<footer class="modal-card-foot" style="justify-content:flex-end">
					<button id="cancel_btn" class="button" onclick="showLogin(false)">Cancel</button>
					<button id="login_btn"  class="button is-danger">Login</button>
				</footer>
			</div>
		</div>

		<div id="modal-signup" class="modal">
			<div class="modal-background"></div>
			<div class="modal-card" style="max-width:550px">
				<header class="modal-card-head">
					<p class="modal-card-title" style="color:green;font-weight:bold">Sign Up</p>
					<button class="delete" aria-label="close" onclick="showSignUp(false)"></button>
				</header>
				<section class="modal-card-body">
					<input id="signup_email_txt" class="input" type="text" placeholder="E-Mail" style="margin:15px;max-width:475px">
					<input id="signup_username_txt" class="input" type="text" placeholder="username" style="margin:15px;max-width:475px">
					<input id="signup_password_txt" class="input" type="password" placeholder="password" style="margin:15px;max-width:475px">
				</section>
				<footer class="modal-card-foot" style="justify-content:flex-end">
					<button id="cancel_btn" class="button" onclick="showSignUp(false)">Cancel</button>
					<button id="login_btn"  class="button is-primary">Sign Up</button>
				</footer>
			</div>
		</div>


	</div>
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
							<div class="card is-rounded" style="border:1px solid grey;border-bottom-left-radius:10%;box-shadow:5px 5px 8px lightgray;height:100%">
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
