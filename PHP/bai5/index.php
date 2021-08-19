<?php

    include_once ('classes/Database.php');
    include_once ('classes/Router.php');
    include_once ('model/ModelMenu.php');
    include_once ('controller/ControllerMenu.php');
    include_once ('view/ViewPage.php');

    include_once ('view/ViewMenu.php');

    $myRouter = new Router();
    $pageView = new ViewPage();

    $myDB = new Database();
    $menuModel = new ModelMenu($myDB);
    $menuController = new ControllerMenu($menuModel,$myDB);
    $menuView = new ViewMenu($menuModel,$menuController);


    $pageView->ShowHeader();
    $menuView->ShowMenu();

    if ($myRouter->getCurPage() == 'home') {
        include_once ('view/ViewFeature.php');
        $featureView = new ViewFeature();
        $featureView->ShowFeature();
    }

    if ($myRouter->getCurPage() == 'addmenu') {
        $menuView->ShowAddForm();
        $menuController->getInputs('text','link','action');
    }

    if ($myRouter->getCurPage() == 'editmenu') {
        $menuView->ShowEditForm();
//        $menuController->getInputs('text','link','action');
    }

    if ($myRouter->getCurPage() == 'listmenu') {
        $menuView->ShowList($myDB);
    }


    $pageView->ShowFooter();
    $myDB->Close();

?>

