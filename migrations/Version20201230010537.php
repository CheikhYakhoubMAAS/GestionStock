<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201230010537 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lcommande DROP FOREIGN KEY FK_57961F0AF347EFB');
        $this->addSql('DROP INDEX IDX_57961F0AF347EFB ON lcommande');
        $this->addSql('ALTER TABLE lcommande CHANGE produit_id id_produit_id INT NOT NULL');
        $this->addSql('ALTER TABLE lcommande ADD CONSTRAINT FK_57961F0AAABEFE2C FOREIGN KEY (id_produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_57961F0AAABEFE2C ON lcommande (id_produit_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lcommande DROP FOREIGN KEY FK_57961F0AAABEFE2C');
        $this->addSql('DROP INDEX IDX_57961F0AAABEFE2C ON lcommande');
        $this->addSql('ALTER TABLE lcommande CHANGE id_produit_id produit_id INT NOT NULL');
        $this->addSql('ALTER TABLE lcommande ADD CONSTRAINT FK_57961F0AF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_57961F0AF347EFB ON lcommande (produit_id)');
    }
}
