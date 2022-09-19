<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\Rubrique;
use App\Entity\Fournisseur;
use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LotProduit extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $service01 = new Service();
        $service01->setServNom('Commercial');
        $service01->setServMail('contact@vgreen.fr');
        $service01->setServTelephone('02 86 84 00 24');

        $service02 = new Service();
        $service02->setServNom('Après-vente');
        $service02->setServMail('service@vgreen.fr');
        $service02->setServTelephone('02 86 84 00 32');

        $service03 = new Service();
        $service03->setServNom('Comptabilité');
        $service03->setServMail('compta@vgreen.fr');
        $service03->setServTelephone('02 86 84 00 08');

        $service04 = new Service();
        $service04->setServNom('Achat');
        $service04->setServMail('achat@vgreen.fr');
        $service04->setServTelephone('02 86 84 00 01');

        $fournisseur01 = new Fournisseur();
        $fournisseur01->setFourniSociete('Gibson Brands, Inc.');
        $fournisseur01->setFourniNom('');
        $fournisseur01->setFourniPrenom('');
        $fournisseur01->setFourniMail('service@gibson.com');
        $fournisseur01->setFourniTelephone('');
        $fournisseur01->setFourniAdresse('209 10th Ave South Suite 460');
        $fournisseur01->setFourniCp('TN 37203');
        $fournisseur01->setFourniVille('Nashville');
        $fournisseur01->setFourniPays('United States');
        $fournisseur01->setFourniImportateur(false);
        $fournisseur01->setFourniConstructeur(true);
        $fournisseur01->setFourniService($service04);

        $fournisseur02 = new Fournisseur();
        $fournisseur02->setFourniSociete('Fender Musical Instruments Europe ltd.');
        $fournisseur02->setFourniNom('');
        $fournisseur02->setFourniPrenom('');
        $fournisseur02->setFourniMail('contactemea@fender.com');
        $fournisseur02->setFourniTelephone('0333 200 8765 ');
        $fournisseur02->setFourniAdresse('Leo House Birches Industrial Estate');
        $fournisseur02->setFourniCp('RH19 1QZ');
        $fournisseur02->setFourniVille('East Grinstead');
        $fournisseur02->setFourniPays('United Kingdom');
        $fournisseur02->setFourniImportateur(true);
        $fournisseur02->setFourniConstructeur(false);
        $fournisseur02->setFourniService($service04);

        $fournisseur03 = new Fournisseur();
        $fournisseur03->setFourniSociete('Hoshino Europe B.V.');
        $fournisseur03->setFourniNom('');
        $fournisseur03->setFourniPrenom('');
        $fournisseur03->setFourniMail('info@hoshinoeurope.com');
        $fournisseur03->setFourniTelephone('+31 (0)297 567788');
        $fournisseur03->setFourniAdresse('Constructieweg 7');
        $fournisseur03->setFourniCp('3641 SB');
        $fournisseur03->setFourniVille('Mijdrecht');
        $fournisseur03->setFourniPays('The Netherlands');
        $fournisseur03->setFourniImportateur(false);
        $fournisseur03->setFourniConstructeur(true);
        $fournisseur03->setFourniService($service04);

        $rubriqueA = new Rubrique();
        $rubriqueA->setRubriqNom("Guitares");

        $rubriqueB = new Rubrique();
        $rubriqueB->setRubriqNom("Amplis");

        $rubriqueC = new Rubrique();
        $rubriqueC->setRubriqNom("Effets");

        $rubriqueD = new Rubrique();
        $rubriqueD->setRubriqNom("Percussions");

        $rubriqueE = new Rubrique();
        $rubriqueE->setRubriqNom("Claviers");

        $rubriqueF = new Rubrique();
        $rubriqueF->setRubriqNom("Enregistrement");

        $rubriqueG = new Rubrique();
        $rubriqueG->setRubriqNom("Sonorisation");

        $rubriqueH = new Rubrique();
        $rubriqueH->setRubriqNom("Librairie");

        $rubriqueI = new Rubrique();
        $rubriqueI->setRubriqNom("Vents");

        $rubriqueJ = new Rubrique();
        $rubriqueJ->setRubriqNom("Quatuor");

        $rubriqueK = new Rubrique();
        $rubriqueK->setRubriqNom("Éveil");

        $rubriqueA1 = new Rubrique();
        $rubriqueA1->setRubriqNom("Guitares Électriques");
        $rubriqueA1->setRubriqParente($rubriqueA);

        $rubriqueA2 = new Rubrique();
        $rubriqueA2->setRubriqNom("Guitares Électro-Acoustiques");
        $rubriqueA2->setRubriqParente($rubriqueA);

        $rubriqueA3 = new Rubrique();
        $rubriqueA3->setRubriqNom("Guitares Acoustiques");
        $rubriqueA3->setRubriqParente($rubriqueA);

        $rubriqueA4 = new Rubrique();
        $rubriqueA4->setRubriqNom("Basses Électrique");
        $rubriqueA4->setRubriqParente($rubriqueA);

        $rubriqueA5 = new Rubrique();
        $rubriqueA5->setRubriqNom("Basses Électros et Acoustiques");
        $rubriqueA5->setRubriqParente($rubriqueA);

        $rubriqueA6 = new Rubrique();
        $rubriqueA6->setRubriqNom("Instruments Divers");
        $rubriqueA6->setRubriqParente($rubriqueA);

        $rubriqueA61 = new Rubrique();
        $rubriqueA61->setRubriqNom("Guitares à Résonateur");
        $rubriqueA61->setRubriqParente($rubriqueA6);

        $rubriqueA62 = new Rubrique();
        $rubriqueA62->setRubriqNom("Guitares Hawaïenne et Lap Steel");
        $rubriqueA62->setRubriqParente($rubriqueA6);

        $rubriqueA63 = new Rubrique();
        $rubriqueA63->setRubriqNom("Banjos");
        $rubriqueA63->setRubriqParente($rubriqueA6);

        $rubriqueA64 = new Rubrique();
        $rubriqueA64->setRubriqNom("Mandolines");
        $rubriqueA64->setRubriqParente($rubriqueA6);

        $rubriqueA65 = new Rubrique();
        $rubriqueA65->setRubriqNom("Ouds & Luths");
        $rubriqueA65->setRubriqParente($rubriqueA6);

        $rubriqueA66 = new Rubrique();
        $rubriqueA66->setRubriqNom("Ukulélés");
        $rubriqueA66->setRubriqParente($rubriqueA6);

        $rubriqueA67 = new Rubrique();
        $rubriqueA67->setRubriqNom("Balalaïka");
        $rubriqueA67->setRubriqParente($rubriqueA6);

        $rubriqueA68 = new Rubrique();
        $rubriqueA68->setRubriqNom("Kora");
        $rubriqueA68->setRubriqParente($rubriqueA6);

        $rubriqueA7 = new Rubrique();
        $rubriqueA7->setRubriqNom("Accessoires");
        $rubriqueA7->setRubriqParente($rubriqueA);

        $produit001 = new Produit();
        $produit001->setProdModele("Lucille");
        $produit001->setProdMarque("Épiphone");
        $produit001->setProdFinition("Noire");
        $produit001->setProdLibCourt("Lucille ...");
        $produit001->setProdLibLong("La première Lucille serait une Gibson L-30 payée une poignée de dollars. Pendant un concert en 1949 dans l’Arkansas, le poêle à bois chauffant l’établissement se renverse pendant une bagarre, provoquant un incendie. BB King s’enfuit dehors en laissant sa guitare à l’intérieur. Il se ravise alors pour récupérer sa guitare malgré les flammes de l’incendie. Il apprendra plus tard que la baggare avait éclatée à cause d’une fille nommée Lucille.");
        $produit001->setProdPhoto("G_E_Epiphone_Lucille.JPG");
        $produit001->setProdPrix("3000");
        $produit001->setProdStock(1);
        $produit001->setProdReference("G_E_Epiphone_Lucille");
        $produit001->setProdActif(true);
        $produit001->setProdFournisseur($fournisseur01);
        $produit001->setProdRubrique($rubriqueA1);

        $produit002 = new Produit();
        $produit002->setProdModele("Stratocaster");
        $produit002->setProdMarque("Fender");
        $produit002->setProdFinition("Noire");
        $produit002->setProdLibCourt("La Strat ...");
        $produit002->setProdLibLong("La Stratocaster, souvent surnommée Strat, est un modèle de guitare électrique produit par la marque américaine Fender. Elle apparait en avril 1954 à la suite de la Telecaster, sans la remplacer, ces deux instruments demeurant au catalogue jusqu'à nos jours. C'est un des modèles les plus répandus au monde, et sa silhouette est devenue l'icône même de la guitare électrique.");
        $produit002->setProdPhoto("G_E_Fender_ST_Noire.JPG");
        $produit002->setProdPrix("1200");
        $produit002->setProdStock(15);
        $produit002->setProdReference("G_E_Fender_ST_Noire");
        $produit002->setProdActif(true);
        $produit002->setProdFournisseur($fournisseur02);
        $produit002->setProdRubrique($rubriqueA1);

        $produit003 = new Produit();
        $produit003->setProdModele("JS-1000");
        $produit003->setProdMarque("Ibanez");
        $produit003->setProdFinition("Chrome");
        $produit003->setProdLibCourt("Joe Satriani model ...");
        $produit003->setProdLibLong("To honor the world-renowned Joe Satriani Signature Series, the Ibanez R&D team worked closely with Joe to develop a finish that was worthy of Joe's approval. Each and every JS2GD will have passed stringent Ibanez quality control standards, however due to the unique nature of this striking finish, some minor imperfections may be expected, are considered normal.");
        $produit003->setProdPhoto("G_E_Ibanez_JS.JPG");
        $produit003->setProdPrix("5800");
        $produit003->setProdStock(5);
        $produit003->setProdReference("G_E_Ibanez_JS");
        $produit003->setProdActif(true);
        $produit003->setProdFournisseur($fournisseur03);
        $produit003->setProdRubrique($rubriqueA1);

        $manager->persist($service01);
        $manager->persist($service02);
        $manager->persist($service03);
        $manager->persist($service04);
        $manager->persist($fournisseur01);
        $manager->persist($fournisseur02);
        $manager->persist($fournisseur03);
        $manager->persist($produit001);
        $manager->persist($produit002);
        $manager->persist($produit003);

        $manager->persist($rubriqueA);
        $manager->persist($rubriqueB);
        $manager->persist($rubriqueC);
        $manager->persist($rubriqueD);
        $manager->persist($rubriqueE);
        $manager->persist($rubriqueF);
        $manager->persist($rubriqueG);
        $manager->persist($rubriqueH);
        $manager->persist($rubriqueI);
        $manager->persist($rubriqueJ);
        $manager->persist($rubriqueK);
        $manager->persist($rubriqueA1);
        $manager->persist($rubriqueA2);
        $manager->persist($rubriqueA3);
        $manager->persist($rubriqueA4);
        $manager->persist($rubriqueA5);
        $manager->persist($rubriqueA6);
        $manager->persist($rubriqueA61);
        $manager->persist($rubriqueA62);
        $manager->persist($rubriqueA63);
        $manager->persist($rubriqueA64);
        $manager->persist($rubriqueA65);
        $manager->persist($rubriqueA66);
        $manager->persist($rubriqueA67);
        $manager->persist($rubriqueA68);
        $manager->persist($rubriqueA7);

        $manager->flush();
    }
}
