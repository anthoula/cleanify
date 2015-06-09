<?php /* Smarty version 3.1.24, created on 2015-06-10 01:05:59
         compiled from "templates/order.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:192989194855777157cf9436_71921521%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90aa56d74c119b31ee431b1c6039be59e7112fd' => 
    array (
      0 => 'templates/order.tpl',
      1 => 1433891117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192989194855777157cf9436_71921521',
  'variables' => 
  array (
    'name' => 0,
    'phone' => 0,
    'email' => 0,
    'street' => 0,
    'city' => 0,
    'state' => 0,
    'zip' => 0,
    'service_date' => 0,
    'service_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55777157de2827_49444385',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55777157de2827_49444385')) {
function content_55777157de2827_49444385 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/Applications/MAMP/htdocs/cleanify-app/Smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/Applications/MAMP/htdocs/cleanify-app/Smarty/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '192989194855777157cf9436_71921521';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cleanify Customer Order Form</title>
    <meta name="description" content="This is a one page order form.">
    <meta name="author" content="Anthoula Wojczak">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNODOLNfvTOLcs8vaXOwXOoXUW82qJsTU"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/app.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="three columns">
                    <img src="assets/imgs/cleanify-logo.png" width="107" height="53" alt="Cleanify">
                </div>
                <div class="nine columns">
                    <h3>Your Cleaning Order Details</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="seven columns">
                <h5>Contact Information</h5>
                <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
<br/>
                <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br /><br />
                <input type="text" id="street" class="full" value="<?php echo $_smarty_tpl->tpl_vars['street']->value;?>
" placeholder="Street Address" />
                <input type="text" id="city" class="half" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
" placeholder="City" />
                <input type="text" id="state" class="half" value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
" placeholder="State" />
                <input type="text" id="zip" class="half" value="<?php echo $_smarty_tpl->tpl_vars['zip']->value;?>
" placeholder="Zip Code" />
                <input type="button" onclick="cleanify.updateLocation()" value="Update Location" />
            </div>
            <div class="five columns">
                <div id="map-canvas"></div>
            </div>
        </div>
        <div class="row" id="service">
            <div class="six columns">
                <h5>Service Information</h5>
                <h5>Your Extras</h5>
                <ul id="sortable1" class="connectedSortable">
                    <li data-price="0">Garden $0</li>
                    <li data-price="0">Musical Instrument $0</li>
                </ul>
                <h5>Add Extras</h5>
                <ul id="sortable2" class="connectedSortable">
                    <li class="add-extra" data-price="10">Extra A (+ $10)</li>
                    <li class="add-extra" data-price="24">Extra B (+ $24)</li>
                    <li class="add-extra" data-price="50">Extra C (+ $50)</li>
                </ul>
            </div>
            <div class="six columns">
                <h6>Date of Service:</h6>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['service_date']->value,"%B %e, %Y");?>

                <h6>Arrival Time:</h6>
                <?php echo $_smarty_tpl->tpl_vars['service_time']->value;?>

                <h6>Service Type:</h6>
                Deep Clean
                <h6>Booking Notes:</h6>
                Enter from Taylor Street, walk down corridor, and find lock box with key. Key code is 4582. Beware of Doberman Pinscher. He doesn't like anyone cleaning his room. Good luck!<br />
                <div id="total-price">
                    <h5>Order Total: <span id="total">$100.00</span></h5>
                </div>
                <input type="button" onclick="cleanify.placeOrder()" value="Place Order" />
            </div>
        </div>
    </div>
</body>
</html>
<?php }
}
?>