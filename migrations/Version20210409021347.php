<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210409021347 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscription_univ (id INT AUTO_INCREMENT NOT NULL, id_etudiant VARCHAR(16) DEFAULT NULL, pays VARCHAR(16) DEFAULT NULL, ville VARCHAR(32) DEFAULT NULL, niveau VARCHAR(16) DEFAULT NULL, universite VARCHAR(32) DEFAULT NULL, siteweb VARCHAR(128) DEFAULT NULL, statut VARCHAR(16) DEFAULT NULL, budget VARCHAR(11) DEFAULT NULL, info_sup VARCHAR(255) DEFAULT NULL, numservice VARCHAR(16) DEFAULT NULL, adresseuniversite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE univ_insc CHANGE num_commande num_ommande VARCHAR(16) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscription_univ');
        $this->addSql('ALTER TABLE univ_insc CHANGE num_ommande num_commande VARCHAR(16) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
