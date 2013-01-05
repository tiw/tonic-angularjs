<?php

/**
 * @uri /order/:orderId/item/:itemId
 * @uri /order/:orderId/item
 */
class OrderItem extends Tonic\Resource
{


    protected function all($orderId)
    {
        return json_encode(array(
            'orderId' => $orderId
        ));
    }

    /**
     * @method get
     * @provides application/json
     */
    public function get($orderId, $itemId = null)
    {
        if (is_null($itemId)) {
            return $this->all($orderId);
        }
        return json_encode(array(
            'orderId' => $orderId,
            'itemId' => $itemId
        ));
    }

}
