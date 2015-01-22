<?php

namespace View;

class View
{
    public static function carregar($template, $dados = null)
    {
        include __DIR__ . "/../../templates/admin";
        include __DIR__ . "/../../templates/front";
        include __DIR__ . "/../../templates/_cabecalho.tpl.php";
        include __DIR__ . "/../../templates/_rodape.tpl.php";
        include __DIR__ . "/../../templates/$template.tpl.php";
    }
}