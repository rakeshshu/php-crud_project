<?php include 'header.php';

if(isset($_POST['deletebtn'])){

include "config.php";
$stu_id = $_POST['sid'];

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

}
?>
<div id="main-content" class="container bg-white p-3">
    <h2>Delete Record</h2>
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 p-3">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="mb-3 mt-3">
            <label class="mb-3 mt-3">Id</label>
            <input type="text" name="sid" class="form-control" placeholder="Enter id" />
        </div>
        <input class="btn btn-dark mt-3" type="submit" name="deletebtn" value="Delete" />
    </form>
    </div>
    <div class="col-sm-3"></div>
    </div>
</div>
</div>
<?php include "footer.php";?>
</body>
</html>
