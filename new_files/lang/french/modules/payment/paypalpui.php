<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalpui.php 14480 2022-05-23 13:52:35Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALPUI_TEXT_TITLE' => 'Facture',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_ADMIN_TITLE' => 'Facture via PayPal',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_INFO' => 'En cliquant sur le bouton, vous acceptez les <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">conditions de paiement Ratepay</a> et vous acceptez que Ratepay&lt;/a&gt;, notre partenaire, effectue une &lt;a target=&quot;_blank&quot; href=&quot;https://www.ratepay.com/legal-payment-dataprivacy&quot;&gt;&eacute;valuation des risques. Vous acceptez &eacute;galement PayPal&amp;rsquo;s <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">D&eacute;claration de protection des donn&eacute;es</a>. Si votre transaction peut &ecirc;tre effectu&eacute;e avec succ&egrave;s par achat sur facture, le prix d\'achat est c&eacute;d&eacute; &agrave; Ratepay et vous ne pouvez effectuer le virement qu\'&agrave; Ratepay et non au commer&ccedil;ant..',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Pour que l\'achat sur facture fonctionne correctement, les h&ocirc;tes web suivants doivent &ecirc;tre configur&eacute;s dans la configuration PayPal afin que le statut soit modifi&eacute; correctement:<ul><li>PAYMENT.CAPTURE.COMPLETED</li><li>PAYMENT.CAPTURE.DENIED</li></ul>',
  'MODULE_PAYMENT_PAYPALPUI_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_PAYPALPUI_ALLOWED_DESC' => 'Indiquez <b>individuellement</b> les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par ex. AT,DE (si vide, toutes les zones sont autoris&eacute;es))',
  'MODULE_PAYMENT_PAYPALPUI_STATUS_TITLE' => 'Activer la facture PayPal',
  'MODULE_PAYMENT_PAYPALPUI_STATUS_DESC' => 'Vous souhaitez accepter les paiements par facture ?',
  'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_DESC' => 'Ordre d\'affichage des chiffres. Le plus petit chiffre s\'affiche en premier',
  'MODULE_PAYMENT_PAYPALPUI_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALPUI_ZONE_DESC' => 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone.',
  'MODULE_PAYMENT_PAYPALPUI_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Cr&eacute;er un compte PayPal maintenant ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION:</font></strong> Veuillez encore modifier les param&egrave;tres sous "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Konfiguration"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_HEADING' => 'Remarque',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_MESSAGE' => 'L\'achat sur facture n\'est malheureusement pas disponible pour le moment, veuillez choisir un autre mode de paiement.',  
  
  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_INFO_CANNOT_BE_VERIFIED' => 'Die Kombination aus Ihrem Namen und Ihrer Adresse konnte nicht validiert werden. Bitte korrigieren Sie Ihre Daten und versuchen Sie es erneut. Pour plus d\'informations, consultez la  <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">D&eacute;claration de confidentialit&eacute; de Ratepay</a> ou vous pouvez contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">formulaire de contact</a>.',
  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_DECLINED_BY_PROCESSOR' => 'Le mode de paiement choisi ne peut pas &ecirc;tre utilis&eacute;. Diese Entscheidung basiert auf einem automatisierten Datenverarbeitungsverfahren. Pour plus d\'informations, veuillez consulter la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">D&eacute;claration de confidentialit&eacute; de Ratepay</a> ou contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">Formulaire de contact</a>.',
  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_CANNOT_BE_USED' => 'Le mode de paiement choisi ne peut pas &ecirc;tre utilis&eacute;. Diese Entscheidung basiert auf einem automatisierten Datenverarbeitungsverfahren. Pour plus d\'informations, veuillez consulter la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">D&eacute;claration de confidentialit&eacute; de Ratepay</a> ou vous pouvez contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">Formulaire de contact</a>.',
  'MODULE_PAYMENT_PAYPALPUI_BILLING_ADDRESS_INVALID' => 'Votre adresse de facturation n\'a pas pu &ecirc;tre valid&eacute;e.',
  'MODULE_PAYMENT_PAYPALPUI_SHIPPING_ADDRESS_INVALID' => 'Votre adresse d\'exp&eacute;dition n\'a pas pu &ecirc;tre valid&eacute;e.',
    
  'MALFORMED_REQUEST_JSON' => 'La combinaison de votre nom et de votre adresse n\'a pas pu &ecirc;tre valid&eacute;e. Veuillez corriger vos donn&eacute;es et r&eacute;essayer. Pour plus d\'informations, consultez la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">D&eacute;claration de confidentialit&eacute; de Ratepay</a> ou vous pouvez contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">formulaire de contact</a>.',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_DOB' => 'Date de naissance (par exemple 21/05/1970) :',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_TELEPHONE' => 'Num&eacute;ro de t&eacute;l&eacute;phone:',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_SERVICE' => 'Service client&egrave;le: %s',
  
  'JS_DOB_ERROR' => 'Votre date de naissance doit &ecirc;tre saisie au format JJ.MM.AAAA (par ex. 21.05.1970).',
  'JS_TELEPHONE_ERROR' => 'Pour ce mode de paiement, nous avons besoin de votre num&eacute;ro de t&eacute;l&eacute;phone.',
  
  'MODULE_PAYMENT_PAYPALPUI_TEXT_LEGAL' => 'En cliquant sur le bouton, vous acceptez les <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">Conditions de paiement Ratepay</a> et se d&eacute;clarent d\'accord avec la mise en &oelig;uvre d\'une <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">&Eacute;valuation des risques par Ratepay</a>, notre partenaire, accepte. Ils acceptent &eacute;galement PayPal&amp;rsquo;s <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">D&eacute;claration de protection des donn&eacute;es</a>. Si votre transaction peut &ecirc;tre effectu&eacute;e avec succ&egrave;s par achat sur facture, le prix d\'achat est c&eacute;d&eacute; &agrave; Ratepay et vous ne pouvez effectuer le virement qu\'&agrave; Ratepay et non au commer&ccedil;ant.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>