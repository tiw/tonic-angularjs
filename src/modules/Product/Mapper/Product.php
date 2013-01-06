<?php
namespace Product\Mapper;

class Product
{
    public function findById($id)
    {
        $this->getDb()->product->find(array('id' => $id));
    }

    public function getDb()
    {
        try {
            $m = new \MongoClient();
            return $m->crm;
        } catch (\Exception $e) {
            throw new Exception('can not ini mongodb client');
        }
    }
}
