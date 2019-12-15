<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $con = mysql_connect("localhost","root","");
    mysql_select_db("db_testAjax",$con);
    
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select name="slct_place" id="slct_place">
        <option value="" Selected Disabled>Select Place</option>
        <?php
            $selQuery = "select * from tbl_place where district_id='".$_GET['did']."'";
            $row = mysql_query($selQuery);
            while($data=mysql_fetch_array($row)){
        ?>
        <option value="<?php echo $data['place_id'] ?>"><?php echo $data['place_name'] ?></option>
        <?php
            }
        ?>
    </select>
</body>
</html>