<?php
    include 'header.php';
	require_once './componentes/componentes.php';	
?>

<main class="page-content">
    <article class="main-article" aria-labelledby="page-title">
        <h1 id="page-title">Bem-vindo ao Meu site</h1>
        <p>Um espaço para compartilhar ideias, projetos e novidades.</p>

        <section aria-labelledby="presentation-title">
            <h2 id="presentation-title">Conheça nosso projeto</h2>
            <p>Este site foi criado para apresentar nosso trabalho e reunir informações em um só lugar.</p>
            <p>Aqui você encontra um pouco da nossa história, acompanha nossas novidades e descobre como entrar em contato.</p>
            <a href="sobre.php" class="content-button">Saiba mais sobre nós</a>
        </section>
		
		<?php echo Card("Aula de PW XD") ?>
		
        <section aria-labelledby="news-title">
            <h2 id="news-title">Novidades</h2>
            <p>Estamos preparando novos conteúdos para você. Acompanhe o site para conhecer nossos próximos projetos!</p>
        </section>
    </article>

    <aside class="sidebar" aria-label="Informações complementares">
        <section aria-labelledby="links-title">
            <h2 id="links-title">Explore o site</h2>
            <nav aria-label="Links complementares">
                <ul>
                    <li><a href="sobre.php">Conheça nossa história</a></li>
                    <li><a href="contato.php">Entre em contato</a></li>
                </ul>
            </nav>
        </section>

        <section aria-labelledby="contact-title">
            <h2 id="contact-title">Vamos conversar?</h2>
            <p>Tem uma dúvida ou sugestão? Acesse nossa página de contato e fale com a gente.</p>
        </section>
    </aside>
</main>

<?php
    include 'footer.php';
?>