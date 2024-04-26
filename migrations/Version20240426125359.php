<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240426125359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipe ADD pasto_id INT NOT NULL, ADD voto_id INT DEFAULT NULL, DROP id_pasto, DROP id_voto');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B1379F12CBBF FOREIGN KEY (pasto_id) REFERENCES pasto (id)');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B1371D613A98 FOREIGN KEY (voto_id) REFERENCES voto (id)');
        $this->addSql('CREATE INDEX IDX_DA88B1379F12CBBF ON recipe (pasto_id)');
        $this->addSql('CREATE INDEX IDX_DA88B1371D613A98 ON recipe (voto_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B1379F12CBBF');
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B1371D613A98');
        $this->addSql('DROP INDEX IDX_DA88B1379F12CBBF ON recipe');
        $this->addSql('DROP INDEX IDX_DA88B1371D613A98 ON recipe');
        $this->addSql('ALTER TABLE recipe ADD id_pasto BIGINT NOT NULL, ADD id_voto BIGINT DEFAULT NULL, DROP pasto_id, DROP voto_id');
    }
}
