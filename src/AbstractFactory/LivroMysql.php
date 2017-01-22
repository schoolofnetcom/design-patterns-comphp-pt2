<?php

namespace SON\AbstractFactory;

class LivroMysql implements AbstractEditoraA {
    public function getTitle(): string
    {
        return 'MySql para quem nunca ouviu falar';
    }

    public function getAuthor(): string
    {
        return 'João de Tal';
    }
}
