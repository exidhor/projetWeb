<div class="row">
    <div class="panel">
        <?php echo form_open('Users_c/form_valid_connexion'); ?>
        <label for="login">login:</label>
        <input type="text" name="login" value="<?php echo set_value('login');?>" />
        <?php echo form_error('login','<span class="error">',"</span>");?>
        <br>
        <label for="pass">Password: </label>
        <input type="password" name="pass" value="<?= set_value('pass');?>" />
        <?php echo form_error('pass','<span class="error">',"</span>");?>
        <br>
        <input type="submit" value="Connexion" />
        <?php if(isset($erreur))echo '<span class="error">'.$erreur."</span>";?>
        <?php echo form_close(); ?>
        <p><?= anchor('Users_c/inscription','Sign up!')?></p>
        <p><?= anchor('Users_c/mdp_oublie','Forgot password ?')?></p>
    </div>
</div>