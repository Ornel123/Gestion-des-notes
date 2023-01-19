<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="index.html">
            <i class="bi bi-house"></i>
            <span>Accueil</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-file-earmark-excel"></i><span>Importation de fichiers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('filieres') }}">
                    <i class="bi bi-circle"></i><span>Filières</span>
                </a>
            </li>
            <li>
                <a href="components-accordion.html">
                    <i class="bi bi-circle"></i><span>Niveaux</span>
                </a>
            </li>
            <li>
                <a href="components-badges.html">
                    <i class="bi bi-circle"></i><span>Classes</span>
                </a>
            </li>
            <li>
                <a href="components-breadcrumbs.html">
                    <i class="bi bi-circle"></i><span>UEs</span>
                </a>
            </li>
            <li>
                <a href="components-buttons.html">
                    <i class="bi bi-circle"></i><span>Etudiants</span>
                </a>
            </li>
            <li>
                <a href="components-cards.html">
                    <i class="bi bi-circle"></i><span>Notes</span>
                </a>
            </li>
        </ul>
    </li>

</ul>
