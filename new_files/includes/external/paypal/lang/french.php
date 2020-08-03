<?php
/* -----------------------------------------------------------------------------------------
   $Id: english.php 12481 2019-12-11 17:44:08Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_ORDERS_HEADING' => 'D&eacute;tails de PayPal',
  'TEXT_PAYPAL_NO_INFORMATION' => 'pas de d&eacute;tails de paiement disponibles',
  
  // transaction
  'TEXT_PAYPAL_TRANSACTION' => 'D&eacute;tails du paiement',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_OWNER' => 'Propri&eacute;taire du compte:',
  'TEXT_PAYPAL_TRANSACTION_ADDRESS' => 'Adresse de livraison:',
  'TEXT_PAYPAL_TRANSACTION_METHOD' => 'Paiement:',
  'TEXT_PAYPAL_TRANSACTION_EMAIL' => 'Adresse &eacute;lectronique:',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_STATE' => '&Eacute;tat du compte:',
  'TEXT_PAYPAL_TRANSACTION_INTENT' => 'Intention:',
  'TEXT_PAYPAL_TRANSACTION_STATE' => 'Statut:',
  
  
  // transactions
  'TEXT_PAYPAL_TRANSACTIONS_STATUS' => 'Transaction',
  'TEXT_PAYPAL_TRANSACTIONS_PAYMENT' => 'Paiement:',
  'TEXT_PAYPAL_TRANSACTIONS_REASON' => 'Motif:',
  'TEXT_PAYPAL_TRANSACTIONS_STATE' => 'Statut:',
  'TEXT_PAYPAL_TRANSACTIONS_TOTAL' => 'Montant:',
  'TEXT_PAYPAL_TRANSACTIONS_VALID' => 'valable pour:',
  'TEXT_PAYPAL_TRANSACTIONS_ID' => 'ID:',
  
  
  // instruction
  'TEXT_PAYPAL_INSTRUCTIONS' => 'Mandat postal',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT' => 'Veuillez transf&eacute;rer le montant de %s au moins &agrave; %s sur le compte suivant:',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT_SHORT' => 'Veuillez transf&eacute;rer le montant de %s sur le compte suivant:',
  'TEXT_PAYPAL_INSTRUCTIONS_AMOUNT' => 'Montant:',
  'TEXT_PAYPAL_INSTRUCTIONS_REFERENCE' => 'Utilisation:',
  'TEXT_PAYPAL_INSTRUCTIONS_PAYDATE' => 'Payable &agrave;:',
  'TEXT_PAYPAL_INSTRUCTIONS_ACCOUNT' => 'Compte:',
  'TEXT_PAYPAL_INSTRUCTIONS_HOLDER' => 'Titulaire:',
  'TEXT_PAYPAL_INSTRUCTIONS_IBAN' => 'IBAN:',
  'TEXT_PAYPAL_INSTRUCTIONS_BIC' => 'BIC:',
  
  
  // refund
  'TEXT_PAYPAL_REFUND' => 'Remboursement',
  'TEXT_PAYPAL_REFUND_LEFT' => 'Montant des remboursements possibles: ',
  'TEXT_PAYPAL_REFUND_COMMENT' => 'Commentaire:<br />(127 caract &egrave;res maximum)',
  'TEXT_PAYPAL_REFUND_AMOUNT' => 'Montant:',
  'TEXT_PAYPAL_REFUND_SUBMIT' => 'Remboursement',
  
  
  // capture
  'TEXT_PAYPAL_CAPTURE' => 'Capture',
  'TEXT_PAYPAL_CAPTURE_LEFT' => 'Quantit&eacute; de captures possibles: ',
  'TEXT_PAYPAL_CAPTURE_IS_FINAL' => 'Capture finale:',
  'TEXT_PAYPAL_CAPTURE_AMOUNT' => 'Montant:',
  'TEXT_PAYPAL_CAPTURE_SUBMIT' => 'Capture',
  'TEXT_PAYPAL_CAPTURED' => 'Paiement saisi',
  
  
  // error
  'TEXT_PAYPAL_ERROR_AMOUNT' => 'Veuillez saisir un montant valide',
  
  
  // diverse
  'MODULE_PAYMENT_PAYPAL_TEXT_ORDER' => 'Votre commande &agrave; '.STORE_NAME,


  // status
  'TEXT_PAYPAL_NO_STATUS_CHANGE' => 'pas de changement de statut',
  
  // template
  'TEXT_PAYPALINSTALLMENT_HEADING' => 'Payez facilement par versements mensuels',
  'TEXT_PAYPALINSTALLMENT_DESCRIPTION' => 'Vous pouvez choisir votre paiement &eacute;chelonn&eacute; et le plan de financement appropri&eacute; dans le cadre du processus de commande. Votre demande est enti&egrave;rement en ligne et sera compl&eacute;t&eacute;e en quelques &eacute;tapes ici dans la boutique.',

  'TEXT_PAYPALINSTALLMENT_RATING_PLAN' => 'Financement &agrave; partir de %s avec des %s par versements aliment&eacute;s par PayPal',
  'TEXT_PAYPALINSTALLMENT_RATING_PLAN_SHORT' => 'Financement &agrave; partir de %s dans le mois avec',

  'TEXT_PAYPALINSTALLMENT_LEGAL' => 'Exemple repr&eacute;sentatif selon &sect; 6a PAngV',
  'TEXT_PAYPALINSTALLMENT_NOMINAL_RATE' => 'Taux nominal',
  'TEXT_PAYPALINSTALLMENT_APR' => 'Taux d\'int&eacute;r&ecirc;t effectif',
  'TEXT_PAYPALINSTALLMENT_TOTAL_COST' => 'Montant total',
  'TEXT_PAYPALINSTALLMENT_TOTAL_NETTO' => 'Montant net du pr&ecirc;t',
  'TEXT_PAYPALINSTALLMENT_TOTAL_INTEREST' => 'Int&eacute;r&ecirc;t',
  'TEXT_PAYPALINSTALLMENT_MONTHLY_PAYMENT' => 'Versements mensuels de chaque',

  'TEXT_PAYPALINSTALLMENT_NOTICE' => 'Financement disponible de %s &agrave; %s de la valeur du panier avec',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PRODUCT' => 'Vous pouvez &eacute;galement financer ce produit!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_CART' => 'Vous pouvez &eacute;galement financer ce produit!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PAYMENT' => 'Vous pouvez &eacute;galement financer cette commande!',
  
  'TEXT_PAYPALINSTALLMENT_CREDITOR' => 'Emprunteur',
  'TEXT_PAYPALINSTALLMENT_INFO_LINK' => 'Informations sur les tarifs possibles',

);


// define 
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>