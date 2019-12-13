<?php wp_enqueue_style( 'contact-menu', get_template_directory_uri() . '/template-parts/aside/contact-menu/style.css' ); ?>
<aside class='fixed-circle shadow' id='contact'>
    <i class="fas fa-headset"></i>
</aside>
<aside id="contact-menu" class="shadow d-none">
    <div class="card-header">
        <h2 class="mb-0">Contato</h2>
    </div>
    <div class="card-body">
        <div class="form-group">
            <h4>Preencha o formulário, será um prazer atendê-lo!</h4>
            <form action="" method="post">
                <input type="text" name="nome" class="form-control my-3" placeholder="Nome">
                <input type="text" name="email" class="form-control my-3" placeholder="Email">
                <textarea name="mensagem" cols="20" rows="5" class="form-control" placeholder="Mensagem"></textarea>
                <button type="button" class="btn btn-warning mt-3">Enviar</button>
            </form>
        </div>
    </div>
</aside>