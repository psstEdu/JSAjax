
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
    <script>
        function get_place(did){
            url = "AjaxPlace.php" + "?did=" + did
            fetch(url).then(data => data.text()).then(data => {
            document.getElementById('slct_place').innerHTML = data
            })
        }
    </script>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Select District</td>
            <td>
                <select name="slct_district" id="slct_district" onChange="get_place(this.value)">
                    <option value="" selected disabled>Select District</option>
                    <?php
                        $sel ="select * from tbl_district";
                        $row = mysql_query($sel);
                            while($data=mysql_fetch_array($row)){
                                ?>
                                <option value="<?php echo $data['district_id'] ?>"><?php echo $data['district_name'] ?></option>
                            <?php
                                }
                            ?>
                </select>
        </td>
        </tr>
        <tr>
            <td>Select Place</td>
            <td>
                <div id="slct_place">
                    <select name="" id="">
                        <option value=""selected disabled>Select Place First</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Submit</td>
            <td><input type="submit" value="Submit" name="btn_submit"></td>
        </tr>
    </table>
</form>

</body>
</html>
