<?php
namespace View;

class View
{
    public static function carregar($template, $dados = null)
    {
        include __DIR__ . '/../../templates/topo.php';
        include __DIR__ . "/../../$template.php";
    }
}