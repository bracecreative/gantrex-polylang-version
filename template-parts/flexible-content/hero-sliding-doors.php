<?php if (get_row_layout() == 'hero_sliding_doors') { ?>

	<div class="h-screen flex flex-col">
		<section class="sliding__doors grow flex flex-col lg:flex-row">
			<?php if( have_rows('pane_1') ): ?>
				<?php while( have_rows('pane_1') ): the_row(); 
					$image1 = get_sub_field('background_image_pane_1');
					$choice = get_sub_field('image_or_video');
					$videoURL = get_sub_field('video_url_pane_1');

					if( $choice == 'image' ): ?>
						<div class="box bg-cover bg-center startOpen" style="background-image: url(<?php echo $image1['url']; ?>);">
							<div class="background__overlay w-full h-full flex items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php elseif( $choice == 'video' ): ?>

						<div class="box startOpen relative">
							<video src="<?php echo $videoURL; ?>" autoplay playsinline muted loop class="object-cover z-0 object-center w-full h-full absolute top-0 left-0"></video>

							<div class="background__overlay relative z-10 w-full h-full flex items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php if( have_rows('pane_2') ): ?>
				<?php while( have_rows('pane_2') ): the_row(); 
					$image1 = get_sub_field('background_image_pane_2');
					$choice = get_sub_field('image_or_video');
					$videoURL = get_sub_field('video_url_pane_2');

					if( $choice == 'image' ): ?>
						<div class="box bg-cover bg-center startOpen" style="background-image: url(<?php echo $image1['url']; ?>);">
							<div class="background__overlay w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php elseif( $choice == 'video' ): ?>

						<div class="box startOpen relative">
							<video src="<?php echo $videoURL; ?>" playsinline autoplay muted loop class="object-cover z-0 object-center w-full h-full absolute top-0 left-0"></video>

							<div class="background__overlay relative z-10 w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if( have_rows('pane_3') ): ?>
				<?php while( have_rows('pane_3') ): the_row(); 
					$image1 = get_sub_field('background_image_pane_3');
					$choice = get_sub_field('image_or_video');
					$videoURL = get_sub_field('video_url_pane_3');

					if( $choice == 'image' ): ?>
						<div class="box bg-cover bg-center startOpen" style="background-image: url(<?php echo $image1['url']; ?>);">
							<div class="background__overlay w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php elseif( $choice == 'video' ): ?>

						<div class="box startOpen relative">
							<video src="<?php echo $videoURL; ?>" playsinline autoplay muted loop class="object-cover z-0 object-center w-full h-full absolute top-0 left-0"></video>

							<div class="background__overlay relative z-10 w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if( have_rows('pane_4') ): ?>
				<?php while( have_rows('pane_4') ): the_row(); 
					$image1 = get_sub_field('background_image_pane_4');
					$choice = get_sub_field('image_or_video');
					$videoURL = get_sub_field('video_url_pane_4');

					if( $choice == 'image' ): ?>
						<div class="box bg-cover bg-center startOpen" style="background-image: url(<?php echo $image1['url']; ?>);">
							<div class="background__overlay w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php elseif( $choice == 'video' ): ?>

						<div class="box startOpen relative">
							<video src="<?php echo $videoURL; ?>" playsinline autoplay muted loop class="object-cover z-0 object-center w-full h-full absolute top-0 left-0"></video>

							<div class="background__overlay relative z-10 w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if( have_rows('pane_5') ): ?>
				<?php while( have_rows('pane_5') ): the_row(); 
					$image1 = get_sub_field('background_image_pane_5');
					$choice = get_sub_field('image_or_video');
					$videoURL = get_sub_field('video_url_pane_5');

					if( $choice == 'image' ): ?>
						<div class="box bg-cover bg-center startOpen" style="background-image: url(<?php echo $image1['url']; ?>);">
							<div class="background__overlay w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php elseif( $choice == 'video' ): ?>

						<div class="box startOpen relative">
							<video src="<?php echo $videoURL; ?>" playsinline autoplay muted loop class="object-cover z-0 object-center w-full h-full absolute top-0 left-0"></video>

							<div class="background__overlay relative z-10 w-full h-full flex items-center lg:items-end justify-center p-2 xl:p-6">
								<div class="max-w-[350px] mx-auto">
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<h3 class="uppercase sen-bold text-white text-2xl lg:text-xl 2xl:text-3xl lg:mb-4 text-center">
												<?php the_sub_field('title'); ?>
											</h3>
										</a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('link');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="hidden lg:block text-white gtx-btn uppercase text-sm xl:text-lg text-center mx-auto lg:mb-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="flex items-center justify-center">
												<?php echo esc_html( $link_title ); ?>
											</span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</section>

		<section class="blue__banner sen-bold p-4 text-xl lg:text-3xl uppercase text-center text-white">
			<?php the_sub_field('blue_banner'); ?>
		</section>

	</div>

	<?php } ?>