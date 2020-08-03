<?php
$sofort_code = 'SOFORT_IDEAL';
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Une fois que le client a choisi ce mode de paiement et sa banque, il sera achemin&eacute; par la SOFORT GmbH sur son banc. Il d&eacute;pense son paiement et retourne ensuite dans le syst&egrave;me du magasin. Une fois le paiement confirm&eacute; par la SOFORT GmbH, le client est rappel&eacute; dans le syst&egrave;me du magasin, ce qui ne change pas le statut de paiement de la commande.<br/>Propuls&eacute; par SOFORT GmbH');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'iDEAL.nl - les paiements en ligne pour le commerce &eacute;lectronique aux Pays-Bas. Pour effectuer un paiement par iDEAL, vous devez disposer d\'un compte aupr&egrave;s de l\'une des banques indiqu&eacute;es. Elles effectueront le transfert directement &agrave; votre banque. Les services / biens sont livr&eacute;s ou exp&eacute;di&eacute;s d&egrave;s qu\'ils sont disponibles IMM&Eacute;DIATEMENT !');
// checkout
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Information\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDeal');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>les paiements en ligne pour le commerce &eacute;lectronique aux Pays-Bas</li>
    <li>Pour effectuer un paiement par iDEAL, vous devez disposer d\'un compte aupr&egrave;s de l\'une des banques suivantes</li>
    <li>Ils effectueront le transfert directement &agrave; votre banque</li>
    <li>Les services / biens sont livr&eacute;s ou exp&eacute;di&eacute;s lorsqu\'ils sont disponibles IMM&Eacute;DIATEMENT</li>
  </ul>');
define('MODULE_PAYMENT_'.$sofort_code.'_SELECTBOX', 'Veuillez choisir votre banque');
// admin
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'activer le module iDeal');
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Activer/d&eacute;sactiver iDeal');
include(DIR_FS_CATALOG.'lang/english/modules/payment/sofort_payment.php');
?>