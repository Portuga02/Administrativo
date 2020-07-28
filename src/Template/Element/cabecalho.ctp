<!-- cabecalho referente a pagina inicial do administrativo-->
<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle text-light mr-3">
        <span class="navbar-toggler-icon"></span>
    </a>
    <a class="navbar-brand" href="#">Administrativo</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown">
                    <?php if(!empty($perfilUser['imagem'])){?>
                    <?= $this->Html->image('../files/user/'.$perfilUser['id'].'/'.$perfilUser['imagem'],
                        ['class' => 'rounded-circle','width'=>'40px', 'height'=>  '40px']) ?>
                    &nbsp;

                    <?php  } else{ ?>
                    <?= $this->Html->image('../files/user/icone_usuario.jpg',
                        ['class' => 'rounded-circle','width'=>'40px', 'height'=>  '40px']) ?> &nbsp;
                    <?php }  ?>
                    <span class="d-none d-sm-inline"><?= ($perfilUser['name'])?></span>
                    <!--- Passando o parametro do banco por array para que seja impresso no sistema o nome do usuário logado-->
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <?=  $this->Html->link('<i class="fas fa-user"></i> Perfil',
                    [   'controller' => 'users', 
                        'action' => 'perfil'],
                    [   'class' => 'dropdown-item',
                        'escape' => false, ]
                );?>
                    <br>
                    <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair',
                    [   'controller' => 'users', 
                        'action' => 'logout'],
                    [   'class' => 'dropdown-item',
                        'escape' => false,
                       ] ); ?>
                    
                </div>
            </li>
        </ul>
    </div>
</nav>