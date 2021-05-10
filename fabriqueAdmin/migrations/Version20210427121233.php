<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427121233 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD periode_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE situation_apprenant_periode ADD CONSTRAINT FK_4EB41429F384C1CF FOREIGN KEY (periode_id) REFERENCES post_formation (id)');
        $this->addSql('CREATE INDEX IDX_4EB41429F384C1CF ON situation_apprenant_periode (periode_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP FOREIGN KEY FK_4EB41429F384C1CF');
        $this->addSql('DROP INDEX IDX_4EB41429F384C1CF ON situation_apprenant_periode');
        $this->addSql('ALTER TABLE situation_apprenant_periode DROP periode_id');
    }
}
