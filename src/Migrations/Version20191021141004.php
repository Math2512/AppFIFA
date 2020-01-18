<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191021141004 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE matchs (id INT AUTO_INCREMENT NOT NULL, joueurs1_id INT DEFAULT NULL, joueurs2_id INT DEFAULT NULL, championnat_id INT DEFAULT NULL, resultat_j1 INT DEFAULT NULL, resultat_j2 INT DEFAULT NULL, journee INT DEFAULT NULL, INDEX IDX_6B1E60414C704257 (joueurs1_id), INDEX IDX_6B1E60415EC5EDB9 (joueurs2_id), INDEX IDX_6B1E6041627A0DA8 (championnat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E60414C704257 FOREIGN KEY (joueurs1_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E60415EC5EDB9 FOREIGN KEY (joueurs2_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE matchs ADD CONSTRAINT FK_6B1E6041627A0DA8 FOREIGN KEY (championnat_id) REFERENCES championnats (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE matchs');
    }
}
