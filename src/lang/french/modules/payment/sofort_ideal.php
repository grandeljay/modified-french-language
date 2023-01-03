<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$sofort_code = 'SOFORT_IDEAL';

define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Dès que le client aura sélectionné ce mode de paiement et sa banque, il sera redirigé vers sa banque par SOFORT GmbH. Là, il effectue son paiement et est redirigé vers le système de la boutique. Si le paiement est confirmé avec succès, un rappel au système de la boutique est effectué par SOFORT GmbH, qui modifie le statut de paiement de la commande en conséquence.<br />Fourni par SOFORT GmbH');
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_INFO', 'iDEAL.nl - virements en ligne pour le commerce électronique aux Pays-Bas. Pour payer avec iDEAL, vous devez avoir un compte dans l\'une des banques listées ci-dessus. Effectuez le virement directement auprès de votre banque. Les services/biens sont livrés ou expédiés IMMÉDIATEMENT lorsqu\'ils sont disponibles !');

define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE',
    '<table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td valign="bottom">
                <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Información\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
            </td>
        </tr>
        <tr>
            <td class="main">{{text}}</td>
        </tr>
	</table>'
);
define('MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDEAL');
define(
    'MODULE_PAYMENT_' . $sofort_code . '_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT',
    '<ul>
        <li>Transferts en ligne pour le commerce électronique aux Pays-Bas.</li>
        <li>Pour payer avec iDEAL, vous devez avoir un compte dans l\'une des banques listées ci-dessous.</li>
        <li>Vous effectuez le virement directement auprès de votre banque</li>
        <li>Les services/biens sont livrés ou expédiés en SOFORT lorsqu\'ils sont disponibles.</li>
    </ul>'
);

define('MODULE_PAYMENT_' . $sofort_code . '_SELECTBOX', 'Sélectionnez votre banque');
define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_TITLE', 'Activez le module iDEAL');
define('MODULE_PAYMENT_' . $sofort_code . '_STATUS_DESC', 'Voulez-vous accepter les paiements par iDEAL ?');

include DIR_FS_CATALOG . 'lang/french/modules/payment/sofort_payment.php';
