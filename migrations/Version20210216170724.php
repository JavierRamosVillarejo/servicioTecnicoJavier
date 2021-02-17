<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210216170724 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE incidencia ADD usuario_id INT NOT NULL');
        $this->addSql('ALTER TABLE incidencia ADD CONSTRAINT FK_C7C6728CDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('CREATE INDEX IDX_C7C6728CDB38439E ON incidencia (usuario_id)');
        $this->addSql('ALTER TABLE lineas_deincidencia ADD incidencias_id INT NOT NULL');
        $this->addSql('ALTER TABLE lineas_deincidencia ADD CONSTRAINT FK_52F6F1A6A9945E2A FOREIGN KEY (incidencias_id) REFERENCES incidencia (id)');
        $this->addSql('CREATE INDEX IDX_52F6F1A6A9945E2A ON lineas_deincidencia (incidencias_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE incidencia DROP FOREIGN KEY FK_C7C6728CDB38439E');
        $this->addSql('DROP INDEX IDX_C7C6728CDB38439E ON incidencia');
        $this->addSql('ALTER TABLE incidencia DROP usuario_id');
        $this->addSql('ALTER TABLE lineas_deincidencia DROP FOREIGN KEY FK_52F6F1A6A9945E2A');
        $this->addSql('DROP INDEX IDX_52F6F1A6A9945E2A ON lineas_deincidencia');
        $this->addSql('ALTER TABLE lineas_deincidencia DROP incidencias_id');
    }
}
