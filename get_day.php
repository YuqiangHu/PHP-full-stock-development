<?php
if(isset($_GET['states']))
{
    if($_GET['states']!="")
    {
        switch($_GET['states'])
        {
            case "1": case "3": case "5": case "7": case "8": case "10": case "12":
            $cities = range(1,31);
            break;

            case "4": case "6": case "9": case "11":
            $cities = range(1,30);
            break;

            case "2":
			$cities = range(1,28);
            if (($_GET['countries'] % 4 == 0) && ($_GET['countries'] % 100 != 0) || ($_GET['countries'] % 400 == 0)) {                                 $cities = range(1,29);                              } 

            break;


        }
        echo "<td> *Day of birth</td>";
           echo "<td id='cities'>";

        echo "<select name='day' id='city'>";

        echo "<option value='default' selected='selected'>Please select Day.</option>";

        foreach($cities as $value)
        {
            echo "<option value='$value'>$value</option>";
        }

        echo "</select>";

        echo  "</td>";
    }
}
?>