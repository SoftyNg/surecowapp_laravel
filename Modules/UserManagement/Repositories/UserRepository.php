<?php
// Modules/UserManagement/Repositories/UserRepository.php
namespace Modules\UserManagement\Repositories;

use Modules\UserManagement\Models\UserManagement;

class UserRepository
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function createUser(array $data)
    {
        return UserManagement::create($data);
    }

    public function findUserById($id)
    {
        return User::findOrFail($id);
    }

    public function updateUser($id, array $data)
    {
        $user = $this->findUserById($id);
        $user->update($data);
        return $user;
    }

    public function deleteUser($id)
    {
        $user = $this->findUserById($id);
        $user->delete();
        return true;
    }
}
