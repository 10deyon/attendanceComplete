<?php
    include 'header.php';
    include 'student.php';
?>
<?php
$stud = new Student();
$cur_date = date('Y:m:d');
?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>
                <a class="btn btn-success" href="add.php">ADD STUDENT</a>
                <a class="btn btn-info pull-right" href="">VIEW</a>
            </h2>
        </div>


    <div class="panel-body">
        <div class="well text-center">
            <strong>Date: </strong><?php echo $cur_date;?>
        </div>
        <form action="" method="">
            <table class="table table-stripped">
                <tr>
                    <th width="20">Serial</th>
                    <th width="30">Student name</th>
                    <th width="25">Student Roll</th>
                    <th width="25">Attendance</th>
                </tr>
                <tr>

                </tr>

                <?php
                    $newStudent = $stud->newStudents();
                    if($newStudent){
                        $i = 0;
                        while($value = $newStudent->fetch_assoc()){
                            $i++;
                        }
                    }
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['roll']; ?></td>

                    <td>
                        <input type="radio" name="attend" value="Present"/>Present
                        <input type="radio" name="attend" value="Absent"/>Absent
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
    <div class="well">
        <h3>
            Website: www.firstProject.com
            <span class="pull-right">Like us: www.facebook.com/primeWorks</span>
        </h3>
    </div>
</div>

</body>
</html>