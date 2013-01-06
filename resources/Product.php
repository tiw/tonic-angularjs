<?php
use Tonic\Response;
use Product\Model\Product as ProductModel;

/**
 * @uri /product
 * @uri /product/:productId
 */
class Product extends Tonic\Resource
{
    /**
     * @method get
     * @json
     */
    public function all()
    {
        $productOne = new ProductModel();

        $products = array(
            array(
                'id' => 1,
                'name' => 'iphone5',
                'price' => '1234',
            ),
            array(
                'id' => 2,
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
    public function get($productId = null)
    {

        if (is_null($productId)) {
            return $this->all();
        }
        $productMapper = new \Product\Mapper\Product();
        $product = $productMapper->findById((int) $productId);
        $product = array(
            'id' => 1,
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
