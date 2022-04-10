<?php


class HillelAutoloader
{
    private $namespaces = [];

    public function addNamespace(string $hillel, string $rootDir)
    {
        if (!is_dir($rootDir)) {
            throw new Exception('Not dor');
        }
        $this->namespaces[$hillel] = $rootDir;
    }

    public function register()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($class)
    {
        $pathParts = explode('\\', $class);

        if (is_array($pathParts)) {
            $hillel = array_shift($pathParts);

            if (!empty($this->namespaces[$hillel])) {
                $filePath = $this->namespaces[$hillel] . '/' . implode('/', $pathParts) . '.php';
                require_once $filePath;
                return true;
            }
        }
        return false;
    }

}

$autoloader = new HillelAutoloader;
$autoloader->addNamespace('Hillel', 'src');
$autoloader->register();
