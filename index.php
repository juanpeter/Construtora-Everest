<?php
    include('template-parts/header/header.php');
    include('template-parts/aside/contact-menu/contact-menu.php');
    include('template-parts/aside/audio-button/audio-button.php');
?>

<!-- TO-DO make main have a padding, centralize content -->

<main class="container">
    <section data-aos="fade-right">
        <div class="shadowWrap">
            <div class='section-title'>
                <h2>Lançamentos</h2><span>| Uma oportunidade única de adquirir  seu imóvel na planta.</span>
            </div>
        </div>
        <div class="row">
            <?php
            $my_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                // TO-DO May wanna delete this later!
                'category_name' => 'Lançamento'
            );
            $my_query = new WP_Query ($my_args);
            ?>
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
        </div>
        <div class="row justify-content-center mt-3">
            <button class="call-to-action">Ver mais<i class="fas fa-arrow-right"></i></button>
        </div>        
    </section>
    <section data-aos="fade-left">
        <div class="shadowWrap">
            <div class='section-title'>
                <h2>Em construção</h2><span>| Seu sonho está a um passo de ser realizado.</span>
            </div>
        </div>
        <!-- Must be editable with php, see index.css TO-DO -->
        <div class="row">
        <?php
            $my_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                // TO-DO May wanna delete this later!
                'category_name' => 'Construção'
            );
            $my_query = new WP_Query ($my_args);
            ?>
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
        </div>
        <div class="row justify-content-center mt-3">
            <button class="call-to-action">Ver mais<i class="fas fa-arrow-right"></i></button>
        </div>
    </section>
</main>

<?php include('template-parts/footer/footer.php'); ?>