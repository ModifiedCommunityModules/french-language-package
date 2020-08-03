<?php
$lang_array = array(
  'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'Profil PayPal',
  'TEXT_PAYPAL_PROFILE_STATUS' => 'Par d&eacute;faut:',
  'TEXT_PAYPAL_PROFILE_STATUS_INFO' => 'S\'il s\'agit du profil par d&eacute;faut?<br/><br/><b>Note:</b> Vous pouvez vous voir attribuer un profil linguistique pour chaque module.',
  'TEXT_PAYPAL_PROFILE_NAME' => 'Nom interne:',
  'TEXT_PAYPAL_PROFILE_NAME_INFO' => '',
  'TEXT_PAYPAL_PROFILE_BRAND' => 'Nom d\'affichage:',
  'TEXT_PAYPAL_PROFILE_BRAND_INFO' => 'Ce nom sera affich&eacute; aux clients chez PayPal (max. 127 caract&egrave;res)',
  'TEXT_PAYPAL_PROFILE_LOGO' => 'Logo URL:',
  'TEXT_PAYPAL_PROFILE_LOGO_INFO' => 'URL compl&egrave;te (max. 127 caract&egrave;res)<br/><br/><b>Note:</b> Pour que le logo apparaisse, l\'URL doit commencer par https://',
  'TEXT_PAYPAL_PROFILE_LOCALE' => 'Langue:',
  'TEXT_PAYPAL_PROFILE_LOCALE_INFO' => '',
  'TEXT_PAYPAL_PROFILE_PAGE' => 'Page:',
  'TEXT_PAYPAL_PROFILE_PAGE_INFO' => '<b>Par d&eacute;faut:</b> Connexion<br/><br/>Pour la facturation, l\'acte de transfert sans compte client est pr&eacute;s&eacute;lectionn&eacute;.',
  'TEXT_PAYPAL_PROFILE_ADDRESS' => 'Annulation de l\'adresse:',
  'TEXT_PAYPAL_PROFILE_ADDRESS_INFO' => 'L\'adresse de livraison fournie par PayPal est-elle prise en charge?',
  'TEXT_PAYPAL_PROFILE_INFO' => 'Pas de profil PayPal disponible.<br/><br/>Utilisez un profil PayPal pour:<ul><li>modifier le nom de compte affich&eacute; chez PayPal</li><li>utiliser une image chez PayPal</li><li>d&eacute;finir la page d\'accueil de PayPal</li></ul>',  
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>