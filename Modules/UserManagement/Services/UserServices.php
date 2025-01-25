<?php
// Modules/UserManagement/Services/UserService.php
namespace Modules\UserManagement\Services;

use Modules\UserManagement\Repositories\UserRepository;

class UserServices
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function listUsers()
    {
        return $this->userRepository->getAllUsers();
    }

    public function createUser(array $data)
    {
        $data['password'] = bcrypt($data['password']); // Hash password
        return $this->userRepository->createUser($data);
    }

    public function updateUser($id, array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        return $this->userRepository->updateUser($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->deleteUser($id);
    }
}
