<?php

namespace App\Services;

class Form
{

    protected $form;

    public function __construct(){

        $this->getForm();
    }

    public function getForm()
    {

        $this->form = [
            'base' => [
                'value' => filter_input(INPUT_POST, 'base'),
                'error' => null
            ],
            'reference' => [
                'value' => filter_input(INPUT_POST, 'reference'),
                'error' => null
            ],
            'thresholdUp' => [
                'value' => filter_input(INPUT_POST, 'thresholdUp'),
                'error' => null
            ],
            'thresholdDown' => [
                'value' => filter_input(INPUT_POST, 'thresholdDown'),
                'error' => null
            ],
            'price' => [
                'value' => filter_input(INPUT_POST, 'price'),
                'error' => null
            ]
        ];
    }


    public function validForm()
    {

        if ($this->form['base']['value'] === 'Choix de la base') {
            $this->form['base']['error'] = 'Veuillez choisir une base';
        }
        if ($this->form['reference']['value'] === 'Choix de la référence') {
            $this->form['reference']['error'] = 'Veuillez choisir une référence';
        }
        if ($this->form['thresholdUp']['value'] === '' && $this->form['thresholdUp']['value'] <= 0) {
            $this->form['thresholdUp']['error'] = 'Veuillez remplir le champs ci-dessus';
        }
        if ($this->form['thresholdUp']['value'] === '' && $this->form['thresholdDown']['value'] <= 0) {
            $this->form['thresholdUp']['error'] = 'Veuillez remplir le champs ci-dessus';
        }
        if ($this->form['price']['value'] === '' && $this->form['price']['value'] <= 0) {
            $this->form['price']['error'] = 'Veuillez remplir le champs ci-dessus';
        }
    }

    public function submitForm()
    {
    }
}
