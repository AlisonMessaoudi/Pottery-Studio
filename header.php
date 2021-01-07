<nav class="navbar mt-3 navbar-expand-lg shift">

    <a class="navbar-brand" href="#">Pottery Studio</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a class="nav-link" href="{{ path('accueil') }}">Accueil</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ path('apropos') }}">A propos</a>
            </li>
            
            <li class="nav-item {{ ROUTE_NAME == 'boutique' ? 'active' }}">
                <a class="nav-link" href="#">Boutique</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ path('contact') }}">Contact</a>
            </li>
        
        </ul>

    </div>

</nav>