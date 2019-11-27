<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$age = 40;
if($age <= 18)
{
  echo 'EXO 1:  vous êtes majeur';
}
else
{
  echo 'EXO 1:  Vous êtes mineur';
  }
  ?>
<hr>
 
<?php
$age = 30;
$gender = 'homme';
if($age >=18 && $gender == 'homme')
{
    echo 'EXO 2:  vous êtes un homme et vous êtes majeur';
}elseif($age <18 && $gender == 'homme'){
    echo 'EXO 2:  vous êtes un homme et vous êtes mineur';
}elseif($age >= 18 && $gender == 'femme'){
    echo 'EXO 2:  vous êtes une femme et vous êtes majeure';   
}else {
     echo'EXO 2:  vous êtes une femme et vous êtes mineure';
}       
?>
<hr>

<?php
$gender = 'femme';
if($gender == 'homme')
{
    echo 'EXO 3:  C\'est un développeur !!!';
}
else 
{
    echo 'EXO 3:  C\'est une développeuse !!!';
  }
?>
<hr>

<?php
$age = 8;
if($age >= 18)
{
    echo 'EXO 4: méthode if else: tu es majeur';
}
else{
    echo 'EXO 4: méthode if else: tu n\'es pas majeur';
}
?>
<hr> 

<?php
$age = 30;
$resultAge = ($age <= 18)? 'EXO 4: méthode True False:   vous êtes mineur' : 'EXO 4: méthode True False:    vous êtes majeur' ;
echo $resultAge 
?>

</body>
</html>