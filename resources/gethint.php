<?php
// Fill up array with names
$a[]="Sophia";
$a[]="Emma";
$a[]="Isabella";
$a[]="Olivia";
$a[]="Ava";
$a[]="Lily";
$a[]="Chloe";
$a[]="Madison";
$a[]="Emily";
$a[]="Abigail";
$a[]="Addison";
$a[]="Mia";
$a[]="Madelyn";
$a[]="Ella";
$a[]="Hailey";
$a[]="Kaylee";
$a[]="Avery";
$a[]="Kaitlyn";
$a[]="Riley";
$a[]="Aubrey";
$a[]="Brooklyn";
$a[]="Peyton";
$a[]="Layla";
$a[]="Hannah";
$a[]="Charlotte";
$a[]="Bella";
$a[]="Natalie";
$a[]="Sarah";
$a[]="Grace";
$a[]="Amelia";
$a[]="Kylie";
$a[]="Arianna";
$a[]="Anna";
$a[]="Elizabeth";
$a[]="Sophie";
$a[]="Claire";
$a[]="Lila";
$a[]="Aaliyah";
$a[]="Gabriella";
$a[]="Elise";
$a[]="Lillian";
$a[]="Samantha";
$a[]="Makayla";
$a[]="Audrey";
$a[]="Alyssa";
$a[]="Ellie";
$a[]="Alexis";
$a[]="Isabelle";
$a[]="Savannah";
$a[]="Evelyn";
$a[]="Aiden";
$a[]="Jackson";
$a[]="Mason";
$a[]="Liam";
$a[]="Jacob";
$a[]="Jayden";
$a[]="Ethan";
$a[]="Noah";
$a[]="Lucas";
$a[]="Logan";
$a[]="Caleb";
$a[]="Caden";
$a[]="Jack";
$a[]="Ryan";
$a[]="Connor";
$a[]="Michael";
$a[]="Elijah";
$a[]="Brayden";
$a[]="Benjamin";
$a[]="Nicholas";
$a[]="Alexander";
$a[]="William";
$a[]="Matthew";
$a[]="James";
$a[]="Landon";
$a[]="Nathan";
$a[]="Dylan";
$a[]="Evan";
$a[]="Luke";
$a[]="Andrew";
$a[]="Gabriel";
$a[]="Gavin";
$a[]="Joshua";
$a[]="Owen";
$a[]="Daniel";
$a[]="Carter";
$a[]="Tyler";
$a[]="Cameron";
$a[]="Christian";
$a[]="Wyatt";
$a[]="Henry";
$a[]="Eli";
$a[]="Joseph";
$a[]="Max";
$a[]="Isaac";
$a[]="Samuel";
$a[]="Anthony";
$a[]="Grayson";
$a[]="Zachary";
$a[]="David";



//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>