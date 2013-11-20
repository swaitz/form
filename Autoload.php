<?php

    class Autoload {
        public static function registerAutoloader() {
            return spl_autoload_register(array('Autoload', 'load'));
        }
        
        public static function load($className) {
            $className = ltrim($className, '\\');
            
            $fileName  = '';
            $namespace = '';
            if ($lastNsPos = strrpos($className, '\\')) {
                $namespace = substr($className, 0, $lastNsPos);
                $className = substr($className, $lastNsPos + 1);
                $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
            }
            $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
            
            if(file_exists($fileName) === false || is_readable($fileName) === false) {
                return false;
            }

            require $fileName;
        }
    }