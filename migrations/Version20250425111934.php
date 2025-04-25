<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250425111934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD hotel_id INT DEFAULT NULL, ADD car_id INT DEFAULT NULL, ADD restaurant_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEC3C6F69F FOREIGN KEY (car_id) REFERENCES car (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E00CEDDE3243BB18 ON booking (hotel_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E00CEDDEC3C6F69F ON booking (car_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E00CEDDEB1E7706E ON booking (restaurant_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE car ADD city_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE car ADD CONSTRAINT FK_773DE69D8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_773DE69D8BAC62AF ON car (city_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE hotel ADD city_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE hotel ADD CONSTRAINT FK_3535ED98BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_3535ED98BAC62AF ON hotel (city_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE restaurant ADD city_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123F8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_EB95123F8BAC62AF ON restaurant (city_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED98BAC62AF
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_3535ED98BAC62AF ON hotel
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE hotel DROP city_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE3243BB18
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEC3C6F69F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEB1E7706E
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E00CEDDE3243BB18 ON booking
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E00CEDDEC3C6F69F ON booking
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E00CEDDEB1E7706E ON booking
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE booking DROP hotel_id, DROP car_id, DROP restaurant_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE car DROP FOREIGN KEY FK_773DE69D8BAC62AF
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_773DE69D8BAC62AF ON car
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE car DROP city_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE restaurant DROP FOREIGN KEY FK_EB95123F8BAC62AF
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_EB95123F8BAC62AF ON restaurant
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE restaurant DROP city_id
        SQL);
    }
}
