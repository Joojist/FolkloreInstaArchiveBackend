<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\SchemaTool;
use App\Entity\Post;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);

try {
    // configuring the database connection
    $connection = DriverManager::getConnection([
        'url' => 'pgsql://postgres:postgres@localhost:5432/Folklore',
    ], $config);

        // obtaining the entity manager
    $entityManager = new EntityManager($connection, $config);

    // Check if the connection is successful
    if ($connection->connect()) {
        echo "Connected to the database!" . PHP_EOL;
    }

    // Create an instance of SchemaTool
    $schemaTool = new SchemaTool($entityManager);

    // Get the entity metadata
    $metadata = $entityManager->getMetadataFactory()->getAllMetadata();

    // Update the database schema (create tables if they don't exist)
    $schemaTool->updateSchema($metadata);

    // Display a message in the terminal indicating successful table creation or update
    echo "Schema updated successfully!" . PHP_EOL;
} catch (\Exception $e) {
    // Display an error message in the terminal if table creation or update fails
    echo "Failed to update schema: " . $e->getMessage() . PHP_EOL;
    exit(1);
}

$post = new Post();
$post->setIgUrl(123456);
$post->setIgUserId(789);
$post->setLikes(10);

// ... Perform additional operations with the entity ...

// Flush the changes to the database
$entityManager->persist($post);
$entityManager->flush();