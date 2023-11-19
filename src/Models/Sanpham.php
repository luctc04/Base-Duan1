<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Sanpham extends Model {
    protected $table = 'sanphams';
    protected $columns = [
        'name',
        'price',
        'img',
        'mota',
        'view',
        'iddm',
    ];
}