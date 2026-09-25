<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Data Entry Forms</title>
<style>
body { font-family: Arial; background-color:#e6f0ff; color:#003366; padding:30px;}
h1 { text-align:center; }
form { background-color:white; padding:20px; border-radius:10px; width:400px; margin:0 auto; box-shadow:0 0 10px rgba(0,0,0,0.1);}
input[type="text"], input[type="submit"], input[type="reset"] { width:100%; padding:10px; margin:8px 0; border-radius:5px; border:1px solid #003366; box-sizing:border-box;}
input[type="submit"] { background-color:#003366; color:white; border:none; cursor:pointer;}
input[type="submit"]:hover { background-color:#0059b3; }
input[type="reset"] { background-color:#cccccc; color:#003366; border:none; cursor:pointer;}
input[type="reset"]:hover { background-color:#999999; }
</style>
</head>
<body>

<h1>DATA ENTRY</h1>

<form action="SampleOutput_1.php" method="post">
    Enter your name: <input type="text" name="txtName" required><br>
    Enter your age: <input type="text" name="txtAge" required><br>
    Enter your phone no.: <input type="text" name="txtPhone" required><br>
    Enter your bill: <input type="text" name="txtBill" required><br><br>
    <input type="submit" name="btnSubmit" value="Submit">
    <input type="reset" value="Reset">
</form>

</body>
</html>
