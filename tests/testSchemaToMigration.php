<?php
/**
 * Created by PhpStorm.
 * User: elminsondeoleobaez
 * Date: 10/3/18
 * Time: 1:52 PM
 */
namespace Elminson\SchemaToMigration;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class testSchemaToMigration extends TestCase
{

    /**
     *
     */
    function testFirstTestCase()
    {
        $newproject = new SchemaToMigration();
        $this->assertEquals("index", $newproject->index());
    }

}
