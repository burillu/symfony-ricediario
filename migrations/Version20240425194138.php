<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240425194138 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE allergene_ingrediente (allergene_id INT NOT NULL, ingrediente_id INT NOT NULL, INDEX IDX_27E73634646AB2 (allergene_id), INDEX IDX_27E7363769E458D (ingrediente_id), PRIMARY KEY(allergene_id, ingrediente_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE allergene_ingrediente ADD CONSTRAINT FK_27E73634646AB2 FOREIGN KEY (allergene_id) REFERENCES allergene (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE allergene_ingrediente ADD CONSTRAINT FK_27E7363769E458D FOREIGN KEY (ingrediente_id) REFERENCES ingrediente (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allergene_ingrediente DROP FOREIGN KEY FK_27E73634646AB2');
        $this->addSql('ALTER TABLE allergene_ingrediente DROP FOREIGN KEY FK_27E7363769E458D');
        $this->addSql('DROP TABLE allergene_ingrediente');
    }
}
