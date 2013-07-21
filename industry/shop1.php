<?php
include('lock.php');
$ses_sql=mysql_query("select * from customers");
$rows=mysql_num_rows($ses_sql);
$i=0;
while($i<$rows){
                $u_fname=mysql_result($search,$i,"fname");
                $u_lname=mysql_result($search,$i,"lname");
                $u_sex=mysql_result($search,$i,"sex");
                $u_id=mysql_result($search,$i,"id");
                $u_essn=mysql_result($search,$i,"essn");
                $u_contact_no=mysql_result($search,$i,"contact_no");
                $u_bdate=mysql_result($search,$i,"bdate");
                $u_address=mysql_result($search,$i,"address");
                $u_payment_pending=mysql_result($search,$i,"payment_pending");
                $u_profitable=mysql_result($search,$i,"profitable");
                $u_leave_date=mysql_result($search,$i,"leave_date");
                $u_super_ssn=mysql_result($search,$i,"super_ssn");
                if($arr[$u_ssn]==1){
                        $i++;
                        continue;
                }
                echo "<table>
<tr><td>Firstname:</td><td>$u_fname</td><td></tr>
<tr><td>Lastname:</td><td>$u_lname</td></tr>
<tr><td>Sex:</td><td>$u_sex</td></tr>
<tr><td>Contact_no: </td><td>$u_contact_no</td></tr>
<tr><td>Bdate:</td><td>$u_bdate</td></tr>
<tr><td>Address:</td><td>$u_address</td></tr>
<tr><td>Join Date:</td><td>$u_join_date</td></tr>
<tr><td>Department No:</td><td>$u_dno</td></tr>
<tr><td>Leave Date:</td><td>$u_leave_date</td></tr>";
                if($u_super_ssn!="")
                        echo "<tr><td>Supervisor SSn:</td><td>$u_super_ssn</td></tr>";
                echo "</table>";
                echo "<br />";
                if($u_super_ssn!="")
                        $count1++;
                else
                        $count++;
                $arr[$u_ssn]=1;
                $i++;
}

