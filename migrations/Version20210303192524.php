<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303192524 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE particuliers (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_europe_ocaz ADD commercants VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE enterprises CHANGE raisonsociale raisonsociale VARCHAR(64) NOT NULL, CHANGE adressemail adressemail VARCHAR(128) DEFAULT NULL, CHANGE telephone telephone INT DEFAULT NULL');
        $this->addSql('ALTER TABLE europe_ocaz_orders DROP id_clients');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE particuliers');
        $this->addSql('ALTER TABLE commande_europe_ocaz DROP commercants');
        $this->addSql('ALTER TABLE enterprises CHANGE raisonsociale raisonsociale VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adressemail adressemail VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone INT NOT NULL');
        $this->addSql('ALTER TABLE europe_ocaz_orders ADD id_clients INT NOT NULL');
    }
}
