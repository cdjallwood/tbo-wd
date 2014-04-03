<?php include('../includes/header.php'); ?>
	<section class="site-body">
		
		<?php include('../includes/sub-hero.php'); ?>

		<article class="m-info-block">
			<div class="container">
				<header class="l-grid-8 block-centered">
					<h2>Conference Schedule</h2>
					<p class="archer-italic">Please take these timings (and speaker order) with a pinch of salt. It'll be firmed up in the next few months.</p>

				</header>
				<div class="l-grid-row">
					<ul class="m-inline-list m-schedule">

						<li class="schedule-item">
							<div class="schedule-avatar l-grid-5 t-grid-third block-centered">
								<h2>09:00</h2>
								<h3>Opening Ceremony</h3>
								<p class="archer-italic">Let the show begin!</p>
							</div>
						</li>

<?php $ix = 1;  ?>						
<?php foreach ($_CONFIG["SPEAKERS"] as $speaker_id => $speaker_hash) { ?>

						<li class="schedule-item">
							<div class="schedule-avatar l-grid-5 t-grid-third block-centered">
								<h2 id="<?php echo strtolower($speaker_id); ?>"><?php echo $speaker_hash["TALK_TIME"]; ?></h2>
								<span class="image-wrapper">
									<img src="/assets/content/speakers/<?php echo $speaker_hash["IMAGE"]; ?>" alt="Paul Boag">
								</span>
								<h2><?php echo $speaker_hash["NAME"]; ?></h2>
								<p class="archer-italic"><?php echo $speaker_hash["TITLE"]; ?></p>
							</div>
							<a class="js-slidetoggle m-btn slim btn-secondary" href="#">Toggle talk info <span class="icon-arrow-down"></span></a>
							<div class="js-slidetoggle-container schedule-details-container l-grid-16">
								<div class="">
									<h3>BIO</h3>
									<?php echo $speaker_hash["BIO"]; ?>
								</div>
								<div class="">
									<h3>Talk Summary</h3>
									<?php echo $speaker_hash["SUMMARY"]; ?>
								</div>
							</div>
						</li>

						<?php 
							switch($ix++){
								case 2: // morning break
?>

						<li class="schedule-item">
							<div class="schedule-avatar l-grid-6 t-grid-4 block-centered">
								<h2>10.45 - 11.15</h2>
								<h3>Morning Break</h3>
								<p class="archer-italic">Tea and coffee is served (m'lud!)</p>
							</div>
						</li>
<?php									
									break;
								case 4: // lunch
?>

						<li class="schedule-item">
							<div class="schedule-avatar l-grid-6 t-grid-4 block-centered">
								<h2>12.45 - 13.45</h2>
								<h3>Lunch Break</h3>
								<p class="archer-italic">Lunch details to be confirmed.</p>
							</div>
						</li>

<?php								
									break;
								case 6: // afternoon break
?>

						<li class="schedule-item">
							<div class="schedule-avatar l-grid-6 t-grid-4 block-centered">
								<h2>15.15 - 15.45</h2>
								<h3>Afternoon Break</h3>
								<p class="archer-italic">...a quick brew to perk you up</p>
							</div>
						</li>
<?php
									break; 
							}
						?>
<?php } ?>





						<li class="schedule-item">
							<div class="schedule-avatar l-grid-5 t-grid-third block-centered">
								<h2>17.15</h2>
								<h3>Panel Session</h3>
								<p class="archer-italic">Open mic Q&amp;A with the speakers</p>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</article>

		

		<article class="m-info-block d-highlight">
			<div class="container">
				<header>
					<h2>The Sponsors</h2>
				</header>
				<div class="l-grid-row">
					<ul class="m-inline-list centered-block sponsor tier-1">
						<li class="tile-item l-clear-3 l-grid-3 p-grid-2 t-grid-2">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail.jpg" alt="">
							</a>
						</li>
						<li class="tile-item l-grid-3 p-grid-2 t-grid-2">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail.jpg" alt="">
							</a>
						</li>
						<li class="tile-item l-grid-3 p-grid-2 t-grid-2">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail.jpg" alt="">
							</a>
						</li>
						<li class="tile-item l-grid-3 p-grid-2 t-grid-2">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail.jpg" alt="">
							</a>
						</li>
					</ul>
					<ul class="m-inline-list centered-block sponsor tier-2">
						<li class="tile-item l-clear-4 l-grid-2 p-grid-third t-grid-1">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail-small.jpg" alt="">
							</a>
						</li>
						<li class="tile-item l-grid-2 p-grid-third t-grid-1">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail-small.jpg" alt="">
							</a>
						</li>
						<li class="tile-item l-grid-2 p-grid-third t-grid-1">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail-small.jpg" alt="">
							</a>
						</li>
						<li class="tile-item l-grid-2 p-grid-third t-grid-1">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail-small.jpg" alt="">
							</a>
						</li>
						<li class="tile-item l-grid-2 p-grid-third t-grid-1">
							<a href="/sponsorship/">
								<img src="/assets/img/sponsor-thumbnail-small.jpg" alt="">
							</a>
						</li>
					</ul>
				</div>
				<footer>
					<p>Interested in sponsorship opportunities at The Business of Web Design?</p>
					<a href="/sponsorship/"><em>Take a look at our sponsorship pack.</em></a>
				</footer>
			</div>
		</article>

		<article class="m-info-block sign-up-cta centered extended-block">
			<div class="container">
				<h2 class="h1">The Business of <span>Web Design</span></h2>
				<p>Help &amp; advice from the front line of running 
a web design business</p>
				<p><strong>18th July 2013 - Atrium, Cardiff</strong></p>

				<a href="<?php echo $_CONFIG["TICKET_URL"]; ?>" class="m-btn btn-primary">Buy Tickets</a>
			</div>
		</article>

	</section>
<?php include('../includes/footer.php'); ?>