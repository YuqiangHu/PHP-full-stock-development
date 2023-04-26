<?php
if($_GET['country']!="")
{

    $states = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');

    echo "<td>*Month of birth</td>";
       echo "<td id='states'>";
        
    echo "<select name='month' id='state'>";
    
    echo "<option value='default' selected='selected'>Please select Month.</option>";
    
    foreach($states as $value)
    {
        echo "<option value='$value'>$value</option>";
    }
    
    echo "</select>";
    
    echo  "</td>";
 }
?>
