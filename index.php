<?php
    require "Autoload.php";
    
    Autoload::registerAutoloader();
    
    use form\Form as Form;
?>
<html>
    <head>
        <title>Form Class</title>
    </head>
    <body>
        <h3>Login Form</h3>
        <?php
            $form = new Form("POST", $_SERVER['PHP_SELF']);
            
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Login",
                    "fieldType"         => "text",
                    "fieldPostName"     => "login",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
                 
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Password",
                    "fieldType"         => "password",
                    "fieldPostName"     => "password",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
            
            $form->addSubmitButton()
                 ->setAttributes(array(
                    "fieldLabel"        => "Login",
                    "fieldType"         => "submit",
                    "fieldPostName"     => "doLogin"
                 ));
            
            echo $form->printForm();
        ?>
        
        <h3>add new product</h3>
        <?php
            $form = new Form("POST", $_SERVER['PHP_SELF']);
            
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Product name",
                    "fieldType"         => "text",
                    "fieldPostName"     => "prod_name",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
                 
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Product prize",
                    "fieldType"         => "text",
                    "fieldPostName"     => "prod_prise",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
                 
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Product count",
                    "fieldType"         => "text",
                    "fieldPostName"     => "prod_count",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
            
            $form->addSubmitButton()
                 ->setAttributes(array(
                    "fieldLabel"        => "add product",
                    "fieldType"         => "submit",
                    "fieldPostName"     => "addProd"
                 ));
            
            echo $form->printForm();
        ?>
        
        <h3>register new account</h3>
        <?php
            $form = new Form("POST", $_SERVER['PHP_SELF']);
            
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Login",
                    "fieldType"         => "text",
                    "fieldPostName"     => "user_login",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
                 
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Email",
                    "fieldType"         => "text",
                    "fieldPostName"     => "user_mail",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
                 
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Password",
                    "fieldType"         => "password",
                    "fieldPostName"     => "user_passwd",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));
                 
            $form->addTextField()
                 ->setAttributes(array(
                    "fieldLabel"        => "Repeat password",
                    "fieldType"         => "password",
                    "fieldPostName"     => "repeat_passwd",
                    "fieldMaxLength"    => 50,
                    "fieldSize"         => 50
                 ));

            $form->addSubmitButton()
                 ->setAttributes(array(
                    "fieldLabel"        => "add new account",
                    "fieldType"         => "submit",
                    "fieldPostName"     => "addUser"
                 ));
            
            echo $form->printForm();
        ?>
    </body>
</html>