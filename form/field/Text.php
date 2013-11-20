<?php

    namespace form\field;
    
    use form\field\FieldAbstract as FieldAbstract;

    class Text  extends FieldAbstract {
        protected $formElement          = "<p>{fieldLabel}:<br><input type='{fieldType}' name='{fieldPostName}' maxlength='{fieldMaxLength}' size='{fieldSize}'></p>";
        protected $form                 = NULL;
        protected $allowedFieldTypes    = array("text", "password");
        protected $fieldType            = "text";
        protected $fieldLabel           = "";
        protected $fieldPostName        = "";
        protected $fieldMaxLength       = 50;
        protected $fieldSize            = 30;
    }