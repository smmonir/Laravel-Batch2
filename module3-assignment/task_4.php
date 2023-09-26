<?php
function getAvarageGrade($sGrades){
	foreach($sGrades as $student => $details) {
		echo "Student : $student ";
		$totalgpa=0;
		foreach($details as $key => $value) {
			$totalgpa =$totalgpa +  $value;
		}
		echo " average grade is: ".$totalgpa/3;
		echo "<br>";		
	}
  
}
$studentGrades  = array(
    "std_1" => array(
        "Math" => 5,
        "English" => 4,
		"Science" => 4
    ),
    "std_2" => array(
        "Math" => 4,
        "English" => 4,
		"Science" => 3
    )
	,
    "std_3" => array(
        "Math" => 4,
        "English" => 5,
		"Science" => 5
    )
);
getAvarageGrade($studentGrades);
?>
