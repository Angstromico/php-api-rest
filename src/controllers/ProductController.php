<?php

class ProductController {
    public function processRequest(string $method, ?string $id) {
        var_dump($method, $id);
    }
}
