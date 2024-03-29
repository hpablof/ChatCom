<?php
$url = explode('/', $_GET['url']);
$class = $url[0];
$method = $url[1];
?>
<aside class="aside aside-fixed">
    <div class="aside-header">
        <a href="index.html" class="aside-logo">Chat<span>COM</span></a>
        <a href="" class="aside-menu-link">
            <i data-feather="menu"></i>
            <i data-feather="x"></i>
        </a>
    </div>
    <div class="aside-body">
        <div class="aside-loggedin">
            <div class="d-flex align-items-center justify-content-start">
                <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
                <div class="aside-alert-link">
                    <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
                    <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
                    <a href="<?=RUTA_URL?>Usuario/Salir" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
                </div>
            </div>
            <div class="aside-loggedin-user">
                <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse" aria-expanded="<?=($class=='Usuario' && $method=='Perfil')?'true':'false'?>">
                    <h6 class="tx-semibold mg-b-0">Cosme Fulanito</h6>
                    <i data-feather="chevron-down"></i>
                </a>
                <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
            </div>
            <div class="collapse <?=($class=='Usuario' && $method=='Perfil')?'show':''?>" id="loggedinMenu">
                <ul class="nav nav-aside mg-b-0">
                    <li class="nav-item <?=($class=='Usuario' && $method=='Perfil')?'active':''?>"><a href="<?=RUTA_URL?>Usuario/Perfil" class="nav-link"><i data-feather="user"></i> <span>Mi Perfil</span></a></li>
                    <li class="nav-item"><a href="<?= RUTA_URL ?>Usuario/Salir" class="nav-link"><i data-feather="log-out"></i> <span>Salir</span></a></li>
                </ul>
            </div>
        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
            <li class="nav-label">Dashboard</li>
            <?php if($_SESSION['Rol']=='1'):?>
            <li class="nav-item with-sub <?=($class=='Usuario' &&($method=='Registro' || $method=='Registros'))?'active show':''?> ">
                <a href="" class="nav-link"><i data-feather="users"></i> <span>Usuarios</span></a>
                <ul>
                    <li class="<?=($class=='Usuario' && $method=='Registro')?'active':''?>"><a href="<?=RUTA_URL?>Usuario/Registro">Registrar Usuario</a></li>
                    <li class="<?=($class=='Usuario' && $method=='Registros')?'active':''?>"><a href="<?= RUTA_URL ?>Usuario/Registros">Registros</a></li>
                </ul>
            </li>
            <?php endif;?>
            <?php if ($_SESSION['Rol']=='1'):?>
            <li class="nav-item with-sub <?=($class=='Area')?'active show':''?>">
                <a href="" class="nav-link"><i data-feather="briefcase"></i> <span>Areas de Trabajo</span></a>
                <ul>
                    <li class="<?=($class=='Area' && $method=='Registro')?'active':''?>" ><a href="<?=RUTA_URL?>Area/Registro">Registrar Area</a></li>
                    <li class="<?=($class=='Area' && $method=='Registros')?'active':''?>"><a href="<?=RUTA_URL?>Area/Registros">Mis Areas</a></li>
                </ul>
            </li>
            <?php endif;?>
            <li class="nav-label mg-t-25">Aplicaciones</li>
            <li class="nav-item <?=($class=='Chat' && $method=='MisChats')?'active':''?>"><a href="<?=RUTA_URL?>Chat/MisChats" class="nav-link"><i data-feather="message-square"></i> <span>Chat</span></a></li>
            <?php  if ($_SESSION['Rol']=='1'):?>
                <li class="nav-item <?=($class=='Comunicado' && $method=='MostrarComunicados')?'active':''?>"><a href="<?=RUTA_URL?>Comunicado/MostrarComunicados" class="nav-link"><i data-feather="alert-octagon"></i> <span>Comunicados</span></a></li>
            <?php endif;?>
        </ul>
    </div>
</aside>