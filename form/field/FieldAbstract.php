<?php
    
    namespace form\field;
    
    use form\Form as Form;
    use exception\CustomException as CustomException;

    abstract class FieldAbstract {
        protected $form             = NULL;
        protected $formElement      = "";
        protected $allowedFieldTypes= array();
        protected $fieldType        = "";
        protected $fieldLabel       = "";
        protected $fieldPostName    = "";
        protected $fieldSize        = 0;
        
        public function __construct(Form $form) {
            $this->form = $form;
            
            return $this;
        }
        
        public function setAttributes(array $fieldArray) {
            if (!isset($fieldArray['fieldType'])) {
                throw new CustomException("Field 'fieldType' is missing!");
            }
            
            if(isset($fieldArray['fieldType']) && !in_array($fieldArray['fieldType'], $this->allowedFieldTypes)) {
                throw new CustomException("Not supported field type: " . $fieldArray['fieldType']);
            }
        
            $formElement = $this->formElement;
            foreach($fieldArray as $fieldName => $fieldvalue) {
                $this->setVariables($fieldName, $fieldvalue);
                $formElement = str_replace ("{" . $fieldName . "}", $fieldvalue, $formElement);
            }
            
            $this->addFormField($formElement);
            unset($formElement);
        }
        
        public function getHtmlData() {
            return $this->formElement;
        }
        
        protected function addFormField($formFieldHtml) {
            if(!is_string($formFieldHtml)) {
                throw new CustomException("Only strings are allowed");
            }
            
            $formFields = $this->form->getFormFields();
            
            array_push($formFields, $formFieldHtml);
            
            $this->form->setFormFields($formFields);
            unset($formFields);
        }
        
        protected function setVariables($variableName, $variableValue) {
            if(!isset($this->$variableName)) {
                throw new CustomException("Unknown variable: " . $variableName);
            }
            
            $this->$variableName = $variableValue;
        }
    }