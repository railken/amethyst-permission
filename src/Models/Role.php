<?php

namespace Railken\Amethyst\Models;

use Spatie\Permission\Models\Role as Model;
use Railken\Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

class Role extends Model implements EntityContract
{
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.permission.data.role');
        parent::__construct($attributes);
    }
}