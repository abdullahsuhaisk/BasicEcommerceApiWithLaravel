<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{   //Automaticly run render method
    public function render() {
        return ['errors'=> 'Product Not Belongs to User'];
    }
}
