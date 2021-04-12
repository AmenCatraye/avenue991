<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210409003842 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE univ_insc ADD service_avenir VARCHAR(128) DEFAULT NULL, CHANGE idetudiant idetudiant VARCHAR(32) NOT NULL, CHANGE pays pays VARCHAR(16) NOT NULL, CHANGE ville ville VARCHAR(32) NOT NULL, CHANGE annee annee VARCHAR(16) NOT NULL, CHANGE universite universite VARCHAR(64) NOT NULL, CHANGE statut statut VARCHAR(16) NOT NULL, CHANGE budget budget INT NOT NULL, CHANGE numservice numservice VARCHAR(16) NOT NULL, CHANGE num_commande num_commande VARCHAR(16) NOT NULL, CHANGE id_etudiant id_etudiant VARCHAR(64) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE univ_insc DROP service_avenir, CHANGE idetudiant idetudiant VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE num_commande num_commande VARCHAR(16) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE pays pays VARCHAR(16) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ville ville VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE annee annee VARCHAR(16) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE universite universite VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE statut statut VARCHAR(16) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE budget budget INT DEFAULT NULL, CHANGE id_etudiant id_etudiant VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numservice numservice VARCHAR(16) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
