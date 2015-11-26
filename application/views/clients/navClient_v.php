<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area"> 
      <li class="name"> 
        <h1><a href="">Espace client</a> </h1>
      </li> 
      <li class="toggle-topbar menu-icon">
       <a href="#"><span>Menu</span></a></li>
    </ul> 

    <section class="top-bar-section"> 
    <ul class="left">
    <li><a href="#">Passer une commande</a></li>
    <li><a href="#">Consulter mes commandes</a></li>
    <li><a href="#">Modifier mes coordonées</a></li>
    </ul>
    
    <ul class="right"> 
    <li>Welcome <?= $this->session->userdata('login')?><li>
    <li><a href="<?php echo site_url('users_c/deconnexion');?>">Se déconnecter</a></li>
    </ul> 
    </section> 
</nav>