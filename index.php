<?php
    include('template-parts/header/header.php');
    include('template-parts/aside/contact-menu/contact-menu.php');
    include('template-parts/aside/audio-button/audio-button.php');
?>

<!-- TO-DO make main have a padding, centralize content -->
<main>
    <section data-aos="fade-right">
        <div class="shadowWrap">
            <div class='section-title'>
                <h2>Lançamentos</h2><span>| Uma oportunidade única de adquirir  seu imóvel na planta.</span>
            </div>
        </div>
        <!-- Must be editable with php, see index.css TO-DO -->
        <div class="post-row">
            <a href="#">
                <div class="post-container">
                    <!-- Must be editable with php, Post title and location -->
                    <h3>Puerto Ventura</h3>
                    <p>Cabo Branco</p>
                </div>
            </a>
            <a href="#">
                <div class="post-container">
                    <!-- Must be editable with php, Post title and location -->
                    <h3>Residêncial Colinas do Atlântico</h3>
                    <p>Miramar</p>
                </div>
            </a>
            <a href="#">
                <div class="post-container">
                    <!-- Must be editable with php, Post title and location -->
                    <h3>Flat Lorenzo Di Credi</h3>
                    <p>Tambaú</p>
                </div>
            </a>
        </div>
        <div class="row">
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
        <div class="post-row">
            <a href="#">
                <div class="post-container">
                    <!-- Must be editable with php, Post title and location -->
                    <h3>Puerto Ventura</h3>
                    <p>Cabo Branco</p>
                </div>
            </a>
            <a href="#">
                <div class="post-container">
                    <!-- Must be editable with php, Post title and location -->
                    <h3>Residêncial Colinas do Atlântico</h3>
                    <p>Miramar</p>
                </div>
            </a>
            <a href="#">
                <div class="post-container">
                    <!-- Must be editable with php, Post title and location -->
                    <h3>Flat Lorenzo Di Credi</h3>
                    <p>Tambaú</p>
                </div>
            </a>
        </div>
        <div class="row">
            <button class="call-to-action">Ver mais<i class="fas fa-arrow-right"></i></button>
        </div>
    </section>
</main>

<?php include('template-parts/footer/footer.php'); ?>