<?php
    
    namespace form;
    
    use form\field\Text as Text;
    use form\field\Submit as Submit;
    
    class Form {
        protected $formStart    = "<form method='{formMethod}' action='{formAction}'>";
        protected $formEnd      = "</form>";
        protected $formFields   = array();
        
        public function __construct($method="POST", $action=NULL) {
            $this->formStart = str_replace("{formMethod}", $method, $this->formStart);
            $this->formStart = str_replace("{formAction}", $action, $this->formStart);
            
            return $this;
        }
        
        public function addTextField() {
            return new Text($this);
        }
        
        public function addSubmitButton() {
            return new Submit($this);
        }
        
        public function getFormFields() {
            return $this->formFields;
        }
        
        public function setFormFields(array $formFields) {
            $this->formFields = $formFields;
        }
        
        public function printForm() {
            $form = $this->formStart . PHP_EOL;
            $formFields = $this->getFormFields();
            if(!empty($formFields)) {
                foreach($formFields as $formFieldKey => $formFieldHtml) {
                    $form .= $formFieldHtml . PHP_EOL;
                }
            }
            unset($formFields);
            $form .= $this->formEnd . PHP_EOL;
            
            return $form;
        }
    }