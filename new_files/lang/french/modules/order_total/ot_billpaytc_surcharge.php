<?php
/** no longer used */
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TITLE', 'Calcul des frais pour les achats &agrave; temp&eacute;rament (BillPay)');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_DESCRIPTION', 'Calcul des frais pour les commandes avec le mode de paiement achat &agrave; temp&eacute;rament via BillPay');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_STATUS_TITLE','Calcul des frais de location-vente (BillPay)');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_STATUS_DESC','Attention ! D&egrave;s que ce module de r&eacute;sum&eacute; est d&eacute;sactiv&eacute;, l\'achat &agrave; temp&eacute;rament avec BillPay ne fonctionne plus ! Veuillez ne d&eacute;sactiver ce module que si vous ne souhaitez pas proposer l\'achat &agrave; temp&eacute;rament via BillPay !');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_SORT_ORDER_TITLE','Ordre de tri');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_SORT_ORDER_DESC','Ordre d\'affichage');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TAX_CLASS_TITLE','Classe d\'imp&ocirc;t');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TAX_CLASS_DESC','S&eacute;lectionnez une cat&eacute;gorie d\'imp&ocirc;t.');

  require_once('ot_billpay_fee.php');

  $prefix = 'MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_';
  $parent = 'MODULE_ORDER_TOTAL_BILLPAY_';

  define($prefix.'FEE_TITLE', 'Calcul de la taxe pour l\'achat &agrave; temp&eacute;rament (BillPay)');
  define($prefix.'FEE_DESCRIPTION', 'Calcul des frais pour les commandes avec le mode de paiement achat en plusieurs fois via BillPay');

  // config options
  $fields = array(
      'FEE_STATUS_TITLE', 'FEE_STATUS_DESC', 'FEE_SORT_ORDER_TITLE', 'FEE_SORT_ORDER_DESC',
      'FEE_TYPE_TITLE', 'FEE_TYPE_DESC', 'FEE_PERCENT_TITLE', 'FEE_PERCENT_DESC', 'FEE_VALUE_TITLE', 'FEE_VALUE_DESC',
      'FEE_TAX_CLASS_TITLE', 'FEE_TAX_CLASS_DESC',
      'FEE_FROM_TOTAL'
  );
  foreach ($fields as $field)
  {
      defined($prefix.$field) OR define($prefix.$field, constant($parent.$field));
  }

  // new
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE', 'Frais de transaction');
  defined('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE') OR define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE', 'Suppl&eacute;ment');
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL', 'Total des achats');
  
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1', 'y compris');
  defined('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2') OR define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2', 'TVA.');

