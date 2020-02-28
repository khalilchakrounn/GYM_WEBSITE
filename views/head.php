    <div class="page-wrapper">

        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="dash.php">
                    <img src="images/icon/logo.png" alt="BF Academie" width="100" height="100" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li >
                            <a href="dash.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                                      
                        </li>
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
                      
                        <li >
                            <a href="afficher_data.php?page=<?PHP echo 1; ?>&sort=2&trie=<?PHP echo 0 ?>">
                                <i class="fas fa-table"></i>Gestion des Pubs </a>
                        </li>
                        <li >
                            <a href="afficher_data1.php">
                                <i class="fas fa-table"></i>Gestion des Promos</a>
                        </li> 
                               <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Gestion des Coaches</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="affichercoach.php">afficher les Coaches</a>
                                </li>
                                <li>
                                    <a href="ajoutCoach.php">ajouter Coache</a>
                                </li>
                                
                            </ul>
                        </li> 
                   </ul>
                   <li >
                            <a href="affichercour.php">
                                <i class="fas fa-table"></i>Gestion des seances</a>
                         </li>
                        <li >
                            <a href="table_Client.php">
                                <i class="fas fa-table"></i>Gestion des Clients</a>
                         </li>
                         <li>     
                                <a href="table_Reclamtion.php">
                                <i class="fas fa-table"></i>Gestion des Reclamations</a>
                        </li>  
                        <li>     
                                <a href="afficherFacture.php">
                                <i class="fas fa-table"></i>Gestion des Factures</a>
                        </li> 
                        <li>     
                            <a href="afficherCommande.php?page=<?PHP echo ""; ?>&sort=2&trie=<?PHP echo 0 ?>">
                                <i class="fas fa-table"></i>Gestion des Commandes </a>
                                
                                
                            
                        
                   
                </nav>
            </div>
        </aside>

             <div class="page-container">
            <!-- HEADER DESKTOP-->
         