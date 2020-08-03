<?php
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'Virement bancaire standard de l\'UE');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION', 
          '<br />Le moyen de paiement le moins cher et le plus simple au sein de l\'UE est le virement bancaire standard de l\'UE utilisant l\'IBAN et le BIC.' .
          '<br />Veuillez utiliser les informations suivantes pour transf&eacute;rer la valeur totale de votre commande:<br />' .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Nom de la banque: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH')  ? '<br />B&eacute;n&eacute;ficiaire: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM')  ? '<br />Code de la banque: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM')  ? '<br />Num&eacute;ro de compte: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') .
          '<br />Objet du paiement: %s'.
          '<br /><br />Votre commande ne sera pas exp&eacute;di&eacute;e tant que nous n\'aurons pas re&ccedil;u votre paiement sur le compte ci-dessus.<br />');
  if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Veuillez transf&eacute;rer le montant total de la facture sur notre compte bancaire. Vous recevrez les donn&eacute;es du compte lors de la derni&egrave;re &eacute;tape de la commande.');
  } else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Veuillez transf&eacute;rer le montant total de la facture sur notre compte bancaire. Vous recevrez les donn&eacute;es du compte par courrier &eacute;lectronique lorsque votre commande aura &eacute;t&eacute; confirm&eacute;e.');
  }
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Autoriser le paiement par virement bancaire');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', 'Voulez-vous accepter les paiements par virement bancaire?');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'B&eacute;n&eacute;ficiaire');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'Le compte du b&eacute;n&eacute;ficiaire.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Nom de la banque');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'Le nom complet de votre banque');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_TITLE', 'Code de la banque');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_DESC', 'Le code bancaire de votre compte.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_TITLE', 'Num&eacute;ro de compte bancaire');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_DESC', 'Votre num&eacute;ro de compte.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Compte bancaire IBAN');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'Num&eacute;ro de compte international <br />(demandez &agrave; votre banque si vous ne le connaissez pas)');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Banque Bic');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'Identifiant bancaire international.<br />(demandez &agrave; votre banque si vous ne la connaissez pas)');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'Module Trier l\'ordre d\'affichage');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Trier l\'ordre d\'affichage. Le plus bas est affich&eacute; en premier.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Zones autoris&eacute;es');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module. (par exemple, AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Zone de paiement');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Si une zone est s&eacute;lectionn&eacute;e, n\'activez ce mode de paiement que pour cette zone.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'D&eacute;finir le statut de la commande');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'R&eacute;gler le statut des commandes effectu&eacute;es avec ce module de paiement &agrave; cette valeur.');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Afficher les donn&eacute;es bancaires');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', 'Afficher les donn&eacute;es bancaires sur le succ&egrave;s de la caisse?');
?>