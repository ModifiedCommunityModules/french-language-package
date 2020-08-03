<?php
require_once(DIR_FS_CATALOG.'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php');
$api_it_recht_kanzlei = new api_it_recht_kanzlei();

define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'IT-Recht Kanzlei AGB-Schnittstelle v'.$api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Auto Updater pour les textes juridiques automatiques<br/><br/><b>A l\'attention de:</b> Avant d\'utiliser le module, l\'attribution des pages de contenu doit &ecirc;tre faite.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'Statut');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Statut du module');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Auth-Token');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Auth-Token vous devez dire &agrave; l\'IT-Recht Kanzlei.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'Version API');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Cela ne doit &ecirc;tre modifi&eacute; que si l\'IT-Recht Kanzlei vous demande de le faire. (Par d&eacute;faut: 1.0)');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Texte juridique Termes');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'Veuillez pr&eacute;ciser &agrave; quelle page ce texte juridique doit &ecirc;tre ins&eacute;r&eacute; automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Texte juridique Vie priv&eacute;e');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'Veuillez pr&eacute;ciser &agrave; quelle page ce texte juridique doit &ecirc;tre ins&eacute;r&eacute; automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Texte juridique R&eacute;vocation');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'Veuillez pr&eacute;ciser &agrave; quelle page ce texte juridique doit &ecirc;tre ins&eacute;r&eacute; automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Texte juridique Mentions l&eacute;gales');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'Veuillez pr&eacute;ciser &agrave; quelle page ce texte juridique doit &ecirc;tre ins&eacute;r&eacute; automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>S&eacute;lection des termes PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Instruction indiquant si le texte juridique des conditions sera disponible en format PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'S&eacute;lection de la politique de confidentialit&eacute; PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Instruction indiquant si le texte juridique de la politique de confidentialit&eacute; sera disponible en format PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'S&eacute;lection de r&eacute;vocation PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Instruction indiquant si le texte juridique de la r&eacute;vocation doit &ecirc;tre disponible en format PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Localisation PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Pr&eacute;cisez l\'emplacement des textes juridiques en PDF.');
?>