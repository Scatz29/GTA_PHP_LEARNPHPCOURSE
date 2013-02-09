<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Create Your Profile</title>
</head>

<body>

    <!-- Form for Pursue3-4 Profile Creation Script -->
    <div>
        <p>Please Create Your Profile</p>

          <form action="pursue3-4.php" method="POST">

          <p>

            Name:
            <select name="title">
                <option>Mr.</option>
                <option>Mrs.</option>
                <option>Ms.</option>
            </select>
            <input type="text" name="name" size="38"/>
          </p>

          <p>
            Email Address: <input type="text" name="email" size="40" />
          </p>

          <p>
            Username: <input type="text" name="username" size="20"/>
          </p>

          <p>
            Areas of Interest:<br />
            <input name="interests" type="checkbox" value="Sports"/>
            <label>Sports</label>
            <br />
            <input name="interests" type="checkbox" value="Exercise"/>
            <label>Exercise</label>
            <br />
            <input name="interests" type="checkbox" value="Video Games"/>
            <label>Video Games</label>
            <br />
            <input name="interests" type="checkbox" value="Web Development"/>
            <label>Web Development</label>
            <br />
            <input name="interests" type="checkbox" value="Television"/>
            <label>Television</label>
            <br />
            <input name="interests" type="checkbox" value="Water Sports"/>
            <label>Water Sports</label>
            <br />
            <input name="interests" type="checkbox" value="Reading"/>
            <label>Reading</label>
            <br />
            <input name="interests"type="checkbox" value="Other"/>
            <label>Other</label>
          </p>

          <p>Twitter Handle:
            @<input name="twitter" type="text" size="20" />
          </p>

          <p>Comments:
            <textarea name="comments" id="comments" cols="30" rows="5"></textarea>
          </p>

          <input type="submit" name="submit" value="Update Profile" />
          </form>




    </div>



</body>

</html>