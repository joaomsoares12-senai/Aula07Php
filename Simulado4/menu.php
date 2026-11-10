<nav class="navbar sm:navbar-expand bg-2">
    <div class="container-fluid">
        <span class="navbar-brand" style="font-family: Verdana, Geneva, Tahoma, sans-serif;" href="#">
            <strong>FitControlDB</strong>
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
                        <a href="modalidades.php" class="nav-link"><i class="bi bi-clipboard2-heart"></i>Modalidades</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="bi bi-person"></i>Alunos</a>
                    </li>
                </ul>
            </div>
        </dialog>

        <div class="d-flex gap-2 ms-auto">
            <button class="btn-solid theme-danger ms-auto" type="button" data-bs-toggle="dialog" data-bs-target="#dialogSair">
                <i class="bi bi-box-arrow-right"></i>Sair
            </button>

            <button class="btn-solid theme-secondary ms-auto" type="button" data-bs-toggle="menu" data-bs-target="#menuTema">
                <i class="bi bi-circle-half"></i>Tema
            </button>
        </div>

        <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer">
            <span class="navbar-toggler-icon"></span>
        </button>

        <dialog class="dialog" id="dialogSair">
            <div class="dialog-header">
                <h1 class="dialog-title">Alerta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="dialog"></button>
            </div>
            <div class="dialog-body">
                <p>Deseja sair? Você precisará logar novamente para acessar o site.</p>
            </div>
            <div class="dialog-footer">
                <button type="button" class="btn-solid theme-secondary" data-bs-dismiss="dialog">Fechar</button>
                <a href="conexao/logout.php" type="button" class="btn-solid theme-danger">Sair</a>
            </div>
        </dialog>

        <form class="menu" method="POST" id="menuTema">
            <button class="menu-item" type="submit" name="definirTemaClaro"><i class="bi bi-brightness-high"></i>Claro</button>
            <button class="menu-item" type="submit" name="definirTemaEscuro"><i class="bi bi-cloud-moon-fill"></i>Escuro</button>

            <?php
                if(!isset($_SESSION["tema"])) {
                    $_SESSION["tema"] = "auto";
                }

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(isset($_POST["definirTemaEscuro"])) {
                        $_SESSION["tema"] = "escuro";
                    } else if(isset($_POST["definirTemaClaro"])) {
                        $_SESSION["tema"] = "claro";
                    }
                }

                //Aplica a alteração do tema novamente, pois a página carrega antes do menu
                if($_SESSION["tema"] == "claro") {
                    echo "<script> document.documentElement.setAttribute('data-bs-theme', 'light'); </script>";
                } else if($_SESSION["tema"] == "escuro") {
                    echo "<script> document.documentElement.setAttribute('data-bs-theme', 'dark'); </script>";
                }
            ?>
        </form>
    </div>
</nav>