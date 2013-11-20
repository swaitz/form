<?php

    namespace form\field;
    
    use form\field\FieldAbstract as FieldAbstract;

    class Submit extends FieldAbstract {
        protected $formElement          = "<p><input type='{fieldType}' value='{fieldLabel}' name='{fieldPostName}'></p>";
        protected $form                 = NULL;
        protected $allowedFieldTypes    = array("submit");
        protected $fieldType            = "submit";
        protected $fieldLabel           = "";
        protected $fieldPostName        = "";
    }