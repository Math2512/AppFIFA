<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191020152845 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE matchs DROP FOREIGN KEY FK_6B1E6041627A0DA8');
        $this->addSql('DROP INDEX IDX_6B1E6041627A0DA8 ON matchs');
        $this->addSql('ALTER TABLE matchs ADD championnat INT NOT NULL, ADD joueur INT NOT NULL, DROP championnat_id, DROP joueur_1, DROP joueurs_2');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE matchs ADD championnat_id INT NOT NULL, ADD joueur_1 INT NOT NULL, ADD joueurs_2 INT NOT NULL, DROP championnat, DROP joueur');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E6041627A0DA8 FOREIGN KEY (championnat_id) REFERENCES championnats (id)');
        $this->addSql('CREATE INDEX IDX_6B1E6041627A0DA8 ON matchs (championnat_id)');
    }
}
