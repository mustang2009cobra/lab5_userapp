<?php

?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
	<div class="container">
	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </a>
	  <a class="brand" href="<?= site_url('/main/index'); ?>">Text Pushy</a>
	  <div class="nav-collapse collapse">
		<ul class="nav pull-right">
		  <li><a href="<?= site_url('/main/login'); ?>">Login/Register</a></li>
		</ul>
	  </div><!--/.nav-collapse -->
	</div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
			<h1>Text Pushy</h1>
		</div>
		<div class="span2"></div>
	</div>
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
			<h3>Welcome to Text Pushy!</h3>
			<p>This is a module of Pushy that will send text notifications of 
				Google Calendar events to your phone.</p>
		</div>
		<div class="span2"></div>
	</div>
</div> <!-- /container -->

<script type="text/javascript">
	$(document).ready(function(){
		//Any page JS goes here
	});
</script>