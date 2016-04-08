<?php
/**
 * @package     mod_wgmodalcustomhtml - WG Modal Custom HTML
 * @version     1.0
 * @created     Abr 2016
 *
 * @author      Lauro W. Guedes
 * @email       leowgweb@gmail.com
 * @website     http://leowgweb.com
 * @support     Suporte - http://leowgweb.com/contato
 * @copyright   Copyright (C) 2016 Leowgweb.Todos os Direitos Reservados.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 */
defined('_JEXEC') or die;

class modWgModalCustomHtmlHelper{

    /**
     * Trata a altura e a largura insiradas no backend
     * evitando que o usuário coloque uma string não numérica
     *
     * @params - valor do campo de altura ou largura
     * @access public
     */
    public static function processWidth( $params )
    {

        if (!is_numeric($params) || empty($params)){
            $value = '60%';
        }else{
            $value = $params.'%';
        }

        return $value;
    }

    /**
     * Trata a atribuição das dependências do módulo
     * @access public
     */
    public static function pullDependencies()
    {
        $doc   = JFactory::getDocument();
        $app = JFactory::getApplication();
        $template = $app->getTemplate();

        // Estilos JS
        if(file_exists(JPATH_BASE.'/templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/js/remodal.js')){
            $doc->addScript(JURI::base().'templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/js/remodal.js');
        }else{
            $doc->addScript(JURI::base().'modules/mod_wgmodalcustomhtml/tmpl/assets/js/remodal.js');
        }

        // Estilos CSS
        if(file_exists(JPATH_BASE.'/templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/css/style.css')){
            $doc->addStyleSheet(JURI::base().'templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/css/style.css');
        }else{
            $doc->addStyleSheet(JURI::base().'modules/mod_wgmodalcustomhtml/tmpl/assets/css/style.css');
        }

        if(file_exists(JPATH_BASE.'/templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/css/remodal.css')){
            $doc->addStyleSheet(JURI::base().'templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/css/remodal.css');
        }else{
            $doc->addStyleSheet(JURI::base().'modules/mod_wgmodalcustomhtml/tmpl/assets/css/remodal.css');
        }

        if(file_exists(JPATH_BASE.'/templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/css/remodal-default-theme.css')){
            $doc->addStyleSheet(JURI::base().'templates/'.$template.'/html/mod_wgmodalcustomhtml/assets/css/remodal-default-theme.css');
        }else{
            $doc->addStyleSheet(JURI::base().'modules/mod_wgmodalcustomhtml/tmpl/assets/css/remodal-default-theme.css');
        }
    }

}