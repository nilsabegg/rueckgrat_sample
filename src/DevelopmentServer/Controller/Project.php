<?php

namespace DevelopmentServer\Controller;

use \Rueckgrat\Controller\Controller as Controller;

/**
 * @todo phpass integration
 */
class Project extends Controller
{

    /**
     * has model
     *
     * This controller has no related model.
     *
     * @var boolean
     */
    protected $hasModel = false;

    /**
     * secured
     *
     * This controller only contains public sites.
     *
     * @var boolean
     */
    protected $secured = false;

    public function create()
    {
        $this->pimple['view.rootPath'] = 'project/create';
        $this->view = $this->pimple['view'];
        $this->pimple['view.rootPath'] = 'index/_navigation';
        $navigation = $this->pimple['view'];
        $navigation->set('rootUrl', $this->rootUrl);
        $this->template->set('navigation', $navigation->render());
        $this->renderPage();
    }

    public function index()
    {
        $this->pimple['view.rootPath'] = 'project/index';
        $this->view = $this->pimple['view'];
        $this->pimple['view.rootPath'] = 'index/_navigation';
        $navigation = $this->pimple['view'];
        $navigation->set('rootUrl', $this->rootUrl);
        $this->template->set('navigation', $navigation->render());
        $this->renderPage();
    }
}
