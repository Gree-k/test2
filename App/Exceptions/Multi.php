<?php

namespace App\Exceptions;

use App\ICollection;
use App\TCollection;

class Multi
    extends \Exception implements ICollection
{
    use TCollection;



}