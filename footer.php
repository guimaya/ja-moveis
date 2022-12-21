<footer>
    <div class="container">
        <div class="footer">
          <!-- Something -->
        </div>
        <div class="footer-dir row middle center tx-center pad-20">
            <p>® <?php bloginfo( 'name' ); echo ' '.date('Y').' | '; _e(' Todos os direitos reservados.', cts_add_theme_slug()); ?></p>
            <p>&nbsp<?php _e('Desenvolvido por', cts_add_theme_slug()); ?></p><a href="https://mayacomunicacao.com.br" target="_blank" title="Maya Comunicação"><img alt="Maya Comunicação" class="mar-l-5" src="<?php echo get_template_directory_uri()?>/assets/img/maya-2.png"></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
