<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - Student_Result</title>
    <!-- CSS only -->
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table,
        th,
        td {
            border: 1px solid green
            border-collapse: collapse;
        }
    </style>

</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">PHP Student_Result operations with MySQL</h1>
        <div class="container">
            <form action="adddata.php" method="post">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">Student Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group  col-lg-3">
                        <label for="">Grade</label>
                        <select name="grade" id="grade" class="form-control" required>
                            <option value="">Select A Grade</option>
                            <option value="gradeB">GradeB</option>
                            <option value="gradeC">GradeC</option>
                            <option value="gradeD">GradeD</option>
                            <option value="gradeE">GradeE</option>
                            <option v alue="gradeF">GradeF</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="">Marks</label>
                        <input type="number" name="marks" id="marks" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Marks</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM results";
                        if ($result = $conn->query($sql_query)) {
                            while ($row = $result->fetch_assoc()) { 
                                $Id = $row['id'];
                                $Name = $row['name'];
                                $Grade = $row['grade']; 
                                $Marks = $row['marks'];
                    ?>
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $Grade; ?></td>
                        <td><?php echo $Marks; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                            } 
                        } 
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>