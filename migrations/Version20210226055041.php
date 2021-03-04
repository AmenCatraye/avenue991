<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226055041 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE particuliers (id INT AUTO_INCREMENT NOT NULL, nometprenoms VARCHAR(32) NOT NULL, mailparticulier VARCHAR(64) DEFAULT NULL, telephoneparticulier INT NOT NULL, adresseparticulier VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE enterprises CHANGE adressemail adressemail VARCHAR(128) DEFAULT NULL, CHANGE telephone telephone INT DEFAULT NULL');
        $this->addSql('ALTER TABLE particulier ADD mailparticulier VARCHAR(32) NOT NULL, ADD adresseparticulier VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE particuliers');
        $this->addSql('ALTER TABLE enterprises CHANGE adressemail adressemail VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone INT NOT NULL');
        $this->addSql('ALTER TABLE particulier DROP mailparticulier, DROP adresseparticulier');
    }
}
