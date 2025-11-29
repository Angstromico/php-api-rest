<?php

class ProductController {
    public function processRequest(string $method, ?string $id) {
        if($id) {
            $this->processProductRequest($method, $id);
            return;
        }
        
        $this->processCollectionRequest($method);
    }

    private function processCollectionRequest(string $method) {
        $products = ["id" => 12];

        switch($method) {
            case "GET":
                echo json_encode($products);
                break;
            case "POST":
                echo "POST";
                break;
            case "PATCH":
                echo "PATCH";
                break;
            case "DELETE":
                echo "DELETE";
                break;
            default:
                http_response_code(405);
                header("Allow: GET, POST, PATCH, DELETE");
        }
    }

    private function processProductRequest(string $method, ?string $id) {

    }
}
