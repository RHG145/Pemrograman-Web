<html>
    <head><title>Validasi</title></head>
    <body>
        <FORM ACTION="validasiproses.php" METHOD="POST" NAME="form">
        <h2>PHP Form Validation</h2>
        <font color="red">*required field.</font><br><br>
            Name: <input type="text" name="nama">
            <font color="red">*</font><br><br>
            E-mail: <input type="text" name="email">
            <font color="red">*</font><br><br>
            Website: <input type="text" name="website"><br><br>
            <h>Comment:</h>
            <textarea name="comment" cols="40"
rows="5"></textarea><br><br>
<h>Gender:</h>
<input type="radio" name="gender" value="female"> female
<input type="radio" name="gender" value="male"> male
<font color="red">*</font><br><br>
<input type="submit" name="Submit" value="Submit">
        </FORM>
    </body>
</html>