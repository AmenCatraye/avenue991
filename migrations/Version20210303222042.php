<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303222042 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_ocaz (id INT AUTO_INCREMENT NOT NULL, type_client VARCHAR(16) DEFAULT NULL, num_commande VARCHAR(8) DEFAULT NULL, typ_elem VARCHAR(32) DEFAULT NULL, chassis VARCHAR(16) DEFAULT NULL, marque VARCHAR(32) DEFAULT NULL, modele VARCHAR(32) DEFAULT NULL, annee VARCHAR(5) DEFAULT NULL, prixmax VARCHAR(8) DEFAULT NULL, kilometrage VARCHAR(8) DEFAULT NULL, boitevitesse VARCHAR(16) DEFAULT NULL, carburant VARCHAR(16) DEFAULT NULL, portes VARCHAR(2) DEFAULT NULL, etat VARCHAR(32) DEFAULT NULL, piecepour VARCHAR(32) DEFAULT NULL, info_comp VARCHAR(200) DEFAULT NULL, ladate VARCHAR(16) DEFAULT NULL, nompiece VARCHAR(128) DEFAULT NULL, nonprenom VARCHAR(32) DEFAULT NULL, adressemail VARCHAR(64) DEFAULT NULL, adresse VARCHAR(200) DEFAULT NULL, telephone VARCHAR(16) DEFAULT NULL, raisonsociale VARCHAR(32) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE commande_europe_ocaz');
        $this->addSql('DROP TABLE enterprises');
        $this->addSql('DROP TABLE europe_ocaz_orders');
        $this->addSql('DROP TABLE particulier');
        $this->addSql('DROP TABLE trader');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_europe_ocaz (id INT AUTO_INCREMENT NOT NULL, id_client VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, entreprises VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, commercants VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE enterprises (id INT AUTO_INCREMENT NOT NULL, raisonsociale VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adressemail VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telephone INT NOT NULL, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE europe_ocaz_orders (id INT AUTO_INCREMENT NOT NULL, id_clients INT NOT NULL, numero_cmd VARCHAR(16) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, lacommande VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE particulier (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telephone INT NOT NULL, adressemail VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, mailparticulier VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adresseparticulier VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE trader (id INT AUTO_INCREMENT NOT NULL, nomprenom VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, raisonsociale VARCHAR(32) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adressemail VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, telephone INT NOT NULL, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE commande_ocaz');
    }
}
