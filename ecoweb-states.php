<?php
/**
 * Plugin Name: Ecoweb Greek Shipping States
 * Description: This plugin enables the use of actual shipping states within Greece and replaces the standard states used by WooCommerce, we encourage you to <a href="https://ecoweb.gr/" target="_blank">visit our website</a> to find out more about us.
 * Plugin URI: https://ecoweb.gr/
 * Author: Othon Man
 * Version: 6.6.1
 * Author URI: https://ecoweb.gr/
 * Text Domain: ecoweb-states
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {
$states['GR'] = array(

'GR1' => 'ΑΘΗΝΩΝ',
'GR2' => 'ΑΓΙΟ ΟΡΟΣ',
'GR3' => 'ΕΒΡΟΥ',
'GR4' => 'ΑΙΤΩΛΟΑΚΑΡΝΑΝΙΑΣ',
'GR5' => 'ΑΝΑΤΟΛΙΚΗΣ ΑΤΤΙΚΗΣ',
'GR6' => 'ΑΡΓΟΛΙΔΑΣ',
'GR7' => 'ΑΡΚΑΔΙΑΣ',
'GR8' => 'ΑΡΤΑΣ',
'GR9' => 'ΑΧΑΪΑΣ',
'GR10' => 'ΒΟΙΩΤΙΑΣ',
'GR11' => 'ΓΡΕΒΕΝΩΝ',
'GR12' => 'ΔΡΑΜΑΣ',
'GR13' => 'ΔΥΤΙΚΗΣ ΑΤΤΙΚΗΣ',
'GR14' => 'ΔΩΔΕΚΑΝΗΣΟΥ',
'GR15' => 'ΕΥΒΟΙΑΣ',
'GR16' => 'ΕΥΡΥΤΑΝΙΑΣ',
'GR17' => 'ΖΑΚΥΝΘΟΥ',
'GR18' => 'ΗΛΕΙΑΣ',
'GR19' => 'ΗΜΑΘΙΑΣ',
'GR20' => 'ΗΡΑΚΛΕΙΟΥ',
'GR21' => 'ΘΕΣΠΡΩΤΙΑΣ',
'GR22' => 'ΘΕΣΣΑΛΟΝΙΚΗΣ',
'GR23' => 'ΙΩΑΝΝΙΝΩΝ',
'GR24' => 'ΚΑΒΑΛΑΣ',
'GR25' => 'ΚΑΡΔΙΤΣΑΣ',
'GR26' => 'ΚΑΣΤΟΡΙΑΣ',
'GR27' => 'ΚΕΡΚΥΡΑΣ',
'GR28' => 'ΚΕΦΑΛΛΗΝΙΑΣ',
'GR29' => 'ΚΙΛΚΙΣ',
'GR30' => 'ΚΟΖΑΝΗΣ',
'GR31' => 'ΚΟΡΙΝΘΙΑΣ',
'GR32' => 'ΚΥΚΛΑΔΩΝ',
'GR33' => 'ΛΑΚΩΝΙΑΣ',
'GR34' => 'ΛΑΡΙΣΑΣ',
'GR35' => 'ΛΑΣΙΘΙΟΥ',
'GR36' => 'ΛΕΣΒΟΥ',
'GR37' => 'ΛΕΥΚΑΔΑΣ',
'GR38' => 'ΜΑΓΝΗΣΙΑΣ',
'GR39' => 'ΜΕΣΣΗΝΙΑΣ',
'GR40' => 'ΞΑΝΘΗΣ',
'GR41' => 'ΠΕΙΡΑΙΩΣ',
'GR42' => 'ΠΕΛΛΑΣ',
'GR43' => 'ΠΙΕΡΙΑΣ',
'GR44' => 'ΠΡΕΒΕΖΑΣ',
'GR45' => 'ΡΕΘΥΜΝΗΣ',
'GR46' => 'ΡΟΔΟΠΗΣ',
'GR47' => 'ΣΑΜΟΥ',
'GR48' => 'ΣΕΡΡΩΝ',
'GR49' => 'ΤΡΙΚΑΛΩΝ',
'GR50' => 'ΦΘΙΩΤΙΔΑΣ',
'GR51' => 'ΦΛΩΡΙΝΑΣ',
'GR52' => 'ΦΩΚΙΔΑΣ',
'GR53' => 'ΧΑΛΚΙΔΙΚΗΣ',
'GR54' => 'ΧΑΝΙΩΝ',
'GR55' => 'ΧΙΟΥ',

);

return $states;
}