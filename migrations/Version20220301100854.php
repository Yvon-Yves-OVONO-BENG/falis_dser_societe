<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220301100854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création des tables';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, type_activite_principale_id INT DEFAULT NULL, activite_principale_id INT DEFAULT NULL, date_debut DATE NOT NULL, liste_activites LONGTEXT DEFAULT NULL, detail_activite_principale VARCHAR(255) DEFAULT NULL, activite_soumise_obligation_qpa TINYINT(1) NOT NULL, activite_ambulante TINYINT(1) NOT NULL, superficie DOUBLE PRECISION DEFAULT NULL, autre_precise VARCHAR(255) DEFAULT NULL, INDEX IDX_B87555154735D33 (type_activite_principale_id), INDEX IDX_B8755515D5B3CD06 (activite_principale_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activite_principale (id INT AUTO_INCREMENT NOT NULL, activite_principale VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, arrondissement_id INT DEFAULT NULL, commune_id INT DEFAULT NULL, bis_ter_id INT DEFAULT NULL, complement_adresse VARCHAR(255) DEFAULT NULL, numero_rue VARCHAR(255) DEFAULT NULL, voie VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, accepte_recevoir_informations TINYINT(1) DEFAULT NULL, fixe VARCHAR(255) DEFAULT NULL, partable VARCHAR(255) DEFAULT NULL, fax VARCHAR(255) DEFAULT NULL, INDEX IDX_C35F0816407DBC11 (arrondissement_id), INDEX IDX_C35F0816131A4F72 (commune_id), INDEX IDX_C35F0816A84D4736 (bis_ter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE arrondissement (id INT AUTO_INCREMENT NOT NULL, departement_id INT DEFAULT NULL, arrondissement VARCHAR(255) NOT NULL, INDEX IDX_3A3B64C4CCF9E01E (departement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE beneficiaire (id INT AUTO_INCREMENT NOT NULL, dirigeant_actuel_id INT DEFAULT NULL, autre_dirigeant_id INT DEFAULT NULL, societe_id INT DEFAULT NULL, date_devenu_beneficiaire DATE NOT NULL, est_dirigeant_actuel TINYINT(1) NOT NULL, plus_de25_cdpp DOUBLE PRECISION NOT NULL, plus_de25_cdnp DOUBLE PRECISION NOT NULL, plus_de25_ciipp DOUBLE PRECISION NOT NULL, plus_de25_ciinp DOUBLE PRECISION NOT NULL, plus_de25_cipmpp DOUBLE PRECISION NOT NULL, plus_de25_cipmnp DOUBLE PRECISION NOT NULL, plus_de25_dvdpp DOUBLE PRECISION NOT NULL, plus_de25_dvdnp DOUBLE PRECISION NOT NULL, plus_de25_dvdu DOUBLE PRECISION NOT NULL, plus_de25_dviipp DOUBLE PRECISION NOT NULL, plus_de25_dviinp DOUBLE PRECISION NOT NULL, plus_de25_dviiu DOUBLE PRECISION NOT NULL, plus_de25_dvipmpp DOUBLE PRECISION NOT NULL, plus_de25_dvipmnp DOUBLE PRECISION NOT NULL, plus_de25_dvipmu DOUBLE PRECISION NOT NULL, autre_moy_controle TINYINT(1) NOT NULL, autre_moy_controle_determination TINYINT(1) NOT NULL, autre_moy_controle_detention_pouvoir TINYINT(1) NOT NULL, representant_legal TINYINT(1) NOT NULL, plus_de25_capital TINYINT(1) NOT NULL, plus_de25_cd TINYINT(1) NOT NULL, plus_de25_ci TINYINT(1) NOT NULL, plus_de25_cii TINYINT(1) NOT NULL, plus_de25_cipm TINYINT(1) NOT NULL, plus_de25_dv TINYINT(1) NOT NULL, plus_de25_dvd TINYINT(1) NOT NULL, plus_de25_dvi TINYINT(1) NOT NULL, plus_de25_dvii TINYINT(1) NOT NULL, plus_de25_dvipm TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_B140D80239A34E74 (dirigeant_actuel_id), UNIQUE INDEX UNIQ_B140D802E5776DEA (autre_dirigeant_id), INDEX IDX_B140D802FCF77503 (societe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bis_ter (id INT AUTO_INCREMENT NOT NULL, bis_ter VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE civilite (id INT AUTO_INCREMENT NOT NULL, civilite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, commune VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE declarant (id INT AUTO_INCREMENT NOT NULL, en_qualite_de_id INT DEFAULT NULL, fait_a VARCHAR(255) NOT NULL, par VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, INDEX IDX_3A829771F5BD7CB1 (en_qualite_de_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE declaration_relative_etablissement_active (id INT AUTO_INCREMENT NOT NULL, lieu_exercice_activite_id INT DEFAULT NULL, activite_id INT DEFAULT NULL, nom_commercial VARCHAR(255) DEFAULT NULL, nom_domaine_commercial VARCHAR(255) DEFAULT NULL, enseigne VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_610458D4CE7DE23D (lieu_exercice_activite_id), UNIQUE INDEX UNIQ_610458D49B0F88B1 (activite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE declaration_relative_societe (id INT AUTO_INCREMENT NOT NULL, devise_id INT DEFAULT NULL, denomination VARCHAR(255) NOT NULL, sigle VARCHAR(255) DEFAULT NULL, statut_legal_particulier VARCHAR(255) DEFAULT NULL, duree_societe INT NOT NULL, montant_capital DOUBLE PRECISION NOT NULL, date_cloture_exercice DATE NOT NULL, date_cloture_premier_exercice DATE DEFAULT NULL, adhesion_principe_economie_social_solidaire TINYINT(1) NOT NULL, societe_amission TINYINT(1) NOT NULL, liste_activitesprincipales LONGTEXT NOT NULL, INDEX IDX_4CB70262F4445056 (devise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE declaration_volet_social_tns (id INT AUTO_INCREMENT NOT NULL, personne_regime_travailleur_non_salarie_id INT DEFAULT NULL, regime_assurance_maladie_id INT DEFAULT NULL, numero_securite_sociale VARCHAR(255) DEFAULT NULL, numero_securite_sociale_en_cours TINYINT(1) NOT NULL, qualite VARCHAR(255) DEFAULT NULL, conserve_une_activite TINYINT(1) NOT NULL, pharmacien TINYINT(1) NOT NULL, bilogiste TINYINT(1) NOT NULL, autre_regime_assurance_maladie VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_A923CB437A0AA763 (personne_regime_travailleur_non_salarie_id), INDEX IDX_A923CB4350A550A7 (regime_assurance_maladie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, region_id INT DEFAULT NULL, departement VARCHAR(255) NOT NULL, INDEX IDX_C1765B6398260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE details_origine_fonds (id INT AUTO_INCREMENT NOT NULL, precedent_exploitant_id INT DEFAULT NULL, loueur_fonds_id INT DEFAULT NULL, fond_artisanal TINYINT(1) NOT NULL, achat_cadre_plan_cession TINYINT(1) NOT NULL, date_parution_annonce_legale DATE DEFAULT NULL, titre_support VARCHAR(255) DEFAULT NULL, date_debut_contrat DATE DEFAULT NULL, date_fin_contrat DATE DEFAULT NULL, renouvellement_par_tacite_reconduction TINYINT(1) NOT NULL, autre_precise VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_50AFEF49CDB3C8C9 (precedent_exploitant_id), UNIQUE INDEX UNIQ_50AFEF4918E51CC4 (loueur_fonds_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devise (id INT AUTO_INCREMENT NOT NULL, devise VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dirigeant (id INT AUTO_INCREMENT NOT NULL, personne_dirigeant_id INT DEFAULT NULL, representant_permanent_id INT DEFAULT NULL, qualite_dirigeant_id INT DEFAULT NULL, nouveau_representant_permanent TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_BEC71E71FE58598A (personne_dirigeant_id), UNIQUE INDEX UNIQ_BEC71E719028A5E1 (representant_permanent_id), INDEX IDX_BEC71E71DA28C04D (qualite_dirigeant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, statut_constitutif VARCHAR(255) NOT NULL, attestation_depot_fonds VARCHAR(255) DEFAULT NULL, liste_souscripteurs VARCHAR(255) DEFAULT NULL, nomination_dirigeant VARCHAR(255) DEFAULT NULL, autre_nomination VARCHAR(255) DEFAULT NULL, rapport_commisaire_au_compte VARCHAR(255) DEFAULT NULL, acte_complementaire VARCHAR(255) DEFAULT NULL, attestation_parution_constitution VARCHAR(255) DEFAULT NULL, attestation_sur_honneur VARCHAR(255) DEFAULT NULL, copie_piece_identite VARCHAR(255) DEFAULT NULL, justificatif_jouissance_locaux VARCHAR(255) DEFAULT NULL, copie_autorisation_diplome VARCHAR(255) DEFAULT NULL, justificatif_identite_declarant VARCHAR(255) DEFAULT NULL, piece_justificative_complementaire VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE en_qualite_de (id INT AUTO_INCREMENT NOT NULL, enqualite_de VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat_civil (id INT AUTO_INCREMENT NOT NULL, arrondissement_naissance_id INT DEFAULT NULL, commune_id INT DEFAULT NULL, nationalite_id INT DEFAULT NULL, pays_naissance_id INT DEFAULT NULL, nom_naissance VARCHAR(255) NOT NULL, nom_usage VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, date_naissance DATE NOT NULL, INDEX IDX_B84E87CF61717CF0 (arrondissement_naissance_id), INDEX IDX_B84E87CF131A4F72 (commune_id), INDEX IDX_B84E87CF1B063272 (nationalite_id), INDEX IDX_B84E87CF30C71503 (pays_naissance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forme_juridique (id INT AUTO_INCREMENT NOT NULL, type_societe_id INT DEFAULT NULL, forme_juridique VARCHAR(255) NOT NULL, sigle VARCHAR(255) DEFAULT NULL, INDEX IDX_15992E6E1F4A326 (type_societe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE greffe_immatriculation (id INT AUTO_INCREMENT NOT NULL, greffe_immatriculation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imposition_sur_benefice (id INT AUTO_INCREMENT NOT NULL, imposition_sur_benefice VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieu_exercice_activite (id INT AUTO_INCREMENT NOT NULL, adresse_etablissement_id INT DEFAULT NULL, lieu_exercice_activite VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_2F801330F16ECCC1 (adresse_etablissement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mode_paiement (id INT AUTO_INCREMENT NOT NULL, mode_paiement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nationalite (id INT AUTO_INCREMENT NOT NULL, nationalite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE option_particuliere_benefice (id INT AUTO_INCREMENT NOT NULL, option_particuliere_benefice VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE option_particuliere_matiere_tva (id INT AUTO_INCREMENT NOT NULL, option_particuliere_matiere_tva VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE origine_fonds (id INT AUTO_INCREMENT NOT NULL, origine_fonds VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, pays VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, etat_civil_id INT DEFAULT NULL, adresse_id INT DEFAULT NULL, greffe_immaatriculation_id INT DEFAULT NULL, type_personne_id INT DEFAULT NULL, numero_unique_identification VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_FCEC9EF191476EE (etat_civil_id), UNIQUE INDEX UNIQ_FCEC9EF4DE7DC5C (adresse_id), INDEX IDX_FCEC9EF739A4E68 (greffe_immaatriculation_id), INDEX IDX_FCEC9EFE9020683 (type_personne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qualite_dirigeant (id INT AUTO_INCREMENT NOT NULL, qualite_dirigeant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE regime_assurance_maladie (id INT AUTO_INCREMENT NOT NULL, regime_assurance_maladie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE regime_imposition_matiere_tva (id INT AUTO_INCREMENT NOT NULL, regime_imposition_matiere_tva VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, region VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secteur_activite (id INT AUTO_INCREMENT NOT NULL, secteur_activite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE siege_social (id INT AUTO_INCREMENT NOT NULL, adresse_siege_social_id INT DEFAULT NULL, domiciliation_provisoire TINYINT(1) NOT NULL, domiciliation_entreprise TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8161692AB475CAF (adresse_siege_social_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE societe (id INT AUTO_INCREMENT NOT NULL, forme_juridique_id INT NOT NULL, declaration_relative_societe_id INT DEFAULT NULL, siege_social_id INT DEFAULT NULL, declaration_relative_etablissement_active_id INT DEFAULT NULL, imposition_sur_benefice_id INT DEFAULT NULL, option_particuliere_benefice_id INT DEFAULT NULL, regime_imposition_matiere_tva_id INT DEFAULT NULL, option_particuliere_matiere_tva_id INT DEFAULT NULL, adresse_correspondance_id INT DEFAULT NULL, declarant_id INT DEFAULT NULL, document_id INT DEFAULT NULL, mode_paiement_id INT DEFAULT NULL, effectif_salarie_ou_assimile TINYINT(1) NOT NULL, telephone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, commentaire_destination_greffe LONGTEXT DEFAULT NULL, visualiser_formalite TINYINT(1) NOT NULL, paye TINYINT(1) NOT NULL, reference_formalite VARCHAR(255) DEFAULT NULL, enregistre_le DATETIME NOT NULL, societe_constitue_associe_unique TINYINT(1) NOT NULL, personne_morale_constitue_sans_activite TINYINT(1) NOT NULL, INDEX IDX_19653DBD9AEE68EB (forme_juridique_id), UNIQUE INDEX UNIQ_19653DBD4A219E9F (declaration_relative_societe_id), UNIQUE INDEX UNIQ_19653DBDDD1187A7 (siege_social_id), UNIQUE INDEX UNIQ_19653DBD99CE4BF8 (declaration_relative_etablissement_active_id), INDEX IDX_19653DBDF15FE02C (imposition_sur_benefice_id), INDEX IDX_19653DBDD3A1C6AD (option_particuliere_benefice_id), INDEX IDX_19653DBDF4D4612B (regime_imposition_matiere_tva_id), INDEX IDX_19653DBD465330FC (option_particuliere_matiere_tva_id), UNIQUE INDEX UNIQ_19653DBD28ABA098 (adresse_correspondance_id), UNIQUE INDEX UNIQ_19653DBDEC439BC (declarant_id), UNIQUE INDEX UNIQ_19653DBDC33F7837 (document_id), INDEX IDX_19653DBD438F5B63 (mode_paiement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sondage (id INT AUTO_INCREMENT NOT NULL, sondage VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_activite_principale (id INT AUTO_INCREMENT NOT NULL, type_activite_principale VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_personne (id INT AUTO_INCREMENT NOT NULL, type_personne VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_societe (id INT AUTO_INCREMENT NOT NULL, type_societe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_voie (id INT AUTO_INCREMENT NOT NULL, type_voie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B87555154735D33 FOREIGN KEY (type_activite_principale_id) REFERENCES type_activite_principale (id)');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B8755515D5B3CD06 FOREIGN KEY (activite_principale_id) REFERENCES activite_principale (id)');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F0816407DBC11 FOREIGN KEY (arrondissement_id) REFERENCES arrondissement (id)');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F0816131A4F72 FOREIGN KEY (commune_id) REFERENCES commune (id)');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F0816A84D4736 FOREIGN KEY (bis_ter_id) REFERENCES bis_ter (id)');
        $this->addSql('ALTER TABLE arrondissement ADD CONSTRAINT FK_3A3B64C4CCF9E01E FOREIGN KEY (departement_id) REFERENCES departement (id)');
        $this->addSql('ALTER TABLE beneficiaire ADD CONSTRAINT FK_B140D80239A34E74 FOREIGN KEY (dirigeant_actuel_id) REFERENCES dirigeant (id)');
        $this->addSql('ALTER TABLE beneficiaire ADD CONSTRAINT FK_B140D802E5776DEA FOREIGN KEY (autre_dirigeant_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE beneficiaire ADD CONSTRAINT FK_B140D802FCF77503 FOREIGN KEY (societe_id) REFERENCES societe (id)');
        $this->addSql('ALTER TABLE declarant ADD CONSTRAINT FK_3A829771F5BD7CB1 FOREIGN KEY (en_qualite_de_id) REFERENCES en_qualite_de (id)');
        $this->addSql('ALTER TABLE declaration_relative_etablissement_active ADD CONSTRAINT FK_610458D4CE7DE23D FOREIGN KEY (lieu_exercice_activite_id) REFERENCES lieu_exercice_activite (id)');
        $this->addSql('ALTER TABLE declaration_relative_etablissement_active ADD CONSTRAINT FK_610458D49B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE declaration_relative_societe ADD CONSTRAINT FK_4CB70262F4445056 FOREIGN KEY (devise_id) REFERENCES devise (id)');
        $this->addSql('ALTER TABLE declaration_volet_social_tns ADD CONSTRAINT FK_A923CB437A0AA763 FOREIGN KEY (personne_regime_travailleur_non_salarie_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE declaration_volet_social_tns ADD CONSTRAINT FK_A923CB4350A550A7 FOREIGN KEY (regime_assurance_maladie_id) REFERENCES regime_assurance_maladie (id)');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B6398260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE details_origine_fonds ADD CONSTRAINT FK_50AFEF49CDB3C8C9 FOREIGN KEY (precedent_exploitant_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE details_origine_fonds ADD CONSTRAINT FK_50AFEF4918E51CC4 FOREIGN KEY (loueur_fonds_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE dirigeant ADD CONSTRAINT FK_BEC71E71FE58598A FOREIGN KEY (personne_dirigeant_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE dirigeant ADD CONSTRAINT FK_BEC71E719028A5E1 FOREIGN KEY (representant_permanent_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE dirigeant ADD CONSTRAINT FK_BEC71E71DA28C04D FOREIGN KEY (qualite_dirigeant_id) REFERENCES qualite_dirigeant (id)');
        $this->addSql('ALTER TABLE etat_civil ADD CONSTRAINT FK_B84E87CF61717CF0 FOREIGN KEY (arrondissement_naissance_id) REFERENCES arrondissement (id)');
        $this->addSql('ALTER TABLE etat_civil ADD CONSTRAINT FK_B84E87CF131A4F72 FOREIGN KEY (commune_id) REFERENCES commune (id)');
        $this->addSql('ALTER TABLE etat_civil ADD CONSTRAINT FK_B84E87CF1B063272 FOREIGN KEY (nationalite_id) REFERENCES nationalite (id)');
        $this->addSql('ALTER TABLE etat_civil ADD CONSTRAINT FK_B84E87CF30C71503 FOREIGN KEY (pays_naissance_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE forme_juridique ADD CONSTRAINT FK_15992E6E1F4A326 FOREIGN KEY (type_societe_id) REFERENCES type_societe (id)');
        $this->addSql('ALTER TABLE lieu_exercice_activite ADD CONSTRAINT FK_2F801330F16ECCC1 FOREIGN KEY (adresse_etablissement_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF191476EE FOREIGN KEY (etat_civil_id) REFERENCES etat_civil (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF4DE7DC5C FOREIGN KEY (adresse_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF739A4E68 FOREIGN KEY (greffe_immaatriculation_id) REFERENCES greffe_immatriculation (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EFE9020683 FOREIGN KEY (type_personne_id) REFERENCES type_personne (id)');
        $this->addSql('ALTER TABLE siege_social ADD CONSTRAINT FK_8161692AB475CAF FOREIGN KEY (adresse_siege_social_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBD9AEE68EB FOREIGN KEY (forme_juridique_id) REFERENCES forme_juridique (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBD4A219E9F FOREIGN KEY (declaration_relative_societe_id) REFERENCES declaration_relative_societe (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBDDD1187A7 FOREIGN KEY (siege_social_id) REFERENCES siege_social (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBD99CE4BF8 FOREIGN KEY (declaration_relative_etablissement_active_id) REFERENCES declaration_relative_etablissement_active (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBDF15FE02C FOREIGN KEY (imposition_sur_benefice_id) REFERENCES imposition_sur_benefice (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBDD3A1C6AD FOREIGN KEY (option_particuliere_benefice_id) REFERENCES option_particuliere_benefice (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBDF4D4612B FOREIGN KEY (regime_imposition_matiere_tva_id) REFERENCES regime_imposition_matiere_tva (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBD465330FC FOREIGN KEY (option_particuliere_matiere_tva_id) REFERENCES option_particuliere_matiere_tva (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBD28ABA098 FOREIGN KEY (adresse_correspondance_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBDEC439BC FOREIGN KEY (declarant_id) REFERENCES declarant (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBDC33F7837 FOREIGN KEY (document_id) REFERENCES document (id)');
        $this->addSql('ALTER TABLE societe ADD CONSTRAINT FK_19653DBD438F5B63 FOREIGN KEY (mode_paiement_id) REFERENCES mode_paiement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE declaration_relative_etablissement_active DROP FOREIGN KEY FK_610458D49B0F88B1');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B8755515D5B3CD06');
        $this->addSql('ALTER TABLE lieu_exercice_activite DROP FOREIGN KEY FK_2F801330F16ECCC1');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF4DE7DC5C');
        $this->addSql('ALTER TABLE siege_social DROP FOREIGN KEY FK_8161692AB475CAF');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBD28ABA098');
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F0816407DBC11');
        $this->addSql('ALTER TABLE etat_civil DROP FOREIGN KEY FK_B84E87CF61717CF0');
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F0816A84D4736');
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F0816131A4F72');
        $this->addSql('ALTER TABLE etat_civil DROP FOREIGN KEY FK_B84E87CF131A4F72');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBDEC439BC');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBD99CE4BF8');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBD4A219E9F');
        $this->addSql('ALTER TABLE arrondissement DROP FOREIGN KEY FK_3A3B64C4CCF9E01E');
        $this->addSql('ALTER TABLE declaration_relative_societe DROP FOREIGN KEY FK_4CB70262F4445056');
        $this->addSql('ALTER TABLE beneficiaire DROP FOREIGN KEY FK_B140D80239A34E74');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBDC33F7837');
        $this->addSql('ALTER TABLE declarant DROP FOREIGN KEY FK_3A829771F5BD7CB1');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF191476EE');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBD9AEE68EB');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF739A4E68');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBDF15FE02C');
        $this->addSql('ALTER TABLE declaration_relative_etablissement_active DROP FOREIGN KEY FK_610458D4CE7DE23D');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBD438F5B63');
        $this->addSql('ALTER TABLE etat_civil DROP FOREIGN KEY FK_B84E87CF1B063272');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBDD3A1C6AD');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBD465330FC');
        $this->addSql('ALTER TABLE etat_civil DROP FOREIGN KEY FK_B84E87CF30C71503');
        $this->addSql('ALTER TABLE beneficiaire DROP FOREIGN KEY FK_B140D802E5776DEA');
        $this->addSql('ALTER TABLE declaration_volet_social_tns DROP FOREIGN KEY FK_A923CB437A0AA763');
        $this->addSql('ALTER TABLE details_origine_fonds DROP FOREIGN KEY FK_50AFEF49CDB3C8C9');
        $this->addSql('ALTER TABLE details_origine_fonds DROP FOREIGN KEY FK_50AFEF4918E51CC4');
        $this->addSql('ALTER TABLE dirigeant DROP FOREIGN KEY FK_BEC71E71FE58598A');
        $this->addSql('ALTER TABLE dirigeant DROP FOREIGN KEY FK_BEC71E719028A5E1');
        $this->addSql('ALTER TABLE dirigeant DROP FOREIGN KEY FK_BEC71E71DA28C04D');
        $this->addSql('ALTER TABLE declaration_volet_social_tns DROP FOREIGN KEY FK_A923CB4350A550A7');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBDF4D4612B');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B6398260155');
        $this->addSql('ALTER TABLE societe DROP FOREIGN KEY FK_19653DBDDD1187A7');
        $this->addSql('ALTER TABLE beneficiaire DROP FOREIGN KEY FK_B140D802FCF77503');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B87555154735D33');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EFE9020683');
        $this->addSql('ALTER TABLE forme_juridique DROP FOREIGN KEY FK_15992E6E1F4A326');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE activite_principale');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE arrondissement');
        $this->addSql('DROP TABLE beneficiaire');
        $this->addSql('DROP TABLE bis_ter');
        $this->addSql('DROP TABLE civilite');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE declarant');
        $this->addSql('DROP TABLE declaration_relative_etablissement_active');
        $this->addSql('DROP TABLE declaration_relative_societe');
        $this->addSql('DROP TABLE declaration_volet_social_tns');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE details_origine_fonds');
        $this->addSql('DROP TABLE devise');
        $this->addSql('DROP TABLE dirigeant');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE en_qualite_de');
        $this->addSql('DROP TABLE etat_civil');
        $this->addSql('DROP TABLE forme_juridique');
        $this->addSql('DROP TABLE greffe_immatriculation');
        $this->addSql('DROP TABLE imposition_sur_benefice');
        $this->addSql('DROP TABLE lieu_exercice_activite');
        $this->addSql('DROP TABLE mode_paiement');
        $this->addSql('DROP TABLE nationalite');
        $this->addSql('DROP TABLE option_particuliere_benefice');
        $this->addSql('DROP TABLE option_particuliere_matiere_tva');
        $this->addSql('DROP TABLE origine_fonds');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE qualite_dirigeant');
        $this->addSql('DROP TABLE regime_assurance_maladie');
        $this->addSql('DROP TABLE regime_imposition_matiere_tva');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE secteur_activite');
        $this->addSql('DROP TABLE siege_social');
        $this->addSql('DROP TABLE societe');
        $this->addSql('DROP TABLE sondage');
        $this->addSql('DROP TABLE type_activite_principale');
        $this->addSql('DROP TABLE type_personne');
        $this->addSql('DROP TABLE type_societe');
        $this->addSql('DROP TABLE type_voie');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
