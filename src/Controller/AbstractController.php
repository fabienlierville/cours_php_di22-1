<?php
namespace src\Controller;

class AbstractController
{

    public function getTwig(){
        $loader = new \Twig\Loader\FilesystemLoader($_SERVER["DOCUMENT_ROOT"]."/../src/View");
        $twig = new \Twig\Environment($loader, [
            "cache" => $_SERVER["DOCUMENT_ROOT"]."/../var/cache",
            "debug" => true
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $fileExist = new \Twig\TwigFunction('file_exist', function($fullfilename){
            return file_exists($fullfilename);
        });
        $twig->addFunction($fileExist);
        return $twig;
    }
}