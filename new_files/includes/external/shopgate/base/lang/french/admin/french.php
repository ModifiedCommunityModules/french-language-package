<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich gesch&uuml;tzt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH &uuml;ber www.shopgate.com verwendet werden. Eine dar&uuml;ber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unber&uuml;hrt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */
### Plugin ###
define('SHOPGATE_CONFIG_EXTENDED_ENCODING', 'Encodage du syst&egrave;me de boutique');
define('SHOPGATE_CONFIG_EXTENDED_ENCODING_DESCRIPTION', 'Choisissez l\'encodage de votre syst&egrave;me de boutique. Il s\'agit g&eacute;n&eacute;ralement de "ISO-8859-15" pour les versions ant&eacute;rieures &agrave; 1.06.');
### Menu ###
define('BOX_SHOPGATE', 'Shopgate');
define('BOX_SHOPGATE_INFO', 'Qu\'est-ce que le Shopgate');
define('BOX_SHOPGATE_HELP', 'Aide &agrave; l\'installation');
define('BOX_SHOPGATE_CONFIG', 'Param&egrave;tres');
### Links ###
define('SHOPGATE_LINK_HOME', 'https://www.shopgate.com/en/?partner=30051');
define('SHOPGATE_LINK_WIKI', 'https://support.shopgate.com/hc/en-us/articles/202911763');
### Configuration ###
define('SHOPGATE_CONFIG_TITLE', 'SHOPGATE');
define('SHOPGATE_CONFIG_ERROR', 'ERREUR:');
define('SHOPGATE_CONFIG_ERROR_SAVING', 'Configuration de la sauvegarde des erreurs. ');
define('SHOPGATE_CONFIG_ERROR_LOADING', 'Erreur de configuration de chargement. ');
define('SHOPGATE_CONFIG_ERROR_READ_WRITE', 'Veuillez v&eacute;rifier les permissions (777) pour le dossier &quot;/shopgate_library/config&quot; du plugin Shopgate.');
define('SHOPGATE_CONFIG_ERROR_INVALID_VALUE', 'Veuillez v&eacute;rifier votre saisie dans les champs suivants: ');
define('SHOPGATE_CONFIG_ERROR_DUPLICATE_SHOP_NUMBERS', 'Il existe plusieurs configurations avec le m&ecirc;me num&eacute;ro de magasin. Cela peut entra&icirc;ner des probl&egrave;mes majeurs et impr&eacute;vus!');
define('SHOPGATE_CONFIG_INFO_MULTIPLE_CONFIGURATIONS', 'Des configurations pour plusieurs places de march&eacute; sont actives.');
define('SHOPGATE_CONFIG_SAVE', 'Sauvegarder');
define('SHOPGATE_CONFIG_GLOBAL_CONFIGURATION', 'Configuration globale');
define('SHOPGATE_CONFIG_USE_GLOBAL_CONFIG', 'Utiliser la configuration globale pour cette langue.');
define('SHOPGATE_CONFIG_MULTIPLE_SHOPS_BUTTON', 'Mettre en place plusieurs march&eacute;s "Shopgate');
define(
'SHOPGATE_CONFIG_LANGUAGE_SELECTION',
    'Sur Shopgate, vous devez avoir un magasin pour chaque march&eacute; limit&eacute; &agrave; une langue et une monnaie. Ici, vous pouvez faire correspondre les langues configur&eacute;es &agrave; vos boutiques Shopgate sur diff&eacute;rents '
    .
    'les march&eacute;s. Choisissez une langue et saisissez les informations d\'identification de votre boutique Shopgate sur la place de march&eacute; correspondante. Si vous n\'avez pas de boutique Shopgate pour une certaine langue '
    .
    'la configuration globale sera utilis&eacute;e pour celui-ci.'
);
### Connection Settings ###
define('SHOPGATE_CONFIG_CONNECTION_SETTINGS', 'Param&egrave;tres de connexion');
define('SHOPGATE_CONFIG_CUSTOMER_NUMBER', 'Num&eacute;ro de client');
define('SHOPGATE_CONFIG_CUSTOMER_NUMBER_DESCRIPTION', 'Vous pouvez trouver votre num&eacute;ro de client dans la section &quot ; Int&eacute;gration &quot ; de votre magasin.');
define('SHOPGATE_CONFIG_SHOP_NUMBER', 'Num&eacute;ro du magasin');
define('SHOPGATE_CONFIG_SHOP_NUMBER_DESCRIPTION', 'Vous pouvez trouver le num&eacute;ro du magasin dans la section &quot;Int&eacute;gration&quot ; de votre magasin.');
define('SHOPGATE_CONFIG_APIKEY', 'Cl&eacute; API');
define('SHOPGATE_CONFIG_APIKEY_DESCRIPTION', 'Vous pouvez trouver la cl&eacute; API dans la section &quot ; Int&eacute;gration &quot ; de votre boutique.');
### Mobile Redirect ###
define('SHOPGATE_CONFIG_MOBILE_REDIRECT_SETTINGS', 'Redirection mobile');
define('SHOPGATE_CONFIG_ALIAS', 'Alias de magasin');
define('SHOPGATE_CONFIG_ALIAS_DESCRIPTION', 'Vous pouvez trouver le pseudonyme dans la section &quot ; Int&eacute;gration &quot ; de votre boutique.');
define('SHOPGATE_CONFIG_CNAME', 'URL personnalis&eacute;e vers une page web mobile (CNAME), y compris http://');
define(
'SHOPGATE_CONFIG_CNAME_DESCRIPTION',
    'Entrez une URL personnalis&eacute;e (d&eacute;finie par la CNAME) pour votre site web mobile. Vous pouvez trouver l\'URL dans la section &quot ; Int&eacute;gration &quot ; de votre boutique '
    .
    'apr&egrave;s avoir activ&eacute; cette option dans la section &quot ; Settings &quot ; &equals ; &quot ; Mobile website / webapp &quot.'
);
define('SHOPGATE_CONFIG_REDIRECT_LANGUAGES', 'Langues redirig&eacute;es');
define(
'SHOPGATE_CONFIG_REDIRECT_LANGUAGES_DESCRIPTION',
'Choisissez les langues qui doivent &ecirc;tre redirig&eacute;es vers cette boutique Shopgate. Au moins une langue doit &ecirc;tre s&eacute;lectionn&eacute;e. Maintenez la touche CTRL enfonc&eacute;e pour s&eacute;lectionner plusieurs entr&eacute;es.'
);
### Export ###
define('SHOPGATE_CONFIG_EXPORT_SETTINGS', 'Cat&eacute;gories et produits d\'exportation');
define('SHOPGATE_CONFIG_LANGUAGE', 'Langue');
define('SHOPGATE_CONFIG_LANGUAGE_DESCRIPTION', 'Choisissez la langue dans laquelle les cat&eacute;gories et les produits doivent &ecirc;tre export&eacute;s.');
define('SHOPGATE_CONFIG_EXTENDED_CURRENCY', 'Monnaie');
define('SHOPGATE_CONFIG_EXTENDED_CURRENCY_DESCRIPTION', 'Choisissez la devise pour l\'exportation des produits.');
define('SHOPGATE_CONFIG_EXTENDED_COUNTRY', 'Pays');
define('SHOPGATE_CONFIG_EXTENDED_COUNTRY_DESCRIPTION', 'Choisissez le pays pour lequel vos produits doivent &ecirc;tre export&eacute;s');
define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE', 'Zone d\'imposition pour Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE_DESCRIPTION', 'Choisissez la zone d\'imposition valable pour Shopgate.');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER', 'Inverser l\'ordre de tri des cat&eacute;gories');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_ON', 'Oui');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_OFF', 'Non');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_DESCRIPTION',
'Choisissez "Oui" si l\'ordre de tri des cat&eacute;gories dans votre boutique mobile appara&icirc;t &agrave; l\'envers.'
);
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER', 'Inverser l\'ordre de tri des produits');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_ON', 'Oui');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_OFF', 'Non');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_DESCRIPTION',
'Choisissez "Oui" si l\'ordre de tri des produits dans votre boutique mobile appara&icirc;t &agrave; l\'envers.'
);
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION', 'Description des produits');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_ONLY', 'Description seulement');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_ONLY', 'Description succincte seulement');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_SHORTDESC', 'Description et br&egrave;ve description');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_DESC', 'Description et br&egrave;ve description');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESCRIPTION', 'Veuillez s&eacute;lectionner la m&eacute;thode &agrave; utiliser pour cr&eacute;er des descriptions pour le magasin mobile.');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP', 'Groupe de prix pour Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_DESCRIPTION', 'Choisissez le groupe de prix valable pour Shopgate (le groupe de clients dont les informations sur les prix sont prises pour l\'exportation des produits).');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_OFF', '-- D&eacute;sactiv&eacute; --');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY', 'Exporter la cat&eacute;gorie "Nouveau');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_DESCRIPTION', 'Ce syst&egrave;me de boutique vous permet d\'afficher tous les nouveaux produits dans une cat&eacute;gorie virtuelle. Avec cette option, il est possible d\'exporter les nouveaux produits dans une cat&eacute;gorie r&eacute;elle. Vous pouvez donc utiliser le champ de saisie pour modifier l\'identifiant de la cat&eacute;gorie.');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_ON', 'Oui');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_OFF', 'Non');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_MAX_ID', 'Actuellement la cat&eacute;gorie la plus &eacute;lev&eacute;e - ID dans le syst&egrave;me des magasins');
define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD', 'Options de produits &agrave; exporter comme champs de saisie');
define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD_DESCRIPTION', 'Ajoutez les ID d\'option (voir "Options des produits") qui doivent &ecirc;tre export&eacute;s comme champs de saisie. Exemple: 1,2,3');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY', 'Exporter la cat&eacute;gorie "Sp&eacute;cial"');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_DESCRIPTION', 'Ce syst&egrave;me de boutique vous permet d\'afficher tous les produits sp&eacute;ciaux dans une cat&eacute;gorie virtuelle. Avec cette option, il est possible d\'exporter les nouveaux produits dans une cat&eacute;gorie r&eacute;elle. Vous pouvez donc utiliser le champ de saisie pour modifier l\'identifiant de la cat&eacute;gorie.');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_ON', 'Oui');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_OFF', 'Non');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_MAX_ID', 'Actuellement la cat&eacute;gorie la plus &eacute;lev&eacute;e - ID dans le syst&egrave;me des magasins');
define('SHOPGATE_PLUGIN_FIELD_AVAILABLE_TEXT_AVAILABLE_ON_DATE', 'Disponible &agrave; la #DATE#');
### Orders Import ###
define('SHOPGATE_CONFIG_ORDER_IMPORT_SETTINGS', 'Commandes d\'importation');
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Champ(s) personnalis&eacute;(s) de cette commande Shopgate:');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP', 'Groupe de clients');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP_DESCRIPTION', 'Choisissez le groupe de clients Shopgate (le groupe de clients auquel tous les clients invit&eacute;s seront assign&eacute;s lors de l\'importation de commandes).');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING', 'Mode d\'exp&eacute;dition');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_DESCRIPTION', 'Choisissez le mode d\'exp&eacute;dition pour l\'importation des commandes. Celui-ci sera utilis&eacute; pour calculer la taxe pour les frais d\'exp&eacute;dition.');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_NO_SELECTION', '-- pas de s&eacute;lection --');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED', 'Exp&eacute;dition non bloqu&eacute;e');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED_DESCRIPTION', 'Choisissez le statut des commandes qui ne sont pas bloqu&eacute;es pour l\'exp&eacute;dition par Shopgate.');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED', 'Exp&eacute;dition bloqu&eacute;e');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED_DESCRIPTION', 'Choisissez le statut des commandes qui sont bloqu&eacute;es pour l\'exp&eacute;dition par Shopgate.');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT', 'Exp&eacute;di&eacute;');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT_DESCRIPTION', 'Choisissez le statut que vous appliquez aux commandes qui ont &eacute;t&eacute; exp&eacute;di&eacute;es.');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED', 'Annul&eacute;');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_NOT_SET', '- Statut non d&eacute;fini -');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_DESCRIPTION', 'Choisissez le statut des commandes qui ont &eacute;t&eacute; annul&eacute;es.');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL', 'Courrier de confirmation');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_ON', 'Oui');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_OFF', 'Non');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_DESCRIPTION', 'Une fois la commande pass&eacute;e avec succ&egrave;s, un courrier de confirmation est envoy&eacute; au client. Si le ou les produits ont &eacute;t&eacute; t&eacute;l&eacute;chargeables, le lien de t&eacute;l&eacute;chargement est inclus dans ce courrier.');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING', 'Afficher les noms des modes de paiement');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_DESCRIPTION', "Les noms individuels des modes de paiement, qui sont utilis&eacute;s lors de l'importation d'une commande. D&eacute;finis par \'=\'' et s&eacute;par&eacute;s par ';'.<br/>(Exemple: PREPAY=Prepay;SHOPGATE=Handled by Shopgate)<br/>");
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK', 'https://support.shopgate.com/hc/en-us/articles/202911763-Connecting-to-modified-eCommerce#4.4');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK_DESCRIPTION', "Lien vers la page de soutien");
### System Settings ###
define('SHOPGATE_CONFIG_SYSTEM_SETTINGS', 'Param&egrave;tres du syst&egrave;me');
define('SHOPGATE_CONFIG_SERVER_TYPE', 'Serveur Shopgate');
define('SHOPGATE_CONFIG_SERVER_TYPE_LIVE', 'En direct');
define('SHOPGATE_CONFIG_SERVER_TYPE_PG', 'Terrain de jeu');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM', 'Personnalisation');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM_URL', 'URL du serveur Shopgate personnalis&eacute;');
define('SHOPGATE_CONFIG_SERVER_TYPE_DESCRIPTION', 'Choisissez le serveur Shopgate auquel vous souhaitez vous connecter.');
?>