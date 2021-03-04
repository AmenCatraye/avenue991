<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226001132 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_europe_ocaz (id INT AUTO_INCREMENT NOT NULL, id_client VARCHAR(255) NOT NULL, entreprises VARCHAR(64) NOT NULL, commercants VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enterprises (id INT AUTO_INCREMENT NOT NULL, raisonsociale VARCHAR(64) NOT NULL, adressemail VARCHAR(128) DEFAULT NULL, telephone INT DEFAULT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE particulier (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(32) NOT NULL, telephone INT NOT NULL, adressemail VARCHAR(64) DEFAULT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trader (id INT AUTO_INCREMENT NOT NULL, nomprenom VARCHAR(32) NOT NULL, raisonsociale VARCHAR(32) NOT NULL, adressemail VARCHAR(64) DEFAULT NULL, telephone INT NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commande_europe_ocaz');
        $this->addSql('DROP TABLE enterprises');
        $this->addSql('DROP TABLE particulier');
        $this->addSql('DROP TABLE trader');
    }
}
