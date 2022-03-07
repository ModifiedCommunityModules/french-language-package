<?php
$prefix = 'MODULE_ORDER_TOTAL_BILLPAY_';

  // config options
  define($prefix.'FEE_TITLE', 'Suppl&eacute;ment de facture (BillPay)');
  define($prefix.'FEE_DESCRIPTION', 'Suppl&eacute;ment pour l\'utilisation de ce mode de paiement');

  define($prefix.'FEE_STATUS_TITLE','Activ&eacute;?');
  define($prefix.'FEE_STATUS_DESC','');

  define($prefix.'FEE_SORT_ORDER_TITLE','Ordre de tri');
  define($prefix.'FEE_SORT_ORDER_DESC','');

  define($prefix.'FEE_TYPE_TITLE','Type de frais');
  define($prefix.'FEE_TYPE_DESC','Les frais peuvent &ecirc;tre un montant fixe (fest) ou un pourcentage d\'une commande (prozentual).');

  define($prefix.'FEE_PERCENT_TITLE','Pourcentage');
  define($prefix.'FEE_PERCENT_DESC','Entrez les taux en pourcentage pour chaque pays (c\'est-&agrave;-dire DE:5;CH:7).');

  define($prefix.'FEE_VALUE_TITLE','Montant fixe');
  define($prefix.'FEE_VALUE_DESC','Indiquez un montant fixe pour chaque pays (c\'est-&agrave;-dire DE:5;CH:7).');

  define($prefix.'FEE_GRADUATE_TITLE','Echelonnement');
  define($prefix.'FEE_GRADUATE_DESC','Saisissez ici l\'&eacute;chelonnement des frais sous la forme {somme de la facture}={frais nets};{somme de la facture}={frais nets} ;. Ce bar&egrave;me est appliqu&eacute; au total de la facture si le type de taxe "Bar&egrave;me" est activ&eacute;.');

  define($prefix.'FEE_TAX_CLASS_TITLE','Classe d\'imp&ocirc;t');
  define($prefix.'FEE_TAX_CLASS_DESC','Choisissez une classe d\'imp&ocirc;t pour les frais');

  // display
  define($prefix.'FEE_FROM_TOTAL', 'du montant de la commande');
