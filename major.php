<!to be kept in htdocs under xampp folder>
<html>
<head>
<style>
body{
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
}
</style>
<body bgcolor="#E6E6FA" >

</body>
</head>
</html>
<?php
$text = "I went to bank to deposit money.The teacher entered the class, turning on the switch of lights, she announced about the presentation. A boy named Ashwin was asked to speak a few lines in order to showcase his speaking skills in front of the whole class. He decided to start with his favorite sport which was cricket. He explained everyone about his love for that sport. He further added that he has a collection of cricket bats. And one of them is his favorite. When he was young, he use to carry his bat every where with him. When ashwin realised that everyone in the class started getting bored. He decided to switch back the topic. He started speaking about a recent incident that happened at a commercial building, bank near his house. A case of an occurrence of robbery.. Ashwin realised the class started gaining interest, so he switched back to the main topic. He told everyone about the place he loves to go when he is upset. It is a slope near the river basically a bank. Then he started talking about birds and admitted a weird thing. His favorite bird was bat. Everyone was in deep shock. He surprised everyone by talking about his favorite insect, cricket. He later told everyone favorite garments, suit made of very fine texture that was smooth to touch. He told them about the law system and how it was going wrong. He saw police charging a person fine of money for no reason. He also disclosed that he was an athlete, once it was a very important race tournament and he got injured. But he decided to bear the pain. Handled it and continue the race. He decided to say a few lines about his favorite animal. It was a wild bear. Later, he changed the topic and told everyone about the girl he use to like. He decided to go on a date with her. But later the girl decided to dump him, and broke his heart. To seek everybody’s attention. He became emotional and left the classroom in tears.";
$wsd = array("date", "show","switched","cricket","bat","order","bank","fine","race","dump","left","bear");
$n = count($wsd);
//echo $text;
$new_t = preg_split('/[.]/',$text);
$no_sen = sizeof($new_t);
for($z=0;$z<$no_sen;$z++){
$words = explode(" ",$new_t[$z]);
$sen_size = sizeof($words);
for($i=0;$i<$sen_size;$i++){
$j=0;
while($j<$n){
if($words[$i] == $wsd[$j]){
echo "<a href='http://127.0.0.1:5000/predict?sent=$new_t[$z]&word=$wsd[$j]'>$wsd[$j]</a>"; //wsd[$j] and $new_t[$z]
echo " ";
$j=6000;}   //if
else
{$j++;}
}   //while
if($j!=6000){
echo $words[$i];
echo " ";
}     //6000 if
}   //for loop
} //last for loop
?>