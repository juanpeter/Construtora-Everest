<?php if( $my_query->have_posts()) : while( $my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="col-md-4">
            <a href="<?php the_permalink(); ?>">
            <div class="post-container" 
            style="background-image: 
                linear-gradient(180deg, rgba(0, 0, 0, 0.2) 0%, 
                rgba(0, 0, 0, 0.3) 43.75%, rgba(0, 0, 0, 0.81) 100%),
                url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            )">
                <!-- Must be editable with php, Post title and location -->
                <h3><?php the_title(); ?></h3>
            </div>
                <!-- <div class="card h-100">
                    <?php the_post_thumbnail( 'post_thumbnail', array('class' =>  'img-fluid card-img-top') ) ?>
                    <h5 class="card-title mb-4">
                        <?php the_title(); ?>
                    </h5>
                    <div class="card-body">
                    </div>
                </div> -->
            </a>
        </div>
<?php endwhile; endif;?>
<?php wp_reset_query();?>