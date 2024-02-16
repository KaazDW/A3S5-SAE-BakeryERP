<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240121125303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE facture ADD prenom VARCHAR(255) NOT NULL, ADD nom VARCHAR(255) NOT NULL, CHANGE date_creation date_creation DATETIME NOT NULL');

        //Insertion Facture Test, tout sur l'user 1
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 10, '2024-01-20', '2024-01-22', NOW(), 'pauline', 'Trontin');");
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 30, '2024-01-18', '2024-01-18', NOW(), 'pauline', 'Trontin');");
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 40, '2024-02-12', '2024-12-12', NOW(), 'pauline', 'Trontin');");
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 60, '2024-02-01', '2024-01-01', NOW(), 'pauline', 'Trontin');");
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 77, '2024-03-01', '2024-01-01', NOW(), 'pauline', 'Trontin');");
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 50, '2024-03-01', '2024-01-01', NOW(), 'pauline', 'Trontin');");
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 55, '2024-04-01', '2024-01-01', NOW(), 'pauline', 'Trontin');");
        $this->addSql("INSERT INTO facture (user_id, montant, date_reservation, date_paiement, date_creation, prenom, nom) VALUES (1, 53, '2024-04-01', '2024-01-01', NOW(), 'pauline', 'Trontin');");


        //Insertion FactureProduit Test

        //Facture 1
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 1, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (2, 1, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (3, 1, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (6, 1, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (7, 1, 5););");

        //Facture 2
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (8, 2, 5););");

        //Facture 3
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (11, 3, 5););");

        //Facture 4
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 4, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (5, 4, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (2, 4, 2););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (3, 4, 3););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (8, 4, 3););");


        //Facture 5
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 5, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 5, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (2, 5, 2););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (3, 5, 3););");

        //Facture 6
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 6, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 6, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (4, 6, 2););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (5, 6, 3););");

        //Facture 7
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 7, 1););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (2, 7, 2););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (3, 7, 3););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (4, 7, 3););");

        //Facture 8
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (1, 8, 5););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (3, 8, 3););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (4, 8, 17););");
        $this->addSql("INSERT INTO facture_produit (id_produit, id_facture, quantite) VALUES (5, 8, 2););");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE facture DROP prenom, DROP nom, CHANGE date_creation date_creation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
