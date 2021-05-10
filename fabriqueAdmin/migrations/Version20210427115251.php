<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427115251 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP FOREIGN KEY FK_4EB41429F93D55FD');
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP FOREIGN KEY FK_4EB414293408E8AF');
        $this->addSql('DROP TABLE post_formation');
        $this->addSql('DROP TABLE situations');
        $this->addSql('DROP INDEX IDX_4EB414293408E8AF ON situation_apprenant_periode');
        $this->addSql('DROP INDEX IDX_4EB41429F93D55FD ON situation_apprenant_periode');
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP situation_id, DROP post_formation_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post_formation (id INT AUTO_INCREMENT NOT NULL, periode VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE situations (id INT AUTO_INCREMENT NOT NULL, situation VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD situation_id INT DEFAULT NULL, ADD post_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD CONSTRAINT FK_4EB414293408E8AF FOREIGN KEY (situation_id) REFERENCES situations (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD CONSTRAINT FK_4EB41429F93D55FD FOREIGN KEY (post_formation_id) REFERENCES post_formation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_4EB414293408E8AF ON situation_apprenant_periode (situation_id)');
        $this->addSql('CREATE INDEX IDX_4EB41429F93D55FD ON situation_apprenant_periode (post_formation_id)');
    }
}
