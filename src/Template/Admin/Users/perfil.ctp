<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Usuário</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'editPerfil'], ['class="btn btn-outline-warning btn-sm"']) ?>
            <?= $this->Html->link(__('Editar Senha'), ['controller' => 'users', 'action' => 'editSenhaPerfil'], ['class="btn btn-outline-danger btn-sm"']) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'editSenhaPerfil'], ['class' => 'dropdown-item']) ?>

                <?= $this->Html->link(__('Editar Senha'), ['controller' => 'users', 'action' => 'editSenha'], ['class' => "dropdown-item"]) ?>
                <a class="dropdown-item" href="listar.html">Listar</a>
                <a class="dropdown-item" href="editar.html">Editar</a>
                <a class="dropdown-item" href="apagar.html" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>

<dl class="row">
    <dt class="cols-sm-3">
        Usuário
    </dt>
    <dt class="col-sm-3">
        <?php if (!empty($perfilUser['imagem'])) { ?>
            <?= $this->Html->image(
                '/files/user/' . $perfilUser['id'] . '/' . $perfilUser['imagem'],
                ['class' => 'rounded-circle', 'width' => '120px', 'height' =>  '120px']
            ) ?>
            &nbsp;
            <!-- if para que seja colocado uma imagem de valor padrão caso o usuário não tenha cadastrado uma nova-->
        <?php  } else { ?>
            <?= $this->Html->image(
                '/files/user/icone_usuario.jpg',
                ['class' => 'rounded-circle', 'width' => '120px', 'height' =>  '120px']
            ) ?> &nbsp;
        <?php }  ?>
        <?= $this->Html->link(__('Alterar Foto '), ['action' => 'alterarFotoPerfil'], ['class' => 'btn btn-outline-primary btn-sm']); ?>

    </dt>

    <dt class="col-sm-3">Id</dt>
    <dd class="col-sm-9"><?= $user['id'] ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= $user['name'] ?> </dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= $user['username'] ?></dd>

    <dt class="col-sm-3">E-mail</dt>
    <dd class="col-sm-9"><?= $user['email'] ?></dd>



</dl>