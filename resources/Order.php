<?php
use Tonic\Response;

/**
 * @uri /order
 */
class Order extends Tonic\Resource
{

    /**
     * @method post
     * @accepts application/json
     */
    public function post()
    {
        $newProduct = $this->request->data;
        return new Response(Response::CREATED);
    }


    /**
     * @method get
     * @provides application/json
     */
    public function all()
    {
        return json_encode(array('name' => 'iphone4'));
    }
}
