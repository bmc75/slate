<?php
/**
 * Slate autoloader
 *
 * The Slate autoloader detects when a class needs to be instantiated. It then loads the appropriate
 * file and instantiates the class.
 *
 * @since 1.0
 *
 * @package WordPress
 * @subpackage Slate
 */

class Slate_Autoloader {

    /**
     * Loads the file and class
     *
     * The loader class first checks if a file exists and then includes it. After, it will
     * check if the requested class exists and return true if it does.
     *
     * @since 1.0
     *
     * @param string $class_name The name of the class to load. Example: "Slate_ACF" looks for the "slate-acf.php" file and loads the "Slate_ACF" class.
     * @return bool
     */

    static public function loader($class_name) {

        $filename = slate_classes . '/' . str_replace('_', '-', $class_name) . '.php';
        $filename_alt = slate_custom . '/' . str_replace('_', '-', $class_name) . '.php';

        if(file_exists($filename)) {

            include_once $filename;

            if(class_exists($class_name)) {
                return true;
            }

        }

        if(file_exists($filename_alt)) {

            include_once $filename_alt;

            if(class_exists($class_name)) {
                return true;
            }

        }

        return false;

    }

}

spl_autoload_register('Slate_Autoloader::loader');