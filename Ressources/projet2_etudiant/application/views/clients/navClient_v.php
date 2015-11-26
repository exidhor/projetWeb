

<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area"> 
      <li class="name"> 
        <h1><a href="">Espace Membre</a> </h1> 
      </li> 
      <li class="toggle-topbar menu-icon">
       <a href="#"><span>Menu</span></a></li>
    </ul> 

    <section class="top-bar-section"> 
    <ul class="left">
    <li><a href="#">Passer ma commande pour cette semaine</a></li>
    <li><a href="#">Consulter mes commandes</a></li>
    <li><a href="#">Modifier mes coordonnées</a></li>
    </ul>
    
    <ul class="right"> 
    <li>Bonjour <?= $this->session->userdata('login')?><li>
    <li><a href="<?php echo site_url('users_c/deconnexion');?>">se deconnecter</a></li> 
    </ul> 
    </section> 
</nav>