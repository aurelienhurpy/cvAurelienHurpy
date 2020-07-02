<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200630123025 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ukeducation (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, localisation VARCHAR(255) DEFAULT NULL, date VARCHAR(255) DEFAULT NULL, content VARCHAR(255) DEFAULT NULL, content2 VARCHAR(255) DEFAULT NULL, content3 VARCHAR(255) DEFAULT NULL, content4 VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ukexperience (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, localisation VARCHAR(255) DEFAULT NULL, date VARCHAR(255) DEFAULT NULL, content VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, content2 VARCHAR(255) DEFAULT NULL, content3 VARCHAR(255) DEFAULT NULL, content4 VARCHAR(255) DEFAULT NULL, content5 VARCHAR(255) DEFAULT NULL, content6 VARCHAR(255) DEFAULT NULL, content7 VARCHAR(255) DEFAULT NULL, content8 VARCHAR(255) DEFAULT NULL, content9 VARCHAR(255) DEFAULT NULL, content10 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ukintro (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, bio VARCHAR(255) DEFAULT NULL, age VARCHAR(255) DEFAULT NULL, height VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, position VARCHAR(255) DEFAULT NULL, myproject VARCHAR(255) DEFAULT NULL, myskills VARCHAR(255) DEFAULT NULL, mytraining VARCHAR(255) DEFAULT NULL, dateprojet VARCHAR(255) DEFAULT NULL, mytrainingdetail VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ukproject (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, paragraph1 VARCHAR(255) DEFAULT NULL, paragraph2 VARCHAR(255) DEFAULT NULL, paragraph3 VARCHAR(255) DEFAULT NULL, paragraph4 VARCHAR(255) DEFAULT NULL, paragraph5 VARCHAR(255) DEFAULT NULL, paragraph VARCHAR(255) DEFAULT NULL, paragraph6 VARCHAR(255) DEFAULT NULL, paragraph7 VARCHAR(255) DEFAULT NULL, paragraph8 VARCHAR(255) NOT NULL, yes VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE training CHANGE date date VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ukeducation');
        $this->addSql('DROP TABLE ukexperience');
        $this->addSql('DROP TABLE ukintro');
        $this->addSql('DROP TABLE ukproject');
        $this->addSql('ALTER TABLE training CHANGE date date VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
