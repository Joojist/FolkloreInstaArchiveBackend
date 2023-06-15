<?php
    require_once('vendor/autoload.php');

    use Facebook\WebDriver\Remote\DesiredCapabilities;
    use Facebook\WebDriver\Remote\RemoteWebDriver;
    use Facebook\WebDriver\WebDriverBy;
    
    $host = 'http://localhost:4444/wd/hub'; // Selenium server URL
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    
    $driver->get('http://example.com');
    
    // Wait for all scripts to execute
    $driver->wait()->until(
        function ($driver) {
            return $driver->executeScript('return document.readyState') === 'complete';
        }
    );
    
    // Get the HTML content after scripts have executed
    $html = $driver->getPageSource();
    echo $html;
    
    $driver->quit();
?>