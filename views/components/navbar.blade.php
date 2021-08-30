


<div class="my_left_menu  navbar-collapse" id="navbarSupportedContent">   
    <nav id="navbar" class="navbar navbar-light">
       <nav class="nav nav-pills flex-column nav_bar">
           <a class="nav-link link " href="{{ url('./gestionUser') }}">Gestion des utilisateurs </a>
           <li class="mb-0">
            <a class="my-1 pl-3 nav-link collapsed link" data-bs-toggle="collapse" data-bs-target="#inscrit-collapse" aria-expanded="true">
                <span class="  fa fa-caret-down first"></span>  Listes des inscrits   
            </a>
            <div class="collapse show" id="inscrit-collapse">
              <ul class="btn-toggle-nav list-unstyled mb-0 ">
                <li><a href="{{ url('./listElectricien') }}" class="link-dark  nav-link ml-5 my-1 link"> Electricien</a></li>
                <li><a href="{{ url('./listRevendeur') }}" class="link-dark  nav-link ml-5 my-1 link">Revendeur</a></li>
              </ul>
            </div>
          </li>
       <a class="nav-link link" href="{{ url('./jeux') }}">Gestion des jeux concours</a>
       <a class="nav-link link" href="{{ url('./list_dist') }}"> Listes des distributeurs</a>
       <a class="nav-link link" href="{{ url('./gain') }}">Gain par profile</a>
<li class="mb-0">
    <a class="my-1 pl-3 nav-link collapsed link" data-bs-toggle="collapse" data-bs-target="#Tirage-collapse" aria-expanded="true">
        <span class=" fa fa-caret-down first"> </span> Tirage au sort  
    </a>
    <div class="collapse show" id="Tirage-collapse">
        <ul class="btn-toggle-nav list-unstyled mb-0 ">
           <nav class="nav nav-pills flex-column">
               <a class=" btn-toggle  ml-4 my-1 nav-link collapsed link" href="{{ url('./tirage_elec') }}">Electricien</a>
               <li class="mb-0">
                <button class="btn btn-toggle  ml-4 my-1 nav-link collapsed link" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                <!-- Revendeur  <span class=" ml-3 fa fa-caret-down first"></span> -->
                Revendeur <i class="mx-5  bi bi-caret-down-fill" style="top: 0px !important;" ></i>
                </button>
                <div class="collapse show" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled mb-0 ">
                    <li><a href="{{ url('./tirage_Revendeur_nationale') }}" class="link-dark  nav-link ml-5 my-1 link">National</a></li>
                    <li><a href="{{ url('./tirage_Revendeur_regional') }}" class="link-dark  nav-link ml-5 my-1 link">Regional</a></li>
                    <li><a href="{{ url('./tirage_Revendeur_ville') }}" class="link-dark  nav-link ml-5 my-1 link">Par ville</a></li>
                  </ul>
                </div>
              </li>
           </nav>
        </ul>
    </div>   
    </li> 
    <li><a class="nav-link link" href="{{ url('./liste_gagnant') }}" >Liste des gagnants</a></i>
        <li><a class="nav-link link" href="{{ url('./condition') }}">Conditions Générales</a></li>
        <li class="mb-0">
            <a class="my-1 pl-3 nav-link collapsed link" data-bs-toggle="collapse" data-bs-target="#scan-collapse" aria-expanded="true">
                <span class="  fa fa-caret-down first"></span> Résultats des scans   
            </a>
            <div class="collapse show" id="scan-collapse">
              <ul class="btn-toggle-nav list-unstyled mb-0 ">
                <li><a href="resultatElectricien" class="link-dark  nav-link ml-5 my-1 link"> Electricien</a></li>
                <li><a href="resultat_revendeur" class="link-dark  nav-link ml-5 my-1 link">Revendeur</a></li>
              </ul>
            </div>
        </li>
       </nav>
   </nav>
</div>

     