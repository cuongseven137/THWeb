<?php

// Định tuyến nội dung

class Router
{
    private $domain = 'http://localhost/vnskills.com/bai5/';
    private $curPage = 'home';
    private $action = 'show';

    /**
     * Router constructor.
     * @param $domain
     * @param $curPage
     * @param $action
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return mixed
     */
    public function getCurPage()
    {
        $page = 'home';

        if (isset($_GET['p'])) {
            $page = $_GET['p'];
        }

        $this->curPage = $page;

        return $this->curPage;
    }

    /**
     * @param mixed $curPage
     */
    public function setCurPage($curPage)
    {
        $this->curPage = $curPage;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        $action = 'show';

        if (isset($_GET['a'])) {
            $action = $_GET['a'];
        }

        $this->action = $action;

        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @param mixed get $url
     * Đọc URL đường dẫn hiện tại
     */
    public function getCurrentURL(){
        $fullURL = $this->getDomain();

        if ($this->getCurPage() != 'home'){
            $fullURL .= '?p=' . $this->getCurPage();

            if ($this->getAction() != 'show'){
                $fullURL .= '&a=' . $this->getAction();
            }
        }else {
            if ($this->getAction() != 'show'){
                $fullURL .= '?a=' . $this->getAction();
            }
        }

        return $fullURL;
    }

    /**
     * @param mixed set goto $url
     * Lấy chuỗi cần nhảy tới
     */
    public function setGotoURL($page, $action){
        $gotoURL = $this->getDomain();

        if ($page != 'home'){
            $gotoURL .= '?p=' . $page;

            if ($action != 'show'){
                $gotoURL .= '&a=' . $action;
            }
        }else {
            if ($action != 'show'){
                $gotoURL .= '?a=' . $action;
            }
        }

        return $gotoURL;
    }

    /**
     * @param mixed goto $url
     * Nhảy tới URL chỉ định
     */

    public function gotoURL($page, $action) {
        $gotoNewURL = $this->setGotoURL($page, $action);
//      header("Location: " . $gotoNewURL);

    }

}