<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $this->createUser('admin@hotmail.fr', 'admin', getenv('ROLE_ADMIN'), true, 'admin_token');

        for ($i = 1; $i <= 10; $i++) { // Use $i from 1 to avoid duplicate email
            $this->createUser("user$i@example.com", "user$i", getenv('ROLE_USER'), true); // Use a unique email pattern
        }

        $manager->flush();
    }

    private function createUser(string $email, string $name, string $role, bool $verified, string $apiToken = null): User
    {
        $user = new User();
        $user
            ->setRoles([$role])
            ->setEmail($email)
            ->setName($name)
            ->setIsVerified($verified)
            ->setPassword($this->hasher->hashPassword($user, 'password')) // Use a more secure password
            ->setApiToken($apiToken);

        return $user;
    }
}