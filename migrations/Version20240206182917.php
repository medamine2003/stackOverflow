<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206182917 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD member_id INT DEFAULT NULL, ADD moderator_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D0AFA354 FOREIGN KEY (moderator_id) REFERENCES moderator (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6497597D3FE ON user (member_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649D0AFA354 ON user (moderator_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497597D3FE');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D0AFA354');
        $this->addSql('DROP INDEX UNIQ_8D93D6497597D3FE ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D649D0AFA354 ON user');
        $this->addSql('ALTER TABLE user DROP member_id, DROP moderator_id');
    }
}
