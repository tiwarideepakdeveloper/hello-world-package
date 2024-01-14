<?php
 
namespace HelloWorldPackage;
 
class HelloWorld
{
    public static function sayHello()
    {
        $rootDir = getcwd();

        // Example: Creating a file in the root directory
        $filePath = $rootDir . '/example-file.txt';
        $fileContent = 'Hello, this file was created by your Composer package!';
        
        file_put_contents($filePath, $fileContent);

        echo "File created at: $filePath\n";
    }
}