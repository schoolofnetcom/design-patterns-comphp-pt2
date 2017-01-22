<?php

namespace SON\AbstractFactory;

class LivroNode implements AbstractEditoraB {
    public function getTitle(): string
    {
        return 'Node.js, Javascript no Back-end';
    }

    public function getAuthor(): string
    {
        return 'Erik Alves';
    }

    public function getPages(): string
    {
        return '200 paginas';
    }

}
