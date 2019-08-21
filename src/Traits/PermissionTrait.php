<?php
namespace Amethyst\Traits;

trait PermissionTrait
{
    /**
     * Has permission.
     *
     * @param string $permission
     * @param array  $arguments
     *
     * @return bool
     */
    public function can($permission, $arguments = [])
    {
        return app('amethyst.permission')->can($this, $permission, $arguments);
    }
}