<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427075011 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post_formation (id INT AUTO_INCREMENT NOT NULL, situation_appenant_periode_id INT DEFAULT NULL, periode VARCHAR(255) NOT NULL, INDEX IDX_E12E5F486D9614E0 (situation_appenant_periode_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post_formation ADD CONSTRAINT FK_E12E5F486D9614E0 FOREIGN KEY (situation_appenant_periode_id) REFERENCES situation_apprenant_periode (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE post_formation');
    }
}
