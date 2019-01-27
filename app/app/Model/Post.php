<?php 

namespace App\Model;

use Corcel\Model\Post as Corcel;

class Post extends Corcel
{
    protected $connection = 'wordpress';

    public function customMethod() {
        //
    }
}