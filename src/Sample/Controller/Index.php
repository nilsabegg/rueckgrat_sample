<?php

namespace Sample\Controller;

use \Rueckgrat\Controller\Controller as Controller;

/**
 * @todo phpass integration
 */
class Index extends Controller
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

    public function index()
    {
        $this->pimple['view.rootPath'] = 'index/index';
        $this->view = $this->pimple['view'];
        $this->renderPage();
    }

}
