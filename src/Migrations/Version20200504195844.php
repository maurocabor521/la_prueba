<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200504195844 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cursos CHANGE Institucion_idInstitucion Institucion_idInstitucion INT DEFAULT NULL');
        $this->addSql('ALTER TABLE deber_estudiante CHANGE docentes_iddocente docentes_iddocente INT DEFAULT NULL, CHANGE estudiantes_idestudiante estudiantes_idestudiante INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ejercicios CHANGE docentes_iddocente docentes_iddocente INT DEFAULT NULL');
        $this->addSql('ALTER TABLE grupos CHANGE cursos_idcurso cursos_idcurso INT DEFAULT NULL');
        $this->addSql('ALTER TABLE grupos_has_estudiantes DROP FOREIGN KEY fk_grupos_has_estudiantes_estudiantes1');
        $this->addSql('ALTER TABLE grupos_has_estudiantes DROP FOREIGN KEY fk_grupos_has_estudiantes_grupos1');
        $this->addSql('DROP INDEX fk_grupos_has_estudiantes_grupos1_idx ON grupos_has_estudiantes');
        $this->addSql('CREATE INDEX IDX_B2E6951D26B58C5 ON grupos_has_estudiantes (grupos_idgrupo)');
        $this->addSql('DROP INDEX fk_grupos_has_estudiantes_estudiantes1_idx ON grupos_has_estudiantes');
        $this->addSql('CREATE INDEX IDX_B2E6951D501E53B3 ON grupos_has_estudiantes (estudiantes_idestudiante)');
        $this->addSql('ALTER TABLE grupos_has_estudiantes ADD CONSTRAINT fk_grupos_has_estudiantes_estudiantes1 FOREIGN KEY (estudiantes_idestudiante) REFERENCES estudiantes (idestudiante) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE grupos_has_estudiantes ADD CONSTRAINT fk_grupos_has_estudiantes_grupos1 FOREIGN KEY (grupos_idgrupo) REFERENCES grupos (idgrupo) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE institucion CHANGE idInstitucion idInstitucion INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE cursos CHANGE Institucion_idInstitucion Institucion_idInstitucion INT NOT NULL');
        $this->addSql('ALTER TABLE deber_estudiante CHANGE docentes_iddocente docentes_iddocente INT NOT NULL, CHANGE estudiantes_idestudiante estudiantes_idestudiante INT NOT NULL');
        $this->addSql('ALTER TABLE ejercicios CHANGE docentes_iddocente docentes_iddocente INT NOT NULL');
        $this->addSql('ALTER TABLE grupos CHANGE cursos_idcurso cursos_idcurso INT NOT NULL');
        $this->addSql('ALTER TABLE grupos_has_estudiantes DROP FOREIGN KEY FK_B2E6951D26B58C5');
        $this->addSql('ALTER TABLE grupos_has_estudiantes DROP FOREIGN KEY FK_B2E6951D501E53B3');
        $this->addSql('DROP INDEX idx_b2e6951d26b58c5 ON grupos_has_estudiantes');
        $this->addSql('CREATE INDEX fk_grupos_has_estudiantes_grupos1_idx ON grupos_has_estudiantes (grupos_idgrupo)');
        $this->addSql('DROP INDEX idx_b2e6951d501e53b3 ON grupos_has_estudiantes');
        $this->addSql('CREATE INDEX fk_grupos_has_estudiantes_estudiantes1_idx ON grupos_has_estudiantes (estudiantes_idestudiante)');
        $this->addSql('ALTER TABLE grupos_has_estudiantes ADD CONSTRAINT FK_B2E6951D26B58C5 FOREIGN KEY (grupos_idgrupo) REFERENCES grupos (idgrupo)');
        $this->addSql('ALTER TABLE grupos_has_estudiantes ADD CONSTRAINT FK_B2E6951D501E53B3 FOREIGN KEY (estudiantes_idestudiante) REFERENCES estudiantes (idestudiante)');
        $this->addSql('ALTER TABLE institucion CHANGE idInstitucion idInstitucion INT AUTO_INCREMENT NOT NULL');
    }
}
