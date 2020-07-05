<h2>Bem vindo <?php echo $user['name']; ?> </h2>
<h4> Seu email cadastrado é <?php echo $user['email'] ?></h4>
<li><?= $this->Html->link(__('Sair'), ['controller'=>'users','action' => 'logout']) ?></li>