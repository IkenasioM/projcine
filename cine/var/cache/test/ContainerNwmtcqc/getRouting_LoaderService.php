<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

$a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')))) && false ?: '_'};
$b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};
$c = ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'};

$d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

$e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();

$f = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($b);

$g = new \Symfony\Component\Config\Loader\LoaderResolver();
$g->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
$g->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
$g->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
$g->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($a));
$g->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
$g->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$g->addLoader($d);
$g->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $d));
$g->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $d));
$g->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($a, $e));
$g->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $a, $c, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($b, ${($_ = isset($this->services['fos_rest.request.param_fetcher.reader']) ? $this->services['fos_rest.request.param_fetcher.reader'] : $this->load(__DIR__.'/getFosRest_Request_ParamFetcher_ReaderService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_rest.inflector']) ? $this->services['fos_rest.inflector'] : $this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector()) && false ?: '_'}, false, array('json' => false, 'xml' => false, 'html' => true)), $b), NULL));
$g->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($a, $e, false, array('json' => false, 'xml' => false, 'html' => true), NULL));
$g->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($a, $e, false, array('json' => false, 'xml' => false, 'html' => true), NULL));
$g->addLoader($f);
$g->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $f));
$g->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $f));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($c, $g);
