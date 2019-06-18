<?php 

namespace AppBundle\Controller; 

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 
use Symfony\Component\HttpFoundation\JsonResponse; 

class DefaultController 
{ 
    /** 
     * @Route("/ajax") 
     * 
     * @return JsonResponse 
     */ 
    public function ajaxAction() 
    { 
        return new JsonResponse(['Hello World!']); 
    } 
}