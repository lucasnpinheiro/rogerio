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
use Bootstrap\View\Helper\BootstrapFormHelper;

class MyFormHelper extends BootstrapFormHelper {

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

    public function data($campo, $options = array()) {
        $default = ['type' => 'text', 'class' => 'data'];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($campo, $options);
    }

    public function moeda($campo, $options = array()) {
        $default = ['type' => 'text', 'class' => 'moeda'];
        $options = \Cake\Utility\Hash::merge($default, $options);
        return $this->input($campo, $options);
    }

    public function select2($fieldName, array $options = array(), array $config = array()) {
        $config += ['language' => "pt-BR"];
        $options += ['id' => $this->_domId($fieldName)];
        $options += ['type' => 'select'];
        $options += ['empty' => false];
        if (isset($config['dados'])) {
            $options += $this->complementoSelect2($config['dados']);
            unset($config['dados']);
        }

        if (isset($config['tokenSeparators'])) {
            $options['help'] = 'Tipo(s) de separador(es) "' . implode('" ', $config['tokenSeparators']) . '"';
        }

        $this->Html->css('/select2-4.0.0/dist/css/select2.min.css', ['block' => 'css']);
        $this->Html->script('/select2-4.0.0/dist/js/select2.min.js', ['block' => 'script']);
        $this->Html->script('/select2-4.0.0/dist/js/i18n/pt-BR.js', ['block' => 'script']);
        $this->Html->scriptBlock("
            jQuery('document').ready(function(){
                $('#" . $options['id'] . "').select2(" . json_encode($config) . ");
            });
        ", ['block' => 'script']);
        return $this->input($fieldName, $options);
    }

    public function complementoSelect2($dados) {
        $retorno = array();
        if (trim($dados) != '') {
            foreach (json_decode($dados, true) as $value) {
                $retorno['options'][$value] = $value;
                $retorno['default'][] = $value;
            }
        }
        return $retorno;
    }

}
