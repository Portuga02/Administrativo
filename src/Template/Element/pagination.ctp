<?php
$paginator = $this->Paginator->setTemplates([
    'number' => '<li class="page-item" ><a href="{{url}}" class="page-link" >{{text}}</a></li>',
    'current' => '<li class="page-item active" ><a href="{{url}}" class="page-link" >{{text}}</a></li>',
    'first' => '<li class="page-item"><a href="{{url}}" class="page-link" >&laquo Primeira</a></li>',
    'last' => '<li class="page-item"><a href="{{url}}" class="page-link" > Ultima &raquo </a></li>',
    'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link" >&lt</a></li>',
    'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link" >&gt</a></li>',


]); ?>
<nav aria-label="paginacao">
    <ul class="pagination pagination-sm justify-content-center">
        <?php
        /*if necessario para caso se tenha necessidade imprimir na pagina caso tenha o valor maior que 40 usuários cadastrados*/
        echo $paginator->first();
        if ($paginator->hasPrev) {
            echo $paginator->first();
        }
        echo $paginator->numbers();
        if ($paginator->hasNext) {
            echo $paginator->next();
        }
        echo $paginator->last();
        ?>
    </ul>
</nav>