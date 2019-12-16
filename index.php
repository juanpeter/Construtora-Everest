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

            <?php include('template-parts/post-cards/post-cards.php'); ?>

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

            <?php include('template-parts/post-cards/post-cards.php'); ?>
        
        </div>
        <div class="row justify-content-center mt-3">
            <button class="call-to-action">Ver mais<i class="fas fa-arrow-right"></i></button>
        </div>
    </section>
</main>

<?php include('template-parts/footer/footer.php'); ?>