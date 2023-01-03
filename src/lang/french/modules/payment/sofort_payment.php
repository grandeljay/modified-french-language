<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE')       || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE', 'Imm�diatement.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION') || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION', 'Sofort. est le service de paiement gratuit et certifi� par le T&Uuml;V de SOFORT GmbH.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO')        || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO', 'Payez en toute commodit� avec le syst�me bancaire en ligne certifi� et test� Sofort. de SOFORT GmbH.');

defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') || define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE',
    '<table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="bottom">
                <a onclick="javascript:window.open(\'https://images.sofort.com/de/su/landing.php\',\'Kundeninformationen\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
            </td>
        </tr>
        <tr>
            <td class="main">{{text}}</td>
        </tr>
    </table>'
);
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') || define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Sofort.');
defined('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT')     || define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT',
    '<ul>
        <li>Payez facilement et directement par banque en ligne.</li>
    </ul>'
);

defined('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE') || define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE', 'Sofort. Activar');
defined('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC')  || define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC', 'Voulez-vous accepter les paiements par Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_ALLOWED_TITLE', 'Zones autoris�es');
define('MODULE_PAYMENT_' . $sofort_code . '_ALLOWED_DESC', 'Sp�cifiez <b>individuellement</b> les zones � autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autoris�es)).');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_ORDER_TITLE', 'Ordre temporel');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_ORDER_DESC', 'Voulez-vous cr�er une ordonnance temporaire ?');
define('MODULE_PAYMENT_' . $sofort_code . '_LOGGING_TITLE', 'Activer l\'enregistrement');
define('MODULE_PAYMENT_' . $sofort_code . '_LOGGING_DESC', 'Voulez-vous activer la journalisation ?<br/>Les fichiers journaux sont stock�s dans le dossier /log.');
define('MODULE_PAYMENT_' . $sofort_code . '_KEY_TITLE', 'Touche de configuration');
define('MODULE_PAYMENT_' . $sofort_code . '_KEY_DESC', 'Vous trouverez la cl� de configuration dans les param�tres de Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_PAYMENT_' . $sofort_code . '_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit chiffre appara�t en premier');
define('MODULE_PAYMENT_' . $sofort_code . '_ZONE_TITLE', 'Zone de paiement');
define('MODULE_PAYMENT_' . $sofort_code . '_ZONE_DESC', 'Lorsqu\'une zone est s�lectionn�e, le mode de paiement ne s\'applique qu\'� cette zone.');
define('MODULE_PAYMENT_' . $sofort_code . '_CURRENCY_TITLE', 'Devise de la transaction');
define('MODULE_PAYMENT_' . $sofort_code . '_CURRENCY_DESC', 'R�ception de devises �trang�res conform�ment � Imm�diatement. Configuration du projet');
define('MODULE_PAYMENT_' . $sofort_code . '_ORDER_STATUS_ID_TITLE', 'Statut de la commande confirm�');
define('MODULE_PAYMENT_' . $sofort_code . '_ORDER_STATUS_ID_DESC', 'Statut de la commande apr�s r�ception d\'une commande pour laquelle une confirmation de paiement r�ussie a �t� envoy�e');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_STATUS_ID_TITLE', 'Statut de l\'ordonnance temporaire');
define('MODULE_PAYMENT_' . $sofort_code . '_TMP_STATUS_ID_DESC', 'Statut de la commande pour les transactions non encore termin�es');
define('MODULE_PAYMENT_' . $sofort_code . '_UNC_STATUS_ID_TITLE', 'Statut de la commande � v�rifier');
define('MODULE_PAYMENT_' . $sofort_code . '_UNC_STATUS_ID_DESC', 'Statut de la commande apr�s r�ception d\'une commande pour laquelle une confirmation de paiement incorrecte a �t� envoy�e');
define('MODULE_PAYMENT_' . $sofort_code . '_REC_STATUS_ID_TITLE', '�tat de la commande apr�s r�ception de l\'argent');
define('MODULE_PAYMENT_' . $sofort_code . '_REC_STATUS_ID_DESC', 'Statut de la commande apr�s que l\'argent ait �t� cr�dit� sur votre compte. (Condition pr�alable : compte avec l\'application <u><a href="https://www.handelsbank.com/" target="_blank">Banque commerciale allemande</a></u>)');
define('MODULE_PAYMENT_' . $sofort_code . '_REF_STATUS_ID_TITLE', 'Statut de la commande apr�s le retour');
define('MODULE_PAYMENT_' . $sofort_code . '_REF_STATUS_ID_DESC', 'Statut de la commande apr�s la r�trofacturation.');
define('MODULE_PAYMENT_' . $sofort_code . '_LOSS_STATUS_ID_TITLE', 'Statut de la commande lorsque l\'argent n\'est pas arriv�');
define('MODULE_PAYMENT_' . $sofort_code . '_LOSS_STATUS_ID_DESC', 'Statut de la commande si aucun argent n\'a �t� re�u sur votre compte. (Condition pr�alable : compte avec la <u><a href="https://www.handelsbank.com/" target="_blank">Banque commerciale allemande</a></u>)');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_1_TITLE', 'Utilisation pr�vue ligne 1');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_1_DESC', 'Si aucune commande temporaire n\'est cr��e, le num�ro de commande ne sera pas disponible. Par cons�quent, il doit �tre r�gl� sur -TRANSACTION-.');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_2_TITLE', 'Utilisation pr�vue ligne 2');
define('MODULE_PAYMENT_' . $sofort_code . '_REASON_2_DESC', 'Dans le but d\'utilisation (27 caract�res maximum), les caract�res de remplacement suivants sont remplac�s :<br /> {{identification de la commande}}<br />{{date de la commande}}<br />{identification du client}}<br />{nom du client}}<br />{soci�t� du client}}<br />{messagerie du client}}.');
define('MODULE_PAYMENT_' . $sofort_code . '_IMAGE_TITLE', 'S�lection du paiement graphique/texte');
define('MODULE_PAYMENT_' . $sofort_code . '_IMAGE_DESC', 'Graphique / texte affich� lors de la s�lection des options de paiement');
define('MODULE_PAYMENT_' . $sofort_code . '_USER_ID_TITLE', 'Num�ro de client');
define('MODULE_PAYMENT_' . $sofort_code . '_USER_ID_DESC', 'Votre num�ro de client Sofort.');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_ID_TITLE', 'Num�ro de projet');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_ID_DESC', 'Le num�ro du projet responsable dans Sofort. auquel le paiement appartient.');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_PASS_TITLE', 'Mot de passe du projet');
define('MODULE_PAYMENT_' . $sofort_code . '_PROJECT_PASS_DESC', 'Le mot de passe du projet (dans Param�tres avanc�s / Mots de passe et fonctions de hachage)');
define('MODULE_PAYMENT_' . $sofort_code . '_NOTIFY_PASS_TITLE', 'Mot de passe de notification');
define('MODULE_PAYMENT_' . $sofort_code . '_NOTIFY_PASS_DESC', 'Le mot de passe de notification (sous Param�tres avanc�s / Mots de passe et fonctions de hachage)');
define('MODULE_PAYMENT_' . $sofort_code . '_HASH_ALGORITHM_TITLE', 'Algorithme de hachage :');
define('MODULE_PAYMENT_' . $sofort_code . '_HASH_ALGORITHM_DESC', 'L\'algorithme de hachage (dans Param�tres avanc�s / Mots de passe et fonctions de hachage)');
define('MODULE_PAYMENT_' . $sofort_code . '_DESCRIPTION_INSTALL', '<br/><br/>Voulez-vous configurer des statuts de commande appropri�s ?<br/>Cela �crasera les statuts actuellement d�finis.');

defined('TEXT_NO_STATUSUPDATE') || define('TEXT_NO_STATUSUPDATE', 'Pas de mise � jour du statut');

define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_ERROR_HEADING', 'L\'erreur suivante a �t� signal�e par Sofort. pendant le processus :');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_ERROR_MESSAGE', 'Le paiement par Sofort. n\'est malheureusement pas possible ou a �t� annul� � la demande du client. Veuillez choisir un autre mode de paiement.');

defined('TEXT_SOFORT_NOT_CREDITED_YET')            || define('TEXT_SOFORT_NOT_CREDITED_YET', 'Imm�diatement. R�alis� avec succ�s');
defined('TEXT_SOFORT_NOT_CREDITED')                || define('TEXT_SOFORT_NOT_CREDITED', 'Argent non re�u en compte');
defined('TEXT_SOFORT_LOSS')                        || define('TEXT_SOFORT_LOSS', 'Ordre de contr�le');
defined('TEXT_SOFORT_RECEIVED')                    || define('TEXT_SOFORT_RECEIVED', 'Argent re�u en compte');
defined('TEXT_SOFORT_CREDITED')                    || define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED')                    || define('TEXT_SOFORT_REFUNDED', 'L\'argent a �t� rembours� en totalit�');
defined('TEXT_SOFORT_CANCELED')                    || define('TEXT_SOFORT_CANCELED', 'Imm�diatement. Annul�');
defined('TEXT_SOFORT_WAIT_FOR_MONEY')              || define('TEXT_SOFORT_WAIT_FOR_MONEY', 'Attendez le paiement');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') || define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Sofort. Temps d\'attente');
defined('TEXT_SOFORT_REJECTED')                    || define('TEXT_SOFORT_REJECTED', 'Imm�diatement. Rejet�');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED')  || define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);

define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_TRANSACTION', "Erreur de Callback\nTransaction-ID : %s");
define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_PAYMENT', "Le paiement n'a pas encore �t� re�u Transaction-ID : %s");
define('MODULE_PAYMENT_' . $sofort_code . '_ERROR_UNEXPECTED_STATUS', "Erreur (SU204) : Statut inattendu Transaction-ID : %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_TRANSACTION', "Paiement r�ussi Transaction-ID : %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_PAYMENT', "Paiement re�u Transaction-ID : %s");
define('MODULE_PAYMENT_' . $sofort_code . '_SUCCESS_REFUNDED', "Paiement rembours� ID de la transaction : %s");

$SOFORT_INST_ORDER_STATUS_TMP_NAME   = 'Temp';
$SOFORT_INST_ORDER_STATUS_UNC_NAME   = 'En attendant';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME  = 'En attendant';
$SOFORT_INST_ORDER_STATUS_REC_NAME   = 'R�ception du paiement';
$SOFORT_INST_ORDER_STATUS_REF_NAME   = 'Paiement rembours�';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Pagado';
