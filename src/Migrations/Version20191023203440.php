<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191023203440 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE classement (id INT AUTO_INCREMENT NOT NULL, championnat_id INT NOT NULL, user_id INT NOT NULL, mj INT NOT NULL, g INT NOT NULL, n INT NOT NULL, bp INT NOT NULL, bc INT NOT NULL, db INT NOT NULL, pts INT NOT NULL, UNIQUE INDEX UNIQ_55EE9D6D627A0DA8 (championnat_id), UNIQUE INDEX UNIQ_55EE9D6DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE classement ADD CONSTRAINT FK_55EE9D6D627A0DA8 FOREIGN KEY (championnat_id) REFERENCES championnats (id)');
        $this->addSql('ALTER TABLE classement ADD CONSTRAINT FK_55EE9D6DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE classement');
    }
}
