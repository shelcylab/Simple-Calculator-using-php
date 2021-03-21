<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstNo = $_POST['firstNo'];  
        $secondNo = $_POST['secondNo'];
		$operator = $_POST['operator']; 
     
	if (isset($operator) && $operator=="+") 
	      {
		  $sum =  $firstNo+$secondNo;
		  echo "The result of $firstNo + $secondNo is: ".$sum;}
          else if(isset($operator) && $operator=="-") 
          {
		  $sum =  $firstNo-$secondNo;
		  echo "The result of $firstNo - $secondNo is: ".$sum;}
        else if(isset($operator) && $operator=="/") 
          {
		  $sum =  $firstNo/$secondNo;
		  echo "The result of $firstNo / $secondNo is: ".$sum;}
        else if(isset($operator) && $operator=="*") 
          {
		  $sum =  $firstNo*$secondNo;
		  echo "The result of $firstNo * $secondNo is: ".$sum;}		
}  
?>   