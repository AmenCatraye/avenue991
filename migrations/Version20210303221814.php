<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303221814 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande_ocaz (id INT AUTO_INCREMENT NOT NULL, type_client VARCHAR(16) DEFAULT NULL, num_commande VARCHAR(8) DEFAULT NULL, typ_elem VARCHAR(32) DEFAULT NULL, chassis VARCHAR(16) DEFAULT NULL, marque VARCHAR(32) DEFAULT NULL, modele VARCHAR(32) DEFAULT NULL, annee VARCHAR(5) DEFAULT NULL, prixmax VARCHAR(8) DEFAULT NULL, kilometrage VARCHAR(8) DEFAULT NULL, boitevitesse VARCHAR(16) DEFAULT NULL, carburant VARCHAR(16) DEFAULT NULL, portes VARCHAR(2) DEFAULT NULL, etat VARCHAR(32) DEFAULT NULL, piecepour VARCHAR(32) DEFAULT NULL, info_comp VARCHAR(200) DEFAULT NULL, ladate VARCHAR(16) DEFAULT NULL, nompiece VARCHAR(128) DEFAULT NULL, nonprenom VARCHAR(32) DEFAULT NULL, adressemail VARCHAR(64) DEFAULT NULL, adresse VARCHAR(200) DEFAULT NULL, telephone VARCHAR(16) DEFAULT NULL, raisonsociale VARCHAR(32) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commande_ocaz');
    }
}
