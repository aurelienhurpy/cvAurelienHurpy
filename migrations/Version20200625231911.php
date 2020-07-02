<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200625231911 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE intro ADD my_project_detail VARCHAR(255) DEFAULT NULL, ADD my_skills_detail VARCHAR(255) DEFAULT NULL, ADD my_training_detail VARCHAR(255) DEFAULT NULL, ADD my_project_link VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE project CHANGE content content VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE intro DROP my_project_detail, DROP my_skills_detail, DROP my_training_detail, DROP my_project_link');
        $this->addSql('ALTER TABLE project CHANGE content content VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
