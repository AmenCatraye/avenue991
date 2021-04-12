<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329172247 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trader (id INT AUTO_INCREMENT NOT NULL, raisonsociale VARCHAR(32) DEFAULT NULL, contact VARCHAR(32) NOT NULL, telephone VARCHAR(16) NOT NULL, adresse VARCHAR(200) NOT NULL, email VARCHAR(64) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE univ_insc (id INT AUTO_INCREMENT NOT NULL, idetudiant VARCHAR(32) NOT NULL, num_commande VARCHAR(16) NOT NULL, pays VARCHAR(16) NOT NULL, ville VARCHAR(32) NOT NULL, annee VARCHAR(16) NOT NULL, universite VARCHAR(64) NOT NULL, siteweb VARCHAR(64) DEFAULT NULL, statut VARCHAR(16) NOT NULL, budget INT NOT NULL, info_sup VARCHAR(255) DEFAULT NULL, id_etudiant VARCHAR(64) NOT NULL, numservice VARCHAR(16) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE commande_europe_ocaz');
        $this->addSql('DROP TABLE enterprises');
        $this->addSql('DROP TABLE particulier');
        $this->addSql('ALTER TABLE commande_ocaz CHANGE ladate ladate VARCHAR(16) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_europe_ocaz (id INT AUTO_INCREMENT NOT NULL, id_client VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, entreprises VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, commercants VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE enterprises (id INT AUTO_INCREMENT NOT NULL, raisonsociale VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adressemail VARCHAR(128) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, telephone INT DEFAULT NULL, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE particulier (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telephone INT NOT NULL, adressemail VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE trader');
        $this->addSql('DROP TABLE univ_insc');
        $this->addSql('ALTER TABLE commande_ocaz CHANGE ladate ladate VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
