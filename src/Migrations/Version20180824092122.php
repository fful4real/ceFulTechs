<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180824092122 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ce_account ADD CONSTRAINT FK_A3F27B5E435A3327 FOREIGN KEY (ce_created_by_id) REFERENCES ce_user (id)');
        $this->addSql('CREATE INDEX IDX_A3F27B5E435A3327 ON ce_account (ce_created_by_id)');
        $this->addSql('ALTER TABLE ce_account_entry RENAME INDEX ce_created_by_id TO IDX_EECEF4A0435A3327');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ce_account DROP FOREIGN KEY FK_A3F27B5E435A3327');
        $this->addSql('DROP INDEX IDX_A3F27B5E435A3327 ON ce_account');
        $this->addSql('ALTER TABLE ce_account_entry RENAME INDEX idx_eecef4a0435a3327 TO ce_created_by_id');
    }
}
