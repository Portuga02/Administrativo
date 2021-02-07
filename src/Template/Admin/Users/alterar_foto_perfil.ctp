<?php //PAGINA CRIADA PARA UPLOAD DE FOTO DE USUÁRIOS CADASTRADOS NO SISTEMA 
?>
<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Alterar Imagem</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'btn btn-outline-primary btn-sm']); ?>
        </span>
    </div>
    <div class="dropdown d-block d-md-none">
        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ações
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => "dropdown-item"]) ?>
            <a class="dropdown-item" href="listar.html">Listar</a>
            <a class="dropdown-item" href="editar.html">Editar</a>
            <a class="dropdown-item" href="apagar.html" data-toggle="modal" data-target="#apagarRegistro">Apagar</a>
        </div>
    </div>
</div>
<!-- Campo para fazer upload das fotos -->
<div>
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label><span class="text-danger">*</span> Nova Foto</label>
            <?= $this->Form->File('imagem', ['class' => 'form-control-file',  'label' => false]); ?>
        </div>

    </div>
    <p>
        <span class="text-danger">* </span>Campo obrigatório
    </p>

    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>

    <?= $this->Form->end() ?>
</div>