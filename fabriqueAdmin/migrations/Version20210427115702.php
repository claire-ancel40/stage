<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427115702 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD situation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD CONSTRAINT FK_4EB414293408E8AF FOREIGN KEY (situation_id) REFERENCES situations (id)');
        $this->addSql('CREATE INDEX IDX_4EB414293408E8AF ON situation_apprenant_periode (situation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP FOREIGN KEY FK_4EB414293408E8AF');
        $this->addSql('DROP INDEX IDX_4EB414293408E8AF ON situation_apprenant_periode');
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP situation_id');
    }
}
