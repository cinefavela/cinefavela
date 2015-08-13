<?php
namespace CineFavela\Usuario;

class Module extends \CineFavela\Core\Module\Module
{

    public function __construct()
    {
        parent::__construct("usuario", "0.1.0");
    }

    public function getTemplateConfig()
    {
        return array(
            "templateDir" => array(
                APPLICATION_PATH . "/modules/" . ucfirst($this->getName()) . "/template/"
            )
        );
    }

    public function getRouteConfig()
    {
        return array(
            "routes" => array(
                array(
                    "method" => "get",
                    "path" => "/usuario",
                    "controller" => "CineFavela\\Usuario\\Controllers\\UsuarioController"
                )
            )
        );
    }
}