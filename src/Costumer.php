<?php
    namespace Solosz\PhpComposerLibrary;

    class Costumer{

        public public function __construct() {
        }

        public function sayHello(string $name): string{
            return "Hello $name, My name is $this->name";
        }
    }
?>