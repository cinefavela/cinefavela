<?php
namespace CineFavela\Seguranca;

class Module extends \CineFavela\Core\Module\Module
{

    public function __construct()
    {
        parent::__construct("seguranca", "0.1.0");
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
                    "path" => "/login",
                    "controller" => "CineFavela\\Seguranca\\Controllers\\LoginController"
                )
            )
        );
    }
}