<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Usuário</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Listar'), ['controller' => 'users', 'action' => 'index'], ['class="btn btn-outline-info btn-sm"']) ?>
            <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'editPerfil'], ['class="btn btn-outline-warning btn-sm"']) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Listar'), ['controller' => 'users', 'action' => 'index'], ['class' => "dropdown-item"]) ?>
                <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'editPerfil'], ['class' => 'dropdown-item']) ?>

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
    <dt class="col-sm-3">Id</dt>
    <dd class="col-sm-9"><?= $user['id'] ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= $user['name'] ?>    </dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= $user['username'] ?></dd>

    <dt class="col-sm-3">E-mail</dt>
    <dd class="col-sm-9"><?= $user['email'] ?></dd>



</dl>
