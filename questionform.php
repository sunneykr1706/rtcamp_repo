
<style type="text/css" >
.grid
{
  
  font-size: 20px; margin: 22px;
  padding: 22px; 
  text-align: left;
  color:black;
   position: relative;
    margin-top:50px;
    width:50%;
    margin-left: 400px; 
}
.asd
{
  size:20px;
}
 #asd
 {
   size:20px;
   font-size:100px;
 }
    
    
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<?php 

include("connect.php"); 


$query="select * from dummy";

$data=mysqli_query($connect,$query); 

$result=$data;

$tf=mysqli_num_rows($result);

$rows=mysqli_fetch_assoc($result)
?> 

    <form action="finalhandle.php" method="POST">
        <div class="grid">
        <?php echo $rows['fname']; ?><br>
        <?php
          $dirs = explode("/", $rows['subject']);
          $no=count($dirs);
          //echo $no;
?>
<?php for( $i=0;$i<$no;$i++)
{?>
   
    <input type="checkbox" id="queryone" name="queryone" value= "<?php echo $dirs[$i] ?>" > <?php echo $dirs[$i]?><br>
<?php
}
?>
     <button type="button" onclick="showNext()"> Show Next</button>
      </div>
      <div class="grid">
        <?php echo $rows['secondq']; ?><br>
        <?php
          $dirs = explode("/", $rows['secondop']);
          $no=count($dirs);
          //echo $no;
?>
<?php for( $i=0;$i<$no;$i++)
{?>
   
    <input type="checkbox" id="querytwo" name="querytwo" value= " <?php echo $dirs[$i] ?> " > <?php echo $dirs[$i]?><br>
<?php
}
?>

      <button type="button" onclick="showPrev()"> Show Prev</button>
     <button type="button" onclick="showNext()"> Show Next</button>
      </div>
      <div class="grid">
        <?php echo $rows['thirdq']; ?><br>
        <?php
          $dirs = explode("/", $rows['thirdop']);
          $no=count($dirs);
          //echo $no;
?>
<?php for( $i=0;$i<$no;$i++)
{?>
   
    <input type="checkbox" id="querythree" name="querythree" value= " <?php echo $dirs[$i] ?> "> <?php echo $dirs[$i]?><br>
<?php
}
?>
      <button type="button" onclick="showPrev()"> Show Prev</button>
     <button type="button" onclick="showNext()"> Show Next</button>
      </div>
      <div class="grid">
        <?php echo $rows['fourthq']; ?><br>
        <?php
          $dirs = explode("/", $rows['fourthop']);
          $no=count($dirs);
          //echo $no;
?>
<?php for( $i=0;$i<$no;$i++)
{?>
   
    <input type="checkbox" id="queryfour" name="queryfour" value= " <?php echo $dirs[$i] ?> " > <?php echo $dirs[$i]?><br>
<?php
}
?>
      <button type="button" onclick="showPrev()" > Show Prev</button>
       <button type="button" onclick="showNext()"> Show Next</button>
     
      </div>
      <div class="grid">
        <?php echo $rows['fifthq']; ?><br>
        <?php
          $dirs = explode("/", $rows['fifthop']);
          $no=count($dirs);
          //echo $no;
?>
<?php for( $i=0;$i<$no;$i++)
{?>
   
    <input type="checkbox" id="queryfive" name="queryfive" value= " <?php echo $dirs[$i] ?> " > <?php echo $dirs[$i]?><br>
<?php
}
?>

<button type="button" onclick="showPrev()" > Show Prev</button>
       <button type="button" onclick="showNext()"> Show Next</button>
     
      </div>
      <div class="grid">
        <?php echo $rows['sixthq']; ?><br>
        <?php
          $dirs = explode("/", $rows['sixthop']);
          $no=count($dirs);
          //echo $no;
?>
<?php for( $i=0;$i<$no;$i++)
{?>
   
    <input type="checkbox" id="querysix" name="querysix" value= " <?php echo $dirs[$i] ?> "> <?php echo $dirs[$i]?><br>
<?php
}
?>

<button type="button" onclick="showPrev()" > Show Prev</button>
       <button type="button" onclick="showNext()"> Show Next</button>
     
      </div>
      <div class="grid">
        <?php echo $rows['seventhq']; ?><br>
        <?php
          $dirs = explode("/", $rows['seventhop']);
          $no=count($dirs);
          //echo $no;
?>
<?php for( $i=0;$i<$no;$i++)
{?>
   
    <input type="checkbox" id="queryseven" name="queryseven" value= " <?php echo $dirs[$i] ?> " > <?php echo $dirs[$i]?><br>
<?php
}
?>

      <button type="submit" class="sub" name="submit"> SUBMIT</button>
     
      </div>

</form>

<script>

  var visibleDiv = 0;

  function showDiv()
  {
    $(".grid").hide();
    $(".grid:eq("+ visibleDiv +")").show();
   
  }
  showDiv()
function showNext()
{
  if(visibleDiv== $(".grid").length-1)
  {
    visibleDiv = 0;
  }
  else {
    visibleDiv+=1;
    
  }
  showDiv();
}


function showPrev()
{
  if (visibleDiv == 0)
  {
    visibleDiv= $(".grid").length-1;
  }
  else {
    visibleDiv--;
  }
  showDiv();
}
</script>
