<?php

namespace Amethyst\Permissions;

use Amethyst\Managers\PermissionManager;
use Amethyst\Models\Permission;
use Illuminate\Support\Facades\Cache;
use nicoSWD\Rules\Rule;
use Railken\Lem\Contracts\AgentContract;
use Railken\Template\Generators;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Database\Eloquent\Model;

interface PermissionStoreContract
{
    /**
     * Set item
     *
     * @param Model $agent
     * @param string $permission
     * @param bool $value
     */
    public function set(Model $agent, string $permission, bool $value);

    /**
     * Retrieve item
     *
     * @param Model $agent
     * @param string $permission
     *
     * @return bool
     */
    public function get(Model $agent, string $permission): ?bool;

    /**
     * Create a key given agent and permission
     *
     * @param Model $agent
     * @param string $Permission
     *
     * @return string
     */
    public function key(Model $agent, string $permission): string;

    /**
     * Reset items
     */
    public function reset();
}
