<?php
    include_once 'Smarty/Smarty.class.php';

    $smarty = new Smarty();
    $smarty->template_dir = 'templates/';
    $smarty->compile_dir = 'templates_c/';

    // user info
    $smarty->assign('name', 'anthoula wojczak');
    $smarty->assign('street', 'One Ferry Building');
    $smarty->assign('city', 'San Francisco');
    $smarty->assign('state', 'CA');
    $smarty->assign('zip', '94111');
    $smarty->assign('phone', '1-415-555-6750');
    $smarty->assign('email', 'supercustomer@cleanify.com');

    // order info
    $smarty->assign('service_date', '2015-07-15');
    $smarty->assign('service_time', '10:30 - 11:30 am');

    $smarty->display('order.tpl');
?>