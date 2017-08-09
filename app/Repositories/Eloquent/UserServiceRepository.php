<?php
/**
 * Created by PhpStorm.
 * User: liujiaqi
 * Date: 2017/8/8
 * Time: 下午2:34
 */

namespace app\Repositories\Eloquent;

use app\Repositories\Contracts\UserInterface;
use App\User;

class UserServiceRepository implements UserInterface
{
    public function allUsers()
    {
        return User::all()->toArray();
    }
}