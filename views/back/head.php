    <div class="page-wrapper">

        <aside class="menu-sidebar d-none d-lg-block">
            <div style="width: 285.4px; height: 150px;" class="logo">
                <a href="dash.php">
                    <img style="position: absolute; top: 0px; right:70px; height: 150px; "   src="images/icon/1.png" alt="BF Academie" />
                </a>
            </div>
            <div  class="menu-sidebar__content js-scrollbar1">
                <nav  class="navbar-sidebar">
                    <ul  class="list-unstyled navbar__list">

                        <li >
                            <a href="dash.php">
                                <i class="fas fa-table"></i>Dashboard</a>                                      
                        </li>
                                <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>service commercial</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                             <li >
                            <a href="affichage_categorie.php">
                                <i class="fas fa-table"></i>Gestion des Categories</a>
                        </li>
                        <li >
                            <a href="affichage_produits.php">
                                <i class="fas fa-table"></i>Gestion des Produits</a>
                        </li>
                        <li >
                            <a href="affichage_abonement.php">
                                <i class="fas fa-table"></i>Gestion des Abonements</a>
                        </li>   
                            </ul>
                        </li> 
                   </ul>
                        <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Pub et Promo</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               
                                <li >
                            <a href="afficher_data.php?page=<?PHP echo 1; ?>&sort=2&trie=<?PHP echo 0 ?>">
                                <i class="fas fa-table"></i>Gestion des Pubs </a>
                        </li>
                        <li >
                            <a href="afficher_data1.php">
                                <i class="fas fa-table"></i>Gestion des Promos</a>
                        </li> 
                                
                            </ul>
                        </li> 
                   </ul>
                      
                       
                               <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Gestion de la salle</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="affichercoach.php"><i class="fas fa-table"></i>afficher les Coaches</a>
                                </li>
                                <li>
                                    <a href="ajoutCoach.php"><i class="fas fa-table"></i>ajouter Coache</a>
                                </li>
                                <li >
                            <a href="affichercour.php">
                                <i class="fas fa-table"></i>Gestion des seances</a>
                         </li>
                            </ul>
                        </li> 
                   </ul>
                   <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>service client</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li >
                            <a href="table_Client.php">
                                <i class="fas fa-table"></i>Gestion des Clients</a>
                         </li>
                         <li>     
                                <a href="table_Reclamtion.php">
                                <i class="fas fa-table"></i>Gestion des Reclamations</a>
                        </li>  
                      
                                
                            </ul>
                        </li> 
                   </ul>
                       <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>service commande</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                         <li>     
                                <a href="afficherFacture.php">
                                <i class="fas fa-table"></i>Gestion des Factures</a>
                        </li> 
                        <li>     
                            <a href="afficherCommande.php?page=<?PHP echo ""; ?>&sort=2&trie=<?PHP echo 0 ?>">
                                <i class="fas fa-table"></i>Gestion des Commandes </a>
                             </li>  
                      
                                
                            </ul>
                        </li> 
                   </ul>
                         
                                
                            
                        
                   
                </nav>
            </div>
        </aside>

             <div class="page-container">
            <!-- HEADER DESKTOP-->
         