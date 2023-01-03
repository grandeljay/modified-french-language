<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$prefix = 'MODULE_ORDER_TOTAL_BILLPAY_';

define($prefix . 'FEE_TITLE', 'Supplément pour le mode de paiement des factures (BillPay)');
define($prefix . 'FEE_DESCRIPTION', 'Calcul des frais pour les commandes avec méthode de paiement par facture (BillPay)');

define($prefix . 'FEE_STATUS_TITLE', 'Supplément pour le mode de paiement achat sur compte');
define($prefix . 'FEE_STATUS_DESC', 'Calcul du taux de rotation');

define($prefix . 'FEE_SORT_ORDER_TITLE', 'Ordre de classement');
define($prefix . 'FEE_SORT_ORDER_DESC', 'Ordre d\'affichage');

define($prefix . 'FEE_TYPE_TITLE', 'Type de tarif');
define($prefix . 'FEE_TYPE_DESC', 'Sélectionnez le type de frais. Les frais peuvent être un montant fixe, un pourcentage de la facture totale ou un montant progressif.');

define($prefix . 'FEE_PERCENT_TITLE', 'Pourcentage');
define($prefix . 'FEE_PERCENT_DESC', 'Entrez la valeur du pourcentage sous forme d\'un nombre entier avec le pays vers lequel vous envoyez (exemple : DE:5;CH:7). Cette valeur en pourcentage sera ajoutée au total de la facture si le type de taux "pourcentage" est activé.');

define($prefix . 'FEE_VALUE_TITLE', 'valeur fixe');
define($prefix . 'FEE_VALUE_DESC', 'Entrez la valeur fixe (nette) avec le pays vers lequel vous envoyez (exemple : DE:5;CH:7). Cette valeur est ajoutée au total de la facture si le type de tarif "fixe" est activé.');

define($prefix . 'FEE_GRADUATE_TITLE', 'Étonnant');
define($prefix . 'FEE_GRADUATE_DESC', 'Indiquez ici le barème des frais sous la forme {Facture totale}={Frais nets};{Facture totale}={Frais nets} ;. Ce barème s\'applique au total de la facture si le type de frais "Barème" est activé.');

define($prefix . 'FEE_TAX_CLASS_TITLE', 'Classe d\'impôt');
define($prefix . 'FEE_TAX_CLASS_DESC', 'Choisissez une classe d\'impôt.');

defined($prefix . 'FEE_FROM_TOTAL') || define($prefix . 'FEE_FROM_TOTAL', 'du montant de la facture');
