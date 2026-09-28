<?php
    class Produto {
        private $id;
        private $nome;
        private $categoria;
        private $quantidade;

        public function __construct($sqlData) {
            $id = $sqlData["id"];
            $nome = $sqlData["nome"];
            $categoria = $sqlData["categoria"];
            $quantidade = $sqlData["quantidade"];
        }

        public function obterID() {
            return $id;
        }
        public function obterNome() {
            return $nome;
        }
        public function obterCategoria() {
            return $categoria;
        }
        public function obterQuantidade() {
            return $quantidade;
        }

        public function obterEstoque() {
            if($quantidade > 10) {
                return "Disponível";
            } else if($quantidade > 0) {
                return "Estoque Baixo";
            } else {
                return "Esgotado";
            }
        }
    }
?>