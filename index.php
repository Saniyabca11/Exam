<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    <form>
        <label>Full Name:</label><br>
        <input type="text" name="fullname"><br><br>

        <label>Roll Number:</label><br>
        <input type="text" name="rollno"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        <label>Course:</label><br>
        <select name="course">
            <option>BCA</option>
            <option>BSc</option>
            <option>BCom</option>
            <option>BA</option>
        </select><br><br>

        <label>Address:</label><br>
        <textarea name="address" rows="4" cols="30"></textarea><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

</body>
</html>
