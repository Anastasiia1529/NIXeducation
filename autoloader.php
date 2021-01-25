<?php
  class autoloader
  {
    public function __invoke($className)
    {
        $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
        if (file_exists($file)) {
            require $file;
        }
        else {
            echo "Class not found!";
        }
    }
  }

spl_autoload_register(new autoloader());
