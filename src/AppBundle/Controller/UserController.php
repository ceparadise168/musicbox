<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MusicBox\Student;
use function PHPSTORM_META\type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class UserController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function getUserAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();

        $now = new \ DateTime();

        $student = new Student();
        $student->setName('test');
        $student->setCreatedAt($now);
        $student->setIsPiano(false);

        // tells Doctrine you want to (eventually) save the $student (no queries yet)
        $em->persist($student);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        return new JsonResponse($student->toArray());
    }


    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/info", name="info")
     */
    public function findUserAction(Request $request)
    {
        $students = $this->getDoctrine()
            ->getRepository(Student::class)
            ->findAllStudentById();


        return new JsonResponse($students);
    }
}
