        <section class="cta-section">
            <a href="#" class="button cta-button white">Skal vi kontakte dig?</a>
            <form action="" class="cta-form">
                <div class="split">
                    <div>
                        <input type="text" name="name" required>
                        <label for="name">Navn</label>
                    </div>
                    <div>
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="split">
                   <div>
                        <input type="text" name="telefon" required>
                        <label for="telefon">Telefonnummer</label>
                    </div>
                    <div>
                        <input type="text" name="company">
                        <label for="company">Firmanavn</label>
                    </div>
                </div>
                <div>
                    <textarea rows="2" name="message"></textarea>
                    <label for="message">Besked</label>
                </div>
                <div class="center button-div">
                    <input type="submit" class="button submit" name="submit" value="send">
                </div>
            </form>
        </section>
    </div>
    <footer class="site-footer">
        <?php echo get_template_part('template-parts/footer/footer-legal'); ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>