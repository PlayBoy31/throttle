<?php

namespace ThrottleMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20151028144951 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $frame = $schema->getTable('frame');
        $frame->addColumn('url', 'string', array('length' => 1024, 'notnull' => false));
    }

    public function down(Schema $schema)
    {
        $frame = $schema->getTable('frame');
        $frame->dropColumn('url');
    }
}
