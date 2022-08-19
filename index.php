<?php


//  //  key lower or uppercase

// $age =  array("petter"=>"35","ben"=>"37","danish"=>"40");
// print_r(array_change_key_case($age,CASE_LOWER));

// // chunk array

// $color = array("red","green","blue","white","black");

// echo '<pre>';

// print_r(array_chunk($color,2))


// // array-column

// $data  = array(

//  array( 

//  "id" =>123,
//  "firstname" =>"iqbal",
//   "lastname"=>"ali",


//  ),


//  array( 

//  "id" =>456,
//  "firstname" =>"omer",
//   "lastname"=>"khan",


//  ),


//  array( 

//  "id" =>789,
//  "firstname" =>"daniyal",
//   "lastname"=>"syed",


//  )


// );

// $lastnames = array_column($data,"lastname","id");
// echo "<pre>";
// print_r($lastnames);



// // array combine



// $name  = array("petter","john","david");
// $age =  array("35","36","37");

// $c = array_combine($name,$age );

// print_r($c);


// // array count values

// $a =  array("a","dog","a","dog","apple" );
// print_r(array_count_values($a));


// // array diff


// $a1= array("a"=>"red","b"=>"blue","c"=>"green","d"=>"yellow");
// $a2 = array("e"=>"red","f"=>"blue","c"=>"green");

// $result = array_diff($a1, $a2);
// print_r($result);


// // array diff key

//     $a1 =  array("a" => "red","b"=>"blue","c"=>"green");
//     $a2 =  array("a" => "red","f"=>"blue","c"=>"green");
    
//   $result = array_diff_key($a1,$a2);
   
//    print_r($result);



// array filp

// $a1 = array("a"=>"red","b"=>"blue","c"=>"green");
// $result = array_flip($a1);

// print_r($result);

// array intersect


// $a1 = array("a"=>"red","b"=>"blue","c"=>"green");
// $a2 = array("a"=>"red","b"=>"blue","c"=>"orange");

// $result  = array_intersect($a1, $a2);

// print_r($result);



// array map

// function myfunction($num){

// return ($num*$num);




// }

// $a = array(1,2,3,4,5);
// echo "<pre>";
// print_r(array_map("myfunction", $a));




// array key exisit


// $a = array("honda"=>"125","cd"=>"70");

// if(array_key_exists("honda", $a))

// {

// echo "key exist";


// }

// else{

// echo "key does not exist";


// }


//array key

// $a = array("a"=>"orange","b"=>"green","c"=>"yellow");
// print_r(array_keys($a));


//array merge


// $a1 = array("red","blue");
// $a2 = array("green","white");
// echo "<pre>";
// print_r(array_merge($a1,$a2));


// stprintf

// $number = 9;
// $str = "multan";

// $var = sprintf("there are %u million bicycle in %s",$number,$str);

// echo $var;



// sscanf


// $str = "age:30 weight:60kg";

// sscanf($str, "age:%d weight:%dkg",$age,$weight);

// var_dump($age,$weight);



// strchr

// echo strchr("hello world","world");


// strcmp


// echo strcmp("hello world","hello world");


// strcol


// echo strcoll("hello word","hello word");


// stripos



// echo stripos("i love you, i love you too", "you");


// echo strlen("Hello world");

// strrev


// echo strrev("hello word");


// striposs


// echo strripos("i love you, i love you too","you");



// strspn


// echo strspn("Hello world!","kHlleo");

// substr_count 


// echo substr_count("Hello world . The world is nice","nice");



  $number = 13;
  $str = "multan";

  $result = sprintf("there are %u milloin cycle in %s",$number,$str);

   echo $result;

 	?> 




