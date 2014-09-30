		<aside id="sidebar">
			<div class="container">
				<?php
					$profile_photo = ot_get_option( 'profile_photo' );
					$heading = ot_get_option( 'heading' );
					$content = ot_get_option( 'content' );
					$email_address = ot_get_option( 'email_address' );
					$phone_number = ot_get_option( 'phone_number' );
					$twitter_url = ot_get_option( 'twitter_url' );
					$linkedin_url = ot_get_option( 'linkedin_url' );
					$dribbble_url = ot_get_option( 'dribbble_url' );
					$behance_url = ot_get_option( 'behance_url' );
				?>
				<div class="profile-photo">
					<img src="<?php echo $profile_photo; ?>" alt="David Roach">
				</div>
				<div class="profile">
					<h1><?php echo $heading; ?></h1>
					<?php echo $content; ?>
				</div>
				<div class="contact">
					<?php if ( $email_address || $phone_number || $twitter_url || $linkedin_url || $dribbble_url || $behance_url ){ ?>
						<h2>Contact</h2>
						<ul>
							<?php if ( $email_address ){ ?>
								<li>
									<strong>Email</strong>
									<br>
									<a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
								</li>
							<?php } ?>
							<?php if ( $phone_number ){ ?>
								<li>
									<strong>Phone</strong>
									<br>
									<?php echo $phone_number; ?>
								</li>
							<?php } ?>
							<?php if ( $twitter_url ){ ?>
								<li class="twitter">
									<a href="<?php echo $twitter_url; ?>" target="_blank">
										<span class="icon-twitter"></span>
									</a>
								</li>
							<?php } ?>
							<?php if ( $linkedin_url ){ ?>
								<li class="linkedin">
									<a href="<?php echo $linkedin_url; ?>" target="_blank">
										<span class="icon-linkedin"></span>
									</a>
								</li>
							<?php } ?>
							<?php if ( $dribbble_url ){ ?>
								<li class="dribbble">
									<a href="<?php echo $dribbble_url; ?>" target="_blank">
										<span class="icon-dribbble"></span>
									</a>
								</li>
							<?php } ?>
							<?php if ( $behance_url ){ ?>
								<li class="behance">
									<a href="<?php echo $behance_url; ?>" target="_blank">
										<span class="icon-behance"></span>
									</a>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>
			</div>
		</aside>