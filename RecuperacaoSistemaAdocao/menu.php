<nav class="navbar md:navbar-expand bg-2">
    <div class="container-fluid">
        <span class="navbar-brand" href="#">
            <img src="imgs/fox_face.png" alt="logo" width="38" height="32" class="align-bottom">
            ONG Raposa
        </span>

        <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer">
            <div class="drawer-header">
                <h5 class="drawer-title" id="navbarTopDrawerLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="drawer"></button>
            </div>

            <div class="drawer-body">
                <ul class="navbar-nav nav-underline gap-5 ms-4">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><i class="bi bi-house"></i>Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="cadastro.php" class="nav-link"><i class="bi bi-person"></i>Cadastrar Animal</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="bi bi-clipboard-heart"></i>Gerenciar</a>
                    </li>
                    <li class="nav-item">
                        <a href="adocao.php" class="btn-solid theme-primary"><strong>Adotar!</strong></a>
                    </li>
                </ul>
            </div>
        </dialog>

        <button class="btn-solid theme-secondary" type="button" data-bs-toggle="menu">
            <i class="bi bi-circle-half"></i>Tema
        </button>
        <div class="menu">
            <button class="menu-item" onclick="document.documentElement.setAttribute('data-bs-theme', 'light');"><i class="bi bi-brightness-high"></i>Claro</button>
            <button class="menu-item" onclick="document.documentElement.setAttribute('data-bs-theme', 'dark');"><i class="bi bi-cloud-moon-fill"></i>Escuro</button>
        </div>

        <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer">
            <span class="navbar-toggler-icon" aria-hidden="true"></span>
        </button>
    </div>
</nav>