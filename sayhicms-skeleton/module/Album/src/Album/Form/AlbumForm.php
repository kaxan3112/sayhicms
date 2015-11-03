<?php
namespace Album\Form;

use Zend\Form\Form;
use Zend\Form\Element\Collection;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('myform');
        $this->add(array(
            'name' => 'price',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required',
                'placeholder' => '0.99',
            ),
            'options' => array(
                'label' => "Price label",
                'bootstrap' => array(
                    'help' => array(
                        'style' => 'block',
                        'content' => 'The price you wish to use'
                    ),
                    'prepend' => array('$'),
                    'append' => array('¢'),
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type' => 'text',
                'required' => 'required',
                'placeholder' => '0.99',
            ),
            'options' => array(
                'label' => "Title",
                'bootstrap' => array(
                    'help' => array(
                        'style' => 'block',
                        'content' => 'The price you wish to use'
                    ),
                    'prepend' => array('$'),
                    'append' => array('¢'),
                ),
            ),
        ));
        
        $actions = new Collection('actions');
        $actions->setAttribute('class', 'form-actions');
 
        $actions->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Save',
                'class' => 'btn btn-primary'
            ),
            'options' => array(
                'bootstrap' => array(
                    'style' => 'inline',
                ),
            ),
        ));
 
        $actions->add(array(
            'name' => 'reset',
            'attributes' => array(
                'type' => 'reset',
                'value' => 'reset',
                'class' => 'btn'
            ),
            'options' => array(
                'bootstrap' => array(
                    'style' => 'inline',
                ),
            ),
        ));
        /*
        $actions = array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Save',
                'class' => 'btn btn-primary'
            ),
            'options' => array(
                'bootstrap' => array(
                    'style' => 'inline',
                ),
            )
        );
        */
        $this->add($actions);
        /*
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
        */
    }
}