<div class="d-flex">
    <nav class="sidebar">
        <ul class="list-unstyled">
            <li>
                <?= $this->Html->link('
            <i class="fas fa-tachometer-alt"></i> Dashboard',
            [
                'controller' => 'welcome',
                'action' => 'index'
            ],
            
            [
                // array criado para informar que o codigo deve ignorar o html
                'escape' => false
            ]
           );    ?>
            <li>
                <a href="#submenu1" data-toggle="collapse">
                    <i class="fas fa-user"></i> Usuário

                </a>

                <ul id="submenu1" class="list-unstyled collapse">
                  
                <li><?= $this->html->link('
            <i class="fas fa-users"></i> Listar Usuários',
            [
                'controller' =>'users',
                 'action' =>'index'
            ],
            [
                'escape' => false
            ]
        );
                   ?>
            </li>
                    <li><a href="#"><i class="fas fa-key"></i> Nível de Acesso</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse"><i class="fas fa-list-ul"></i> Menu</a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li><a href="#"><i class="fas fa-file-alt"></i> Páginas</a></li>
                    <li><a href="#"><i class="fab fa-elementor"></i> Item de Menu</a></li>
                </ul>

            </li>

            <li><?= $this->html->link('
            <i class="fas fa-sign-out-alt"></i> Sair',
            [
                'controller' =>'users',
                 'action' =>'logout'
            ],
            [
                'escape' => false
            ]
        );
                   ?>
            </li>
        </ul>
    </nav>
</div>