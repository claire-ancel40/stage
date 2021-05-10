<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427074208 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE situation_apprenant_periode (id INT AUTO_INCREMENT NOT NULL, apprenant_id INT DEFAULT NULL, situation_id INT DEFAULT NULL, INDEX IDX_4EB41429C5697D6D (apprenant_id), INDEX IDX_4EB414293408E8AF (situation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD CONSTRAINT FK_4EB41429C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD CONSTRAINT FK_4EB414293408E8AF FOREIGN KEY (situation_id) REFERENCES situations (id)');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462EC5697D6D');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462ED71B8D85');
        $this->addSql('DROP INDEX IDX_C4EB462EC5697D6D ON apprenant');
        $this->addSql('DROP INDEX IDX_C4EB462ED71B8D85 ON apprenant');
        $this->addSql('ALTER TABLE apprenant DROP suivi_post_formation_id, DROP apprenant_id');
        $this->addSql('ALTER TABLE situations DROP apprenants');
        $this->addSql('ALTER TABLE suivi_post_formation DROP FOREIGN KEY FK_FB0C8A4CA12C0BB4');
        $this->addSql('DROP INDEX IDX_FB0C8A4CA12C0BB4 ON suivi_post_formation');
        $this->addSql('ALTER TABLE suivi_post_formation DROP situations_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE situation_apprenant_periode');
        $this->addSql('ALTER TABLE apprenant ADD suivi_post_formation_id INT DEFAULT NULL, ADD apprenant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462ED71B8D85 FOREIGN KEY (suivi_post_formation_id) REFERENCES suivi_post_formation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C4EB462EC5697D6D ON apprenant (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_C4EB462ED71B8D85 ON apprenant (suivi_post_formation_id)');
        $this->addSql('ALTER TABLE situations ADD apprenants VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE suivi_post_formation ADD situations_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE suivi_post_formation ADD CONSTRAINT FK_FB0C8A4CA12C0BB4 FOREIGN KEY (situations_id) REFERENCES situations (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_FB0C8A4CA12C0BB4 ON suivi_post_formation (situations_id)');
    }
}
