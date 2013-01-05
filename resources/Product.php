<?php
use Tonic\Response;

/**
 * @uri /product
 * @uri /product/:productId/item/:itemId
 */
class Product extends Tonic\Resource
{
    /**
     * @method get
     * @json
     */
    public function all()
    {

        $products = array(
            array(
                'name' => 'iphone5',
                'price' => '1234',
            ),
            array(
                'name' => 'galaxy 3',
                'price' => '3456',
            )
        );

        return new Response(Response::OK, $products);
    }


    /**
     * @method get
     * @json
     */
    public function get($productId = null, $itemId)
    {

        if (is_null($productId)) {
            return $this->all();
        }
        $product = array(
            'name' => 'iphone5',
            'price' => '1234',
        );
        return new Response(Response::OK, $product);
    }

    public function json() {
        $this->before(function ($request) {
            if ($request->contentType == "application/json") {
                $request->data = json_decode($request->data);
            }
        });
        $this->after(function ($response) {
            $response->contentType = "application/json";
            $response->body = json_encode($response->body);
        });
    }
}
