<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210426094220 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE situations (id INT AUTO_INCREMENT NOT NULL, situation VARCHAR(255) NOT NULL, apprenants VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE apprenant ADD apprenant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('CREATE INDEX IDX_C4EB462EC5697D6D ON apprenant (apprenant_id)');
        $this->addSql('ALTER TABLE suivi_post_formation ADD situations_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE suivi_post_formation ADD CONSTRAINT FK_FB0C8A4CA12C0BB4 FOREIGN KEY (situations_id) REFERENCES situations (id)');
        $this->addSql('CREATE INDEX IDX_FB0C8A4CA12C0BB4 ON suivi_post_formation (situations_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE suivi_post_formation DROP FOREIGN KEY FK_FB0C8A4CA12C0BB4');
        $this->addSql('DROP TABLE situations');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462EC5697D6D');
        $this->addSql('DROP INDEX IDX_C4EB462EC5697D6D ON apprenant');
        $this->addSql('ALTER TABLE apprenant DROP apprenant_id');
        $this->addSql('DROP INDEX IDX_FB0C8A4CA12C0BB4 ON suivi_post_formation');
        $this->addSql('ALTER TABLE suivi_post_formation DROP situations_id');
    }
}
