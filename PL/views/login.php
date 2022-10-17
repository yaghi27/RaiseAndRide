<?php
    include 'header.php';
?>
    <section >
        <div >
        <h3 id ="tytle" style="padding-top:10%" >Welcome to our site</h3>
        
        <div id="signup" class="hide">
            <form action="SignUp.php" method="post" id ="signupForm" >
                <div class="container">
                  <label for="fname"><b>First name</b></label>
                  <input type="text" placeholder="Enter first name" name="fname" id="fname" required><br>
                  <div id="alertfname" class="displaynone">* First name is required</div>

                  <label for="lname"><b>Last name</b></label>
                  <input type="text" placeholder="Enter last name" name="lname" id="lname" required><br>
                  <div id="alertlname" class="displaynone">* Last name is required</div>

                  <label for="gender"><b>Gender</b></label>
                  <div align="left">
                  <input type="radio" id="male" name="gender" value="male">
                  <label for="male">Male</label><br>
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female">Female</label><br>
                  </div>
                  <div id="alertgender" class="displaynone">* Gender is required</div>

                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" id="email" required><br>
                  <div id="alertemail" class="displaynone">* Email is not valid or empty</div>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
                  <div id="alertpsw" class="displaynone">* Password is not valid or empty</div>

                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br>
                  <div id="alertpsw-repeat" class="displaynone">* Passwords don't match</div>

                  <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <input type="submit" class="btn-primary" value="Submit" name="Submit" style="color:#212121;background-color:#f4cf3e ;width: 230px;height:53px;margin-top:7;">
                  </div>
                </div>
              </form>
        </div>
        <div id="login">
            <form action ="SignIn.php" method="post" id ="loginForm">
                <div class ="container" style="text-align: center;">
                    <label for="email"><b>Email <i class="fas fa-envelope-square"></i></b></label>
                      <input type="text" placeholder="Enter Email" name="email2" id="email2" required><br>

                      <label for="psw"><b>Password <i class="fas fa-key"></i></b></label>
                      <input type="password" placeholder="Enter Password" name="psw2" id="psw2" required><br>
                      <input type="submit" class="btn-primary" value="Login" name="Login" style="align-content: center; color:whitesmoke;background-color: #212121;width: 80px;height:40px">
                      
                      <div align="right">
                    <label>Don't have an account? </label>
                    <button id='signupBtn2' type="button" style="margin-top: 10px;color:#212121;background-color:#f4cf3e ;width: 150px;height:60px;">Sign Up</button>
                </div>
            </form>
        </div>
        </div>
        </div>
    </section>
<?php
    include 'footer.php';
?>