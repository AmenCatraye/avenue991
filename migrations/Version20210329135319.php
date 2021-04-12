<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329135319 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE univ_insc (id INT AUTO_INCREMENT NOT NULL, idetudiant VARCHAR(32) NOT NULL, num_commande VARCHAR(16) NOT NULL, pays VARCHAR(16) NOT NULL, ville VARCHAR(32) NOT NULL, annee VARCHAR(16) NOT NULL, universite VARCHAR(64) NOT NULL, siteweb VARCHAR(64) DEFAULT NULL, statut VARCHAR(16) NOT NULL, budget INT NOT NULL, info_sup VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_ocaz CHANGE ladate ladate VARCHAR(16) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE univ_insc');
        $this->addSql('ALTER TABLE commande_ocaz CHANGE ladate ladate VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
