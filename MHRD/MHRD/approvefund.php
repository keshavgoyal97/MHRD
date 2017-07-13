<?php
    include'test2.php';
    $sql="use project";
    $n="2016-11-03";
    if(mysqli_query($conn,$sql))
    {
        if(!empty($_POST['appnum']))
            $appnum=$_POST['appnum'];
        else
            die("Please enter a id");
        $sql="select InstiName,Amount from applyfund where ApplicationNumber='$appnum'";
        if($result=mysqli_query($conn,$sql))
        {
            $row=mysqli_fetch_array($result);
            $in=$row['InstiName'];$a=$row['Amount'];
            $sql="select * from Institutions where Name='$in'";
            if($result=mysqli_query($conn,$sql))
            {
              if(mysqli_num_rows($result)>0)
              {
                 $sql=" insert into Funds value('$appnum','$a')";
                  if($result=mysqli_query($conn,$sql))
                  {
                      $sql="insert into Inst_fund value('$in','$appnum','$n')";
                      if($result=mysqli_query($conn,$sql))
                      {
                          $sql="delete from applyfund where ApplicationNumber='$appnum'";
                          if(mysqli_query($conn,$sql))
                          {
                              echo"<p>Records Approved successfully</p>";
                              die();
                          }
                      }
                      else
                          echo"!ERROR";
                  }
                  else
                      echo"!ERROR";
              }
            }
            $sql="select * from Schools where Name='$in'";
            if($result=mysqli_query($conn,$sql))
            {
                if(mysqli_num_rows($result)>0)
                {
                    $sql=" insert into funds value('$appnum','$a')";
                    if($result=mysqli_query($conn,$sql))
                    {
                        $sql="select ID from schools where Name='$in'";
                        if($result=mysqli_query($conn,$sql))
                        {
                            $row=mysqli_fetch_array($result);
                            $i=$row['ID'];
                        $sql=" insert into Sch_fund value('$i','$appnum','$n')";
                        if($result=mysqli_query($conn,$sql))
                        {
                            $sql="delete from applyfund where ApplicationNumber='$appnum'";
                            if(mysqli_query($conn,$sql))
                            {
                                echo"<p>Records Approved successfully</p>";
                                die();
                            }
                        }
                        else
                            echo"2Please choose Application Number carefully";
                        }
                        else
                            echo "!ERROR";
                    }
                    else
                        echo"Please choose Application Number carefully";
                }
            }
            echo"<p>Institute Name is not correct.Please Reload Previous Page</p>";
            $sql="delete from applyfund where ApplicationNumber='$appnum'";
            mysqli_query($conn,$sql);
        }
        else
            echo"!ERROR";
    }
else
    echo"!ERROR";
    mysqli_close($conn);
?>
