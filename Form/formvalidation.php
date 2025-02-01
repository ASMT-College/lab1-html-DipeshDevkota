<?php

$nameError = $ageError= $descError ="";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $isValid= true;
    $name= $_POST['name'];
    $age=$_POST['age'];
    $desc=$_POST['desc'];

    if($name == '')
    {
        $nameError = "Your name is required";
        $isValid = false;
    }
    elseif (strpos($name, ' ') !== false) {
        $nameError = "Your name cannot contain spaces";
        $isValid = false;
    }
    elseif(strlen($name) > 20)
    {
        $nameError = "Your name cannot exceed 20 characters";
        $isValid = false;
    }


    if($age=="")
    {
        $ageError="Age is required";
        $isValid=false;
    }
    else{
        if(!is_numeric($age) || $age <18)
        {
            $ageError= 'You must be above 18 years of age';
            $isValid= false;
        }
    }


    if($desc=="")
    {
        $descError="Description is required";
        $isValid= false;
    }
    else{
        if(str_word_count($desc)>200)
        {
            $descError= 'Description must not be more than 200 words';
            $isValid= false;
        }
    }

    $name=htmlspecialchars($name);
    $desc=htmlspecialchars($desc);
}


if($isValid)
{
    echo "<p class='success'>Form submitted successfully!</p>"
}

?>