<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP Helper
 * @author Admin
 */

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

class CustomizadoHelper extends Helper
{

    public $helpers = [
        'Html' => [
            'className' => 'Bootstrap.BootstrapHtml'
        ],
        'Form' => [
            'className' => 'Bootstrap.BootstrapForm'
        ],
        'Paginator' => [
            'className' => 'Bootstrap.BootstrapPaginator'
        ],
        'Modal' => [
            'className' => 'Bootstrap.BootstrapModal'
        ]
    ];

    public function data($campo, $options = array())
    {
        $default = ['type' => 'text', 'class' => 'data'];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->Form->input($campo, $options);
    }

}
