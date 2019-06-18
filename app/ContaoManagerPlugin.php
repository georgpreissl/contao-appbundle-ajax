<?php 

use Contao\ManagerPlugin\Routing\RoutingPluginInterface; 
use Symfony\Component\Config\Loader\LoaderResolverInterface; 
use Symfony\Component\HttpKernel\KernelInterface; 

class ContaoManagerPlugin implements RoutingPluginInterface 
{ 
    /** 
     * {@inheritdoc} 
     */ 
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel) 
    { 
        return $resolver 
            ->resolve(__DIR__.'/../src/AppBundle/Resources/config/routing.yml') 
            ->load(__DIR__.'/../src/AppBundle/Resources/config/routing.yml') 
        ; 
    } 
}