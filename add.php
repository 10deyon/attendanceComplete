<?php
include'header.php';
?>

<div class="card">
    <div class="card-header">
        <h2>
            <a class="btn btn-success" href="add.php">ADD STUDENT</a>
            <a class="btn btn-dark btn-right" href="index.php">BACK</a>
        </h2>
    </div>
    <div class="card-body">
        <div class="jumbotron">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Student Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Student Name" required>
                </div>

                <div class="form-group">
                    <label for="roll">Student Roll:</label>
                    <input type="text" class="form-control" id="roll" name="roll" placeholder="Student Roll" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="ADD STUDENT" name="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer">    
        <h6>
            Website: www.firstProject.com
            <span class="pull-right">Like us: www.facebook.com/primeWorks</span>
        </h6>
    </div>
</div>