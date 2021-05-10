<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427075550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post_formation DROP FOREIGN KEY FK_E12E5F486D9614E0');
        $this->addSql('DROP INDEX IDX_E12E5F486D9614E0 ON post_formation');
        $this->addSql('ALTER TABLE post_formation DROP situation_appenant_periode_id');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD post_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD CONSTRAINT FK_4EB41429F93D55FD FOREIGN KEY (post_formation_id) REFERENCES post_formation (id)');
        $this->addSql('CREATE INDEX IDX_4EB41429F93D55FD ON situation_apprenant_periode (post_formation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post_formation ADD situation_appenant_periode_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post_formation ADD CONSTRAINT FK_E12E5F486D9614E0 FOREIGN KEY (situation_appenant_periode_id) REFERENCES situation_apprenant_periode (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E12E5F486D9614E0 ON post_formation (situation_appenant_periode_id)');
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP FOREIGN KEY FK_4EB41429F93D55FD');
        $this->addSql('DROP INDEX IDX_4EB41429F93D55FD ON situation_apprenant_periode');
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP post_formation_id');
    }
}
