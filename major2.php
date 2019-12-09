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
$text = "In 1981, party clown and aspiring stand-up comedian Arthur Fleck lives with his mother, Penny, in Gotham City. Gotham is rife with crime and unemployment, leaving segments of the population disenfranchised and impoverished. Arthur suffers from a medical disorder that causes him to laugh at inappropriate times, and depends on social services for medication. After a gang of delinquents criminals attacks Arthur in an alley, his co-worker, Randall, gives him a gun for protection. Arthur invites his neighbor for a social event, public single mother Sophie, to his stand-up comedy show. He began to go on date with her.
While entertaining at a children's hospital, Arthur's gun falls out of his pocket. Randall said a statement that deviates from truth and lies that Arthur bought the gun himself and terminate employment Arthur is fired from his employment.  On the subway, still in his clown makeup, Arthur is beaten by three drunken enterprises businessmen as punishment, he shoots two in self-defense to kill and executes the third. The murders are condemned by billionaire mayoral candidate Thomas Wayne, who strong disapproval labels those envious of more successful people tag as clowns. Demonstrations against Gotham's rich begin, with protesters donning clown masks in Arthur image. Funding cuts shutter something the social service program to stop, leaving Arthur without medication.
Arthur's comedy show goes poorly; he laughs uncontrollably and has difficulty delivering his jokes. His idol, talk show host Murray Franklin, mocks Arthur by showing clips from the routine on his show. Arthur intercepts a letter written by Penny to Thomas, alleging that he is Thomas's illegitimate son, and berates his mother for hiding the truth. At Wayne Manor, Arthur talks to Thomas's young son, Bruce, but flees after a scuffle with butler Alfred Pennyworth. Following a visit from two railway police department detectives investigating Arthur's involvement in the public train murders, Penny feels loss of consciousness and suffers a stroke and is hospitalized.
At a public event, Arthur confronts Thomas, who tells him that Penny is delusional and not his biological mother. In denial, Arthur visits Hospital and steals Penny's court law case file, the file says Penny adopted Arthur as a baby and allowed her abusive boyfriend to harm them both. Penny alleged that Thomas used his influence to fabricate the adoption and commit her to the asylum to hide their affair. Distraught, Arthur goes to the hospital and kills Penny. He returns home and enters Sophie's apartment unannounced. Frightened, Sophie tells him to leave, their previous encounters were Arthur's delusions.
Arthur is invited to appear on Murray show due to the unexpected popularity of his comedy event routine's clips. As he prepares, Arthur is visited by Randall and fellow ex-colleague Gary. Arthur murders Randall, but leaves Gary unharmed for treating him well in the past. En route to the studio, Arthur is pursued by the two detectives onto a train filled with clown protesters. One detective accidentally targets and shoots a protester and incites a riot, allowing Arthur to escape.
Before the show goes live, Arthur requests that Murray introduce him as Joker, a reference to Murray's previous mockery. Arthur walks out of railway cars to applause, transport but tells morbid jokes, admits he killed the men on the public train, and rants about how society abandons the disenfranchised. Arthur then fires and fatally shoot Murray with gun and is arrested as riots break out across all of Gotham. One rioter corners the Wayne family in an alley and murders Thomas and his wife Martha, sparing Bruce. Rioters in an ambulance crash into the police car carrying Arthur act and free him. He smears blood on his face in the form of a smile and smudge smearing and dances to the cheers of the crowd.
At Arkham, Arthur laughs to himself about a joke and tells his psychiatrist she would not understand it. He runs against the order of the law, leaving a trail of bloodied footprints.";

$wsd = array("date", "show","switched","cricket","bat","order","bank","fine","race","dump","left","bear","segments","suffer","gang","lies","fires","executes","condemned","labels","image","stop","letter","stroke","train","case","leaves","shoots","mockery","smears","shoot","morbid","order","tail","smears","break","crash");
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
?>";