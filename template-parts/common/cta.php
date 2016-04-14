<section class="cta-section">
    <a href="#" class="button cta-button white">Skal vi kontakte dig?</a>
    <form action="<?php echo admin_url('admin-ajax.php'); ?>" class="cta-form">
        <input type="hidden" name="action" value="cta">
        <div>
            <p>Udfyld kontaktformularen og vi skal kontakte dig snarest</p>
        </div>
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
                <input type="text" name="phone" required>
                <label for="phone">Telefonnummer</label>
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