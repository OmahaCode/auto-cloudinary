<div class="wrap">

	<h2>Auto Cloudinary</h2>

	<div class="card">
		<h3><?php esc_html_e( 'Options', 'cloudinary' ); ?></h3>
		<form method="post" action="">
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="cloudinary_cloud_name"><?php esc_html_e( 'Cloud Name', 'cloudinary' ); ?></label></th>
						<td>
							<input name="cloudinary_cloud_name" id="cloudinary_cloud_name" value="<?php echo esc_html( get_option( 'cloudinary_cloud_name' ) ); ?>" class="regular-text" type="text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="cloudinary_auto_mapping_folder"><?php esc_html_e( 'Auto Mapping Folder', 'cloudinary' ); ?></label></th>
						<td>
							<input name="cloudinary_auto_mapping_folder" id="cloudinary_auto_mapping_folder" value="<?php echo esc_html( get_option( 'cloudinary_auto_mapping_folder' ) ); ?>" class="regular-text" type="text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="cloudinary_total_domains"><?php esc_html_e( 'Number of Domains', 'cloudinary' ); ?></label></th>
						<td>
							<input name="cloudinary_total_domains" id="cloudinary_total_domains" value="<?php
							$total_domains = get_option( 'cloudinary_total_domains' );
							echo empty( $total_domains ) ? 1 : esc_html( $total_domains );
							?>" class="regular-text" type="text">
							<p class="description"><?php esc_html_e( "Enter the total number of domains you'd like to use.", 'cloudinary' ); ?></p>
						</td>
					</tr>
				</tbody>
			</table>
			<?php wp_nonce_field( 'cloudinary_options', 'cloudinary_nonce' ); ?>
			<p class="submit"><input class="button-primary" value="<?php esc_html_e( 'Save', 'cloudinary' ); ?>" type="submit"></p>
		</form>
	</div> <!-- .card -->

</div> <!-- .wrap -->
