<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20200817162934 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, skill VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_specialty (id INT AUTO_INCREMENT NOT NULL, specialty_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_B3979DB19A353316 (specialty_id), INDEX IDX_B3979DB15585C142 (skill_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialties (id INT AUTO_INCREMENT NOT NULL, specialty VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE skill_specialty ADD CONSTRAINT FK_B3979DB19A353316 FOREIGN KEY (specialty_id) REFERENCES specialties (id)');
        $this->addSql('ALTER TABLE skill_specialty ADD CONSTRAINT FK_B3979DB15585C142 FOREIGN KEY (skill_id) REFERENCES skills (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE skill_specialty DROP FOREIGN KEY FK_B3979DB15585C142');
        $this->addSql('ALTER TABLE skill_specialty DROP FOREIGN KEY FK_B3979DB19A353316');
        $this->addSql('DROP TABLE skills');
        $this->addSql('DROP TABLE skill_specialty');
        $this->addSql('DROP TABLE specialties');
    }
}
