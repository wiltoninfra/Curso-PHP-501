<?php

namespace View;

class View
{
    public static function carregar($template, $tipo, $dados = null)
    {
        //echo "Template: $template";
        //echo '<br>Tipo: ' . $tipo;
        //exit();
        
        include __DIR__ . "/../../templates/$tipo/_cabecalho.tpl.php";
        include __DIR__ . "/../../templates/$template.tpl.php";
        include __DIR__ . "/../../templates/$tipo/_rodape.tpl.php";
    }
}

