<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #000000; border-radius:0; border-bottom: 3px solid #fdeb00;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img alt="Logo Emperium" src="./Logos/Texto Escuro copia.png" width="90" height="30" alt="" style="margin-right:-10px; margin-top:-4px;">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="lancamento.php">Lançamentos</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="categorias.php?cat=Peita">Peitas</a></li>
                    <li><a href="categorias.php?cat=Calça">Calças</a></li>
                    <li><a href="categorias.php?cat=Blusa">Blusas</a></li>
                    <li><a href="categorias.php?cat=Acessorios">Acessórios</a></li>
                </ul>
                </li><li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="marcas.php?cat=Chronic">Chronic</a></li>
                    <li><a href="marcas.php?cat=Nike">Nike</a></li>
                    <li><a href="marcas.php?cat=Wanted">Wanted</a></li>
                    <li><a href="marcas.php?cat=HIGH">HIGH</a></li>
                    <li><a href="marcas.php?cat=Trasher">Trasher</a></li>
                    <li><a href="marcas.php?cat=Diamond">Diamond</a></li>
                    <li><a href="marcas.php?cat=Fire Appel">Fire Appel</a></li>
                    <li><a href="marcas.php?cat=Overcome">Overcome</a></li>
                    <li><a href="marcas.php?cat=Santa Cruz">Santa Cruz</a></li>
                </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="carrinho.php">Compras <span class="glyphicon glyphicon-shopping-cart"></a></li>
                <?php if(empty($_SESSION['ID'])){ ?>
                    <li><a href="formlogin.php">Login <span class="glyphicon glyphicon-log-in"></a></li>
                <?php }
                else{
                    if($_SESSION['Status'] == 0){
                        $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where id_usuario = '$_SESSION[ID]'");
                        $exibe_usuario = $consulta_usuario -> fetch(PDO::FETCH_ASSOC); ?>
                        <li><a href="areauser.php"><?php echo $exibe_usuario['nm_usuario'];?> <span class="glyphicon glyphicon-user"></a></li>
                        <li><a href="sair.php">Log-out <span class="glyphicon glyphicon-log-out"></a></li>
                        <?php } 
                        else{ ?>
                            <li><a href="adm.php"><button class="btn-xs btn-danger" style="margin-bottom:-10px; margin-top:-14px;">Administrador</button></a></li>
                            <li><a href="sair.php">Log-out <span class="glyphicon glyphicon-log-out"></a></li>
                        <?php } ?>
                <?php } ?>
            </ul>
            <form class="navbar-form navbar-right" role="search" name="form-pesquisa" method="GET" action="busca.php">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Pesquise produtos" name="txtPesquisar">
                </div>
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>