<?php
namespace CineFavela\Core\Module;

abstract class Module implements ModuleInterface
{

    protected $name;

    protected $version;

    protected $container;

    public function __construct($name, $version)
    {
        $this->name = $name;
        $this->version = $version;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getContainer()
    {
        if (is_null($this->container)) {
            $this->container = \CineFavela\Core\Core::container();
        }
        
        return $this->container;
    }

    public function setUp()
    {
        $container = $this->getContainer();
        $mapper = $container->mapper;
        
        $module = $mapper->module(array(
            'name' => $this->getName()
        ))
            ->fetch();
        
        $migrationDir = APPLICATION_PATH . '/modules/' . ucfirst($this->getName()) . '/migration/';
        
        if (! $module) {
            $migrationFile = $migrationDir . 'mysql-install-' . $this->getVersion() . '.php';
            
            if (file_exists($migrationFile)) {
                $container->conn->query(require $migrationFile);
            }
            
            $container->conn->query("INSERT INTO module VALUES (\"" . $this->getName() . "\",\"" . $this->getVersion() . "\")");
        } else {
            if ($module->version < $this->getVersion()) {
                $migrationFile = $migrationDir . 'mysql-update-' . $this->getVersion() . '.php';
                
                if (file_exists($migrationFile)) {
                    $container->conn->query(require $migrationFile);
                } 
                
                $container->conn->query("UPDATE module SET version=\"" . $this->getVersion() . "\" WHERE name=\"" . $this->getName() . "\"");
            }
        }
    }

    abstract public function init();
}

?>