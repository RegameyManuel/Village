 Dictionnaire des données simplifiées

          adr_id                            INT         
          adr_adresse                       VARCHAR(200)
          adr_cp                            VARCHAR(5)  
          adr_ville                         VARCHAR(50) 
          adr_region                        VARCHAR(50) 
          adr_pays                          VARCHAR(50)
          * adr_facturation                 BOOLEAN
          * adr_livraison                   BOOLEAN
    
          
          /******************************** obsolete */
          loc_fourni_id                     INT         
          loc_cli_id                        INT         
          loc_adr_id                        INT         
          loc_adr_facturation               BOOLEAN
          loc_adr_livraison                 BOOLEAN
          /*******************************************/
    
          fourni_id                         INT         
          fourni_societe                    VARCHAR(50) 
          fourni_nom                        VARCHAR(50) 
          fourni_prenom                     VARCHAR(50) 
          fourni_telephone                  VARCHAR(20) 
          fourni_mail                       VARCHAR(50)
          * fourni_adresse                  VARCHAR(255)
          * fourni_cp                       VARCHAR(16)  
          * fourni_ville                    VARCHAR(50) 
          * fourni_region                   VARCHAR(50) 
          * fourni_pays                     VARCHAR(50)       
          fourni_constructeur               BOOLEAN     
          fourni_importateur                BOOLEAN     
          fourni_serv_id                    INT 
    
          serv_id                           INT         
          serv_nom                          VARCHAR(50) 
          serv_telephone                    VARCHAR(20) 
          serv_mail                         VARCHAR(50) 
    
          com_id                            INT         
          com_nom                           VARCHAR(50) 
          com_prenom                        VARCHAR(50) 
          com_telephone                     VARCHAR(20) 
          com_mail                          VARCHAR(50) 
          com_particulier                   BOOLEAN     
          com_serv_id                       INT   
    
          cli_id                            INT         
          cli_societe                       VARCHAR(50)
          cli_nom                           VARCHAR(50)
          cli_prenom                        VARCHAR(50)
          cli_telephone                     VARCHAR(20)
          cli_mail                          VARCHAR(50)
          cli_siret                         VARCHAR(50)
          cli_reference                     VARCHAR(50)
          cli_coefficient                   REAL
          cli_reduction                     REAL
          cli_com_id                        INT
    
          admin_prod_id                     INT 
          admin_serv_id                     INT 
          admin_rubriq_id                   INT 
          admin_droit                       BOOLEAN 
    
          prod_id                           INT 
          prod_marque                       VARCHAR(50) 
          prod_modele                       VARCHAR(50) 
          prod_finition                     VARCHAR(50) 
          prod_lib_court                    VARCHAR(50) 
          prod_lib_long                     VARCHAR(255) 
          prod_prix                         DECIMAL(7,2) 
          prod_photo                        VARCHAR(255) 
          prod_actif                        BOOLEAN
          prod_reference                    VARCHAR(50)
          prod_rubriq_id                    INT 
          prod_fourni_id                    INT 
    
          rubriq_id                         INT 
          rubriq_nom                        VARCHAR(50) 
          rubrique_id_1                     INT 
    
          detail_prod_id                    INT 
          detail_commande_id                INT 
          detail_qte                        INT 
          detail_prix                       DECIMAL(7,2) 
          detail_qte_livree                 INT
    
          commande_id                       INT 
          commande_partielle                BOOLEAN 
          commande_expediee                 BOOLEAN 
          commande_dt_paiement              DATE 
          commande_dt_expedition            DATE 
          commande_virement                 BOOLEAN 
          commande_cheque                   BOOLEAN 
          commande_valide                   BOOLEAN 
          commande_archive                  BOOLEAN 
          commande_cli_id                   INT 
    
          bl_id                             INT 
          bl_date                           DATE 
          bl_commande_id                    INT 
    
          fact_id                           INT 
          fact_date                         DATE 
          fact_sauvegarde                   VARCHAR(255)
          fact_commande_id                  INT 
          
          