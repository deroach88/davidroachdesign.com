			<div class="screens">
				<div class="container">
					<?php
						$screen = get_post_meta( get_the_ID(), 'wpcf-screen' );

						if ( $screen ) {
							foreach ( $screen as $k => $v ) {
								echo sprintf ( '<img class="screen-%1$s" src="%2$s">', $k, $v );
							}
						}
					?>
				</div>
			</div>