<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=french\', \'Hilfe\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=french"><b>[HILFE]</b></a>');
define('MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT', '<h2>Remise et surcharge sur les types de paiement</h2> Si vous souhaitez plus d\'échelles de réduction (la valeur par défaut est de <b>3</b>), la valeur de la variable $num (fichiers de langue) ou $this->num (fichier de module) doit être modifiée à la valeur souhaitée dans tous les fichiers avant l\'installation. <hr> <h3>Champs d\'échelle de remise</h3> <p class="red">Remarque : l\'adresse de livraison est déterminante pour les codes pays. Si un rabais/majoration doit s\'appliquer à tous les pays, utilisez 00 comme code ou omettez complètement la spécification du code pays (y compris le "|" !).</p> <h4>Utilisez la notation suivante pour les remises :</h4> <pre> <span class="blue">DE|100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre> <p>Signification :</p> <p>Pour les clients d\'<span class="blue">Allemagne</span>, une remise de <span class="red">4 %</span> est accordée à partir de <span class="green">100 euros</span>, et une remise de <span class="red">5 %</span> à partir de <span class="green">200 euros</span>.</p> <pre> <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre> <p>Signification :</p> <p>Pour les clients de tous les pays, une remise <span class="red">de 2%</span> est accordée à partir de <span class="green">100 euros,</span> à partir de <span class="green">200 euros</span> une remise de <span class="red">3%</span>.</p> <h4>Utilisez la notation suivante pour les suppléments :</h4> <pre> <span class="blue">DE|100</span>:<span class="red">-3</span></pre> <p>Signification :</p> <p>Pour les clients d\'<span class="blue">Allemagne</span>, un supplément de <span class="red">3%</span> sera facturé à partir de <span class="green">100 euros</span>.</p> <h4>Exemple pour Paypal</h4> 1. échelle de réduction <pre> <span class="blue">DE|0</span>:<span class="red">-1,9&</span><span class="lila">-0,35</span></pre> 2ème barème de remise <pre> <span class="blue">00|0</span>:<span class="red">-3.4&</span><span class="lila">-0.35</span></pre> <p>Signification :</p> <p>Pour les clients d\'<span class="blue">Allemagne</span>, une surcharge de <span class="red">1,9%</span> plus 0 <span class="lila">,35</span> euros s\'applique à partir de <span class="lila">0 euros</span> (c\'est-à-dire toujours).</p> <p>Pour les clients de <span class="blue">tous les autres pays (00=tous</span> ), un supplément de <span class="red">3,4 %</span> plus 0 <span class="lila">,35</span> euro sera facturé à partir de <span class="green">0 euro</span>.</p> <p>Il est important que les entrées soient effectuées dans le bon ordre (les autres pays toujours en dernier) et que "Calcul multiple" soit réglé sur "faux", sinon les deux suppléments seront calculés.</p> <h4>Exemple pour les montants fixes</h4> <pre> <span class="green">0</span>:<span class="red">0&</span><span class="lila">-2</span></pre> <p>Signification :</p> <p>Pour les clients de tous les pays, une surcharge de <span class="red">0%</span> (c\'est-à-dire aucune surcharge en pourcentage) plus <span class="lila">2,00 EUR</span> (la surcharge fixe) est calculée à partir de <span class="lila">0 EUR</span> (c\'est-à-dire toujours).</p> <hr> <h3>Champs de type de paiement</h3> <p>Saisissez le <b>code interne</b> du mode de paiement dans les champs, par exemple le <b>mandat postal</b> pour le paiement à l\'avance ou le <b>code</b> pour le contre-remboursement.</p> <p>Séparez les différents types de paiement par des virgulesVoir</p>Modules -> Options de paiement -> <p>colonne</p>"Nom du module (pour usage interne)".<br/><br/> <hr> <h3>Affichage du type de paiement dans le processus de commande</h3> Si vous souhaitez que la remise correspondante soit affichée dans le processus de commande lors de la sélection du mode de paiement, réglez l\'option "Afficher dans les modes de paiement" sur "true". <br/><br/> En outre, vous pouvez définir le type d\'affichage avec l\'option "Type d\'affichage dans le processus de commande lors de la sélection du paiement" : <p> -- Par défaut : pourcentage ou montant, selon les entrées du barème de remise.</p> <p> -- Prix : Le montant réel est toujours affiché.</p></hr></hr></hr>');

define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Remise et surcharge sur les modes de paiement');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Remise et surcharge sur les modes de paiement' . MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);

define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Afficher la réduction');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', 'Souhaitez-vous activer l\'escompte de paiement ?');

define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Ordre de classement');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Ordre d\'affichage');

if (defined('MODULE_ORDER_TOTAL_PAYMENT_NUMBER')) {
  for ($j=1; $j<=MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', '<hr>'.$j . '. Barème de réduction');
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Remise (valeur minimale : pourcentage)');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. Mode de paiement');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'Modes de paiement sur lesquels la remise doit être appliquée');
  }
}

define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>Frais d\'expédition inclus');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Les frais d\'expédition sont déduits');

define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>TVA incluse');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'La TVA est déduite avec');

define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>Calcul de la TVA');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'Recalculer la TVA totale');

define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Zones autorisées');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).');

define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Réduction');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Surcharge');

define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE', '<hr>Classe d\'impôt');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC', 'Le type de taxe n\'est pas pertinent et sert uniquement à éviter un message d\'erreur.');

define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE', '<hr>Calculs multiples');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC', 'Les calculs multiples doivent-ils être possibles ? Sinon, il sera annulé après la première remise correspondante.');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Affichage avec les méthodes de paiement');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Affichage dans le processus de commande pendant la sélection du paiement');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Type d\'affichage des modes de paiement');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Type d\'affichage dans le processus de commande lors de la sélection du paiement <br />-- par défaut : pourcentage ou montant, en fonction des entrées dans le barème de remise<br />-- prix : le montant réel est toujours affiché');

define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'Nombre de méthodes de paiement');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'Nombre de rabais et de surtaxes sur les modes de paiement');
