<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210409010302 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE univ_insc ADD num_commande VARCHAR(16) NOT NULL, ADD id_etudiant VARCHAR(64) NOT NULL, ADD service_avenir VARCHAR(128) DEFAULT NULL, CHANGE universite universite VARCHAR(64) NOT NULL, CHANGE siteweb siteweb VARCHAR(64) DEFAULT NULL, CHANGE budget budget INT NOT NULL, CHANGE info_sup info_sup VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE univ_insc DROP num_commande, DROP id_etudiant, DROP service_avenir, CHANGE universite universite VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE siteweb siteweb VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE budget budget INT DEFAULT NULL, CHANGE info_sup info_sup VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
