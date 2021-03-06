<?php
namespace App\Domain\Users\UserTypes\BaseUser\Contracts\Entities;

use App\Infrastructure\Support\Contracts\Entities\CRUDInterface;

interface UserTypeEntityInterface extends CRUDInterface
{
    /**
     * @param $id
     * @return array
     */
    public function getData($id) : array;
}
