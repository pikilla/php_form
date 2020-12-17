<?php 
var_dump($_POST);

function verifTel($tel){
    $regex1="/^\+33[1-9][0-9]{8}$/";
    if(preg_match($regex1,$tel)){
        echo "le tel est bon<br>";
    }
    else{echo "le tel n'est pas bon<br>";}
}
function verifMail($mail){
    $regex='/^([a-zA-Z][\w\.-]*[a-zA-Z0-9])@([a-zA-Z][\w\.-]*[a-zA-Z0-9])\.([a-zA-Z]{2,})$/';
    if(preg_match($regex,$mail)){
        echo "le mail est bon<br>";
    }
    else{echo "le mail n'est pas bon<br>";}
} 
function verifPassword($password1,$password2){
   $regex1="/.*[0-9]/";
   $regex2="/.*[a-z]/";
   $regex3="/.*[A-Z]/";
   $regex4="/\W/";
   $regex5="/.{8,}/";
   $arrayRegex=array($regex1=>"il manque un chiffre",$regex2=>"il manque une minuscule",$regex3=>"il manque une majuscule",$regex4=>"il manque un caractere spécial",$regex5=>"le mot de passe doit faire 8 caractere minimum");
   
   if($password1==$password2){
       if($password1!="user"&&$password1!="admin"&&$password1!="utilisateur"&&$password1!="guest"){
            foreach($arrayRegex as $key=>$value){
                if(!preg_match($key,$password1)){
                    echo "$value<br>";
                
                } 
            
            }  
       }else{echo "le mot de passe doit etre different de user admin utilisateur ou guest";}
    }
    else{
        echo 'les mots de passe sont differents<br>';
    }
}

verifTel($_POST['tel']);
verifMail($_POST['email']);

verifPassword($_POST['password'],$_POST['password2']);
?>