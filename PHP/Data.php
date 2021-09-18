

<html>
    <body>
        <table border="1" style="text-align: center;">
            <th>FName</th>
            <th>LName</th>
            <th>Address</th>
            <th>Country</th>
            <th>Gender</th>
            <th>Skills</th>
            <th>userName</th>
            <th>Department</th>
            <tr>
                <td><?php echo $_REQUEST['FName'];?></td>
                <td><?php echo $_REQUEST['LName'];?></td>
                <td><?php echo $_REQUEST['address'];?></td>
                <td><?php echo $_REQUEST['country'];?></td>
                <td><?php echo $_REQUEST['gender'];?></td>
                <td><?php if(!empty($_POST['skill'])){    
                                foreach($_POST['skill'] as $Skills){
                                    echo $Skills."<br>";
                                }
                           }
                 ?></td>
                <td><?php echo $_REQUEST['userName'];?></td>
                <td><?php echo $_REQUEST['department'];?></td>
            </tr>
        </table>
    </body>
</html>