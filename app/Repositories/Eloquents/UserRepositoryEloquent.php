<?php
namespace App\Repositories\Eloquents;

use App\Repositories\UserRepository;
use App\Repositories\Contracts\BaseRepositoryEloquent;
use App\Models\User;

class UserRepositoryEloquent extends BaseRepositoryEloquent implements UserRepository
{
    public function model()
    {
        return User::class;
    }
}
