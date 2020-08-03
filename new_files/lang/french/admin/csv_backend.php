<?php
define('IMPORT','Importer');
define('EXPORT','Exporter');
define('UPLOAD','Charger un fichier');
define('SELECT','S&eacute;lectionnez le fichier d\'importation (/import Dossier)');
define('SAVE','Enregistrer le fichier dans le dossier /export');
define('LOAD','Envoyer le fichier au navigateur');
define('CSV_TEXTSIGN_TITLE','Textsign');
define('CSV_TEXTSIGN_DESC','ex. " &nbsp; | &nbsp; <span style="color:#c00;"> En point-virgule comme d&eacute;limiteur, le qualificatif du texte doit &ecirc;tre fix&eacute; &agrave;" </ span>');
define('CSV_SEPERATOR_TITLE','S&eacute;parateur');
define('CSV_SEPERATOR_DESC','ex. ; &nbsp; | &nbsp;<span Style="color:#c00;"> le champ de saisie est laiss&eacute; vide est l\'exportation/importation par d&eacute;faut \\t (= onglet) utilis&eacute; </ span> ');
define('COMPRESS_EXPORT_TITLE','Compression');
define('COMPRESS_EXPORT_DESC','Compresser le fichier d\'exportation');
define('CSV_SETUP','Config');
define('TEXT_IMPORT','');
define('TEXT_PRODUCTS','Produits');
define('TEXT_EXPORT','Cr&eacute;er un fichier d\'exportation et le sauvegarder dans le dossier /export');
define('CSV_CATEGORY_DEFAULT_TITLE','Cat&eacute;gorie pour l\'importation');
define('CSV_CATEGORY_DEFAULT_DESC','Tous les produits dans le fichier d\'importation csv qui n\'ont pas de cat&eacute;gorie d&eacute;finie seront import&eacute;s dans cette cat&eacute;gorie.<br/><b> Attention : </b> Si vous ne souhaitez pas importer des produits qui n\'ont pas de cat&eacute;gorie d&eacute;finie, s&eacute;lectionnez la cat&eacute;gorie "Top" car il n\'est pas possible d\'importer dans cette cat&eacute;gorie..');
define('CSV_CAT_DEPTH_TITLE','Profondeur de la cat&eacute;gorie');
define('CSV_CAT_DEPTH_DESC','Jusqu\'o&ugrave; doit aller l\'arbre des cat&eacute;gories? (par exemple, avec la valeur par d&eacute;faut 4 : cat&eacute;gorie principale plus 3 sous-cat&eacute;gories)<br />Cette indication est importante pour bien importer les cat&eacute;gories int&eacute;gr&eacute;es dans le CSV. Il en va de m&ecirc;me pour la fonction d\'exportation.<br /><span style="color:#c00;">Plus de 4 peut entra&icirc;ner une perte de performance et n\'est probablement pas facile &agrave; utiliser!');
?>