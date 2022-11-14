 <?php 

 

 include 'databse.php';

  
  if (isset($_POST['Submit'])) {

   $usercode=$_POST['usercode'];
   
   $comment=$_POST['comment'];

   $sql="UPDATE `marks` SET `comment` = '$comment' WHERE `userCode` = '$usercode'";

        $result=mysqli_query($conn,$sql);

        if ($result) {

              header('location:teacherPage.php');
              
        }

        else
          
          echo "shit";

}  



 ?>