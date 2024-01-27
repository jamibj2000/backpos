<?php

namespace App\Controllers\Products;
use App\Controllers\CorsController;
use CodeIgniter\Database\RawSql;

class ProductManagerController extends CorsController
{
    public function createItem()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('products');
        $this->cors();
        /**
         *
         * Query builder
         */
        $data = [
            'id'          => new RawSql('DEFAULT'),
            'title'       => 'My title',
            'name'        => 'My Name',
            'date'        => '2022-01-01',
            'last_update' => new RawSql('CURRENT_TIMESTAMP()'),
        ];
        
        $builder->insert($data);
        return "Created";
    }

}
