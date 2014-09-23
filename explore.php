<?PHP require 'includes/header.php'; ?>
	
	<div id="content">	
		<!-- Make sure all your bars are the first things in your <body> -->
		<header class="bar-title">
			<button class="button" id="toggle-left">Menu</button>
			<h1 class="title">amYoga</h1>
			<!--<button class="button" id="toggle-right">Bookings</button>-->
		</header>
		<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
		<div class="content">
            <?php for($i=1; $i<=10; $i++ ){ ?> 
			<div class="media-grid" style="border-bottom: 2px solid #1E824C;padding-bottom: 5px;">
				<div class="row">
                    <div class="media">
                        <div class="one-third">
						  <a href="#"><img src="static/img/placeholders/95.gif"></a>
                        </div>
                        <h3>Matsyasana</h3><br>
                        <h5>Time : 09:30 AM</h5>
                        <h5>Duration : 1 Hour @ Edgware</h5>
                        <button class="btn btn-positive pull-right">£ 25 / session</button></li>
                    </div>
				</div>
			</div>
            <?php } ?>
		</div>
	</div>
	<?PHP require 'includes/footer.php'; ?>