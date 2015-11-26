<div class="row">
    <div class="panel">
        <h1>Forgot password</h1>
        <?php echo form_open('Users_c/validFormMdpOublie'); ?>

        <label for="email">Email : </label>
        <input type="text" name="email" value="<?php echo set_value('email');?>" />
        <?php echo form_error('email','<span class="error">',"</span>");?>
        <?php if(isset($erreur))echo '<span class="error">'.$erreur."</span>";?> <br>
        <input type="submit" value="Submit" />

        <?php echo form_close(); ?>
        <p><?= anchor('Users_c','Retour')?></p>
    </div>
</div>
