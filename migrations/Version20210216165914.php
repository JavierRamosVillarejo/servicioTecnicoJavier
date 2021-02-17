<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210216165914 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE icidencia (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE incidencia ADD clientes_id INT NOT NULL');
        $this->addSql('ALTER TABLE incidencia ADD CONSTRAINT FK_C7C6728CFBC3AF09 FOREIGN KEY (clientes_id) REFERENCES cliente (id)');
        $this->addSql('CREATE INDEX IDX_C7C6728CFBC3AF09 ON incidencia (clientes_id)');
        $this->addSql('ALTER TABLE lineas_deincidencia ADD datetime VARCHAR(255) NOT NULL, ADD fecha VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE icidencia');
        $this->addSql('ALTER TABLE incidencia DROP FOREIGN KEY FK_C7C6728CFBC3AF09');
        $this->addSql('DROP INDEX IDX_C7C6728CFBC3AF09 ON incidencia');
        $this->addSql('ALTER TABLE incidencia DROP clientes_id');
        $this->addSql('ALTER TABLE lineas_deincidencia DROP datetime, DROP fecha');
    }
}
