<?php
    include 'header.php';
?>

<main class="page-content">
    <article class="main-article" aria-labelledby="page-title">
        <h1 id="page-title">Contato</h1>
        <p>Tem alguma dúvida ou sugestão? Vamos conversar!</p>

        <section aria-labelledby="form-title">
            <h2 id="form-title">Escreva sua mensagem</h2>
            <p id="form-note" class="form-note">Formulário de demonstração: os dados ainda não são enviados.</p>

            <form class="contact-form" aria-describedby="form-note">
                <label for="name">Nome</label>
                <input type="text" id="name" name="nome" placeholder="Seu nome" autocomplete="name" maxlength="100" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="voce@exemplo.com" autocomplete="email" maxlength="254" required>

                <label for="subject">Assunto</label>
                <input type="text" id="subject" name="assunto" placeholder="Sobre o que você quer conversar?" maxlength="150" required>

                <label for="message">Mensagem</label>
                <textarea id="message" name="mensagem" rows="6" placeholder="Escreva sua mensagem aqui…" maxlength="5000" required></textarea>

                <button type="submit" class="content-button" disabled>Testar formulário</button>
                <p id="form-status" role="status"></p>
                <noscript><p>Ative o JavaScript para testar o formulário de demonstração.</p></noscript>
            </form>
        </section>
    </article>

    <aside class="sidebar" aria-label="Informações complementares">
        <section aria-labelledby="tips-title">
            <h2 id="tips-title">Como podemos ajudar?</h2>
            <p>Conte sua dúvida ou sugestão com detalhes para facilitar nossa conversa.</p>
        </section>
        <section aria-labelledby="links-title">
            <h2 id="links-title">Conheça o projeto</h2>
            <nav aria-label="Links complementares">
                <ul>
                    <li><a href="sobre.php">Sobre o site</a></li>
                    <li><a href="index.php">Voltar ao início</a></li>
                </ul>
            </nav>
        </section>
    </aside>
</main>

<script>
    const contactForm = document.querySelector('.contact-form');
    contactForm.addEventListener('submit', function (event) {
        event.preventDefault();
        document.querySelector('#form-status').textContent =
            'Campos preenchidos corretamente! Este é um teste; nenhuma mensagem foi enviada.';
    });
    contactForm.querySelector('button').disabled = false;
</script>

<?php
    include 'footer.php';
?>