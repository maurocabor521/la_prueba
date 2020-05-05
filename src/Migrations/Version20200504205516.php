<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200504205516 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE docentes ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE docentes ADD CONSTRAINT FK_CA483735A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CA483735A76ED395 ON docentes (user_id)');
        $this->addSql('ALTER TABLE estudiantes ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE estudiantes ADD CONSTRAINT FK_B3522F61A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B3522F61A76ED395 ON estudiantes (user_id)');
        $this->addSql('ALTER TABLE institucion CHANGE idInstitucion idInstitucion INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD nombre VARCHAR(250) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE docentes DROP FOREIGN KEY FK_CA483735A76ED395');
        $this->addSql('DROP INDEX IDX_CA483735A76ED395 ON docentes');
        $this->addSql('ALTER TABLE docentes DROP user_id');
        $this->addSql('ALTER TABLE estudiantes DROP FOREIGN KEY FK_B3522F61A76ED395');
        $this->addSql('DROP INDEX IDX_B3522F61A76ED395 ON estudiantes');
        $this->addSql('ALTER TABLE estudiantes DROP user_id');
        $this->addSql('ALTER TABLE institucion CHANGE idInstitucion idInstitucion INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user DROP nombre');
    }
}
