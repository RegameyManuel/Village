<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220919104536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, adr_client_id_id INT DEFAULT NULL, adr_adresse VARCHAR(255) NOT NULL, adr_cp VARCHAR(16) NOT NULL, adr_ville VARCHAR(50) NOT NULL, adr_region VARCHAR(50) DEFAULT NULL, adr_pays VARCHAR(50) NOT NULL, adr_facturation TINYINT(1) NOT NULL, adr_livraison TINYINT(1) NOT NULL, INDEX IDX_C35F081631D726E0 (adr_client_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bl (id INT AUTO_INCREMENT NOT NULL, bl_commande_id_id INT NOT NULL, bl_date DATE NOT NULL, INDEX IDX_521636A9BDD377C7 (bl_commande_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, cli_commercial_id INT DEFAULT NULL, cli_societe VARCHAR(50) DEFAULT NULL, cli_nom VARCHAR(50) NOT NULL, cli_prenom VARCHAR(50) DEFAULT NULL, cli_telephone VARCHAR(20) NOT NULL, cli_mail VARCHAR(50) NOT NULL, cli_siret VARCHAR(50) DEFAULT NULL, cli_reference VARCHAR(50) NOT NULL, cli_coefficient NUMERIC(5, 2) NOT NULL, cli_reduction NUMERIC(5, 2) NOT NULL, INDEX IDX_C74404554500CF01 (cli_commercial_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, commande_partielle TINYINT(1) DEFAULT NULL, commande_expediee TINYINT(1) DEFAULT NULL, commande_dt_paiement DATE DEFAULT NULL, commande_dt_expedition DATE DEFAULT NULL, commande_virement TINYINT(1) DEFAULT NULL, commande_cheque TINYINT(1) DEFAULT NULL, commande_valide TINYINT(1) NOT NULL, commande_archive TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commercial (id INT AUTO_INCREMENT NOT NULL, com_service_id INT NOT NULL, com_nom VARCHAR(50) NOT NULL, com_prenom VARCHAR(50) NOT NULL, com_telephone VARCHAR(20) NOT NULL, com_mail VARCHAR(50) NOT NULL, com_particulier TINYINT(1) NOT NULL, INDEX IDX_7653F3AE5BE959CA (com_service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_commande (id INT AUTO_INCREMENT NOT NULL, detail_commande_id_id INT NOT NULL, detail_qte INT NOT NULL, detail_prix NUMERIC(10, 2) NOT NULL, INDEX IDX_98344FA66CD3C91E (detail_commande_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, fact_commande_id_id INT NOT NULL, fact_date DATE NOT NULL, fact_sauvegarde VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_FE866410426FCA19 (fact_commande_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, fourni_service_id INT NOT NULL, fourni_societe VARCHAR(50) NOT NULL, fourni_nom VARCHAR(50) DEFAULT NULL, fourni_prenom VARCHAR(50) DEFAULT NULL, fourni_telephone VARCHAR(20) NOT NULL, fourni_mail VARCHAR(50) NOT NULL, fourni_adresse VARCHAR(255) DEFAULT NULL, fourni_cp VARCHAR(16) DEFAULT NULL, fourni_ville VARCHAR(50) DEFAULT NULL, fourni_region VARCHAR(50) DEFAULT NULL, fourni_pays VARCHAR(50) DEFAULT NULL, fourni_constructeur TINYINT(1) NOT NULL, fourni_importateur TINYINT(1) NOT NULL, INDEX IDX_369ECA32303180CC (fourni_service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, prod_rubrique_id INT NOT NULL, prod_fournisseur_id INT DEFAULT NULL, prod_marque VARCHAR(50) DEFAULT NULL, prod_modele VARCHAR(50) NOT NULL, prod_finition VARCHAR(50) NOT NULL, prod_lib_court VARCHAR(255) DEFAULT NULL, prod_lib_long LONGTEXT DEFAULT NULL, prod_prix NUMERIC(10, 2) NOT NULL, prod_photo VARCHAR(255) DEFAULT NULL, prod_actif TINYINT(1) NOT NULL, prod_reference VARCHAR(50) NOT NULL, INDEX IDX_29A5EC2797BFE4C4 (prod_rubrique_id), INDEX IDX_29A5EC275ACB195E (prod_fournisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubrique (id INT AUTO_INCREMENT NOT NULL, rubriq_parente_id INT DEFAULT NULL, rubrique_parente_id INT DEFAULT NULL, rubriq_nom VARCHAR(50) NOT NULL, INDEX IDX_8FA4097CC1D0A0B5 (rubriq_parente_id), INDEX IDX_8FA4097C9A41E180 (rubrique_parente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, serv_nom VARCHAR(50) NOT NULL, serv_telephone VARCHAR(20) NOT NULL, serv_mail VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tva (id INT AUTO_INCREMENT NOT NULL, tva_nom VARCHAR(50) NOT NULL, tva_taux NUMERIC(4, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F081631D726E0 FOREIGN KEY (adr_client_id_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE bl ADD CONSTRAINT FK_521636A9BDD377C7 FOREIGN KEY (bl_commande_id_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404554500CF01 FOREIGN KEY (cli_commercial_id) REFERENCES commercial (id)');
        $this->addSql('ALTER TABLE commercial ADD CONSTRAINT FK_7653F3AE5BE959CA FOREIGN KEY (com_service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE detail_commande ADD CONSTRAINT FK_98344FA66CD3C91E FOREIGN KEY (detail_commande_id_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410426FCA19 FOREIGN KEY (fact_commande_id_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT FK_369ECA32303180CC FOREIGN KEY (fourni_service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2797BFE4C4 FOREIGN KEY (prod_rubrique_id) REFERENCES rubrique (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC275ACB195E FOREIGN KEY (prod_fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE rubrique ADD CONSTRAINT FK_8FA4097CC1D0A0B5 FOREIGN KEY (rubriq_parente_id) REFERENCES rubrique (id)');
        $this->addSql('ALTER TABLE rubrique ADD CONSTRAINT FK_8FA4097C9A41E180 FOREIGN KEY (rubrique_parente_id) REFERENCES rubrique (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F081631D726E0');
        $this->addSql('ALTER TABLE bl DROP FOREIGN KEY FK_521636A9BDD377C7');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404554500CF01');
        $this->addSql('ALTER TABLE commercial DROP FOREIGN KEY FK_7653F3AE5BE959CA');
        $this->addSql('ALTER TABLE detail_commande DROP FOREIGN KEY FK_98344FA66CD3C91E');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410426FCA19');
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY FK_369ECA32303180CC');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2797BFE4C4');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC275ACB195E');
        $this->addSql('ALTER TABLE rubrique DROP FOREIGN KEY FK_8FA4097CC1D0A0B5');
        $this->addSql('ALTER TABLE rubrique DROP FOREIGN KEY FK_8FA4097C9A41E180');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE bl');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commercial');
        $this->addSql('DROP TABLE detail_commande');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE rubrique');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE tva');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
