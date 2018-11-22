<?php defined('local_access') || die('Direct access not permitted'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="/assets/js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="/assets/css/bulma.min.css">
		<!-- Considering how large fontawesome is, it's better to use CDN link here -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">	
		<title>
			<?= isset($PageTitle) ? $PageTitle : "Default Title"?>
		</title>
<?php 
	if (function_exists('customPageHeader')){
  	customPageHeader();
	}
?>
  </head>
	<script>
		// Vanilla Javascript
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
	<body class="has-navbar-fixed-top">

		<div id="modal-login" class="modal">
			<div class="modal-background"></div>
			<div class="modal-card" style="max-width:550px">
				<header class="modal-card-head">
					<p class="modal-card-title" style="color:green;font-weight:bold">Eric's ACME Shop</p>
					<button class="delete" aria-label="close" onclick="showLogin(false)"></button>
				</header>
				<section class="modal-card-body">
								<h1 class="title is-5" style="margin-left:15px">Login</h1>
								<div class="field">
									<label class="label">User Name</label>
									<div class="control has-icons-left has-icons-right">
										<input id="login_username" class="input" type="text" placeholder="User Name">
										<span class="icon is-small is-left">
											<i class="fas fa-user"></i>
										</span>
									</div>
								</div>
								<div class="field">
									<label class="label">Password</label>
									<div class="control has-icons-left has-icons-right">
										<input id="login_password" class="input" type="text" placeholder="Password">
										<span class="icon is-small is-left">
											<i class="fas fa-key"></i>
										</span>
									</div>
								</div>
				</section>

				<footer class="modal-card-foot" style="justify-content:flex-end">
					<button id="cancel_btn" class="button" onclick="showLogin(false)">Cancel</button>
					<button id="login_btn"  class="button is-danger">Login</button>
				</footer>
			</div>
		</div>

		<div id="modal-signup" class="modal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head">
					<p class="modal-card-title" style="color:green;font-weight:bold">Eric's ACME Shop</p>
					<button class="delete" aria-label="close" onclick="showSignUp(false)"></button>
				</header>
				<section class="modal-card-body">
					<div class="columns">
						<div class="column">
							<h1 class="title is-5">Sign Up using:</h1>
							<ul>
								<li class="title is-5"><i class="fab fa-facebook" style="color:rgba(59,89,152)"></i> Facebook</li>
								<li class="title is-5"><i class="fab fa-twitter-square" style="color:rgba(0,132,180)"></i> Twitter</li>
								<li class="title is-5"><img src="/assets/images/google_g_icon.png" style="height:20px;width:20px"></img> Google</li>
							</ul>
						</div>
						<div class="column is-1" style="border-left:2px solid lightgray"></div>
						<div class="column" style="margin-right:20px">
							<h1 class="title is-5" style="margin-left:15px">Or by e-mail:</h1>
							<div class="field">
								<label class="label">E-Mail</label>
								<div class="control has-icons-left has-icons-right">
									<input id="signup_email" class="input" type="text" placeholder="E-mail">
									<span class="icon is-small is-left">
											<i class="fas fa-envelope"></i>
									</span>
								</div>
							</div>

							<div class="field">
								<label class="label">Name (e.g. First & Last Name)</label>
								<div class="control has-icons-left has-icons-right">
									<input id="signup_name" class="input" type="text" placeholder="Name">
									<span class="icon is-small is-left">
											<i class="fas fa-user"></i>
									</span>
								</div>
							</div>

							<div class="field">
								<label class="label">User Name</label>
								<div class="control has-icons-left has-icons-right">
									<input id="signup_username" class="input" type="text" placeholder="User Name">
									<span class="icon is-small is-left">
											<i class="fas fa-user"></i>
									</span>
								</div>
							</div>
							<div class="field">
								<label class="label">Password</label>
								<div class="control has-icons-left has-icons-right">
									<input id="signup_password" class="input" type="text" placeholder="Password">
									<span class="icon is-small is-left">
										<i class="fas fa-key"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</section>

				<footer class="modal-card-foot" style="justify-content:flex-end">
					<button id="cancel_btn" class="button" onclick="showSignUp(false)">Cancel</button>
					<button id="login_btn"  class="button is-primary">Sign Up</button>
				</footer>
			</div>
		</div>
	<div>

	<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
		<div class="navbar-menu">
			<div class="navbar-end">
				<div class="navbar-item">
					<!--TODO: This will show logout if users have logged in. -->
					<div class="buttons">
						<div class="button" onclick="showLogin(true)">
							Login
						</div>
						<div class="button" onclick="showSignUp(true)">
							Sign Up
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
