<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_registration')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RegistrationController.php',
        ]);
    }

    // public function index(UserPasswordHasherInterface $passwordHasher): Response
    // {
    //     // TODO Copied from Symfony docs - learn and implement security.
    //
    //     // ... e.g. get the user data from a registration form
    //     $user = new User(...);
    //     $plaintextPassword = ...;
    //
    //     // hash the password (based on the security.yaml config for the $user class)
    //     $hashedPassword = $passwordHasher->hashPassword(
    //         $user,
    //         $plaintextPassword
    //     );
    //     $user->setPassword($hashedPassword);
    //
    //     // ...
    // }
}
