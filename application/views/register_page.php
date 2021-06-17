
    <head>
       <meta charset="UTF-8">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="container">
            <div class="regform">
                <div><h1>Rgistration Form</h1></div>
                <?php echo form_open('login/register_validation'); ?>
                    <div id="reg_entno" class="reg_info" method="post">
                        <label for="entrollment_no" class="reg_label">Entrollment Number :</label>
                        <input type="text" placeholder="UWUCST18070" name="enroll" quid>
                        <span class="text_danger"><?php echo form_error("enroll"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_name_in" class="reg_info" >
                        <label for="name_initials" class="reg_label">First Name :</label>
                        <input type="text" placeholder="Amasha" name="fname" quid>
                        <span class="text_danger"><?php echo form_error("fname"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_name_full" class="reg_info">
                        <label for="full_name" class="reg_label"> Last Name :</label>
                        <input type="text" placeholder="Perera" name="lname" quid>
                        <span class="text_danger"><?php echo form_error("lname"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_dob" class="reg_info">
                        <label for="dob" class="reg_label">Date of Birth</label>
                        <input type="date" name="dob" quid>
                        <span class="text_danger"><?php echo form_error("dob"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_faculty" class="reg_info">
                        <label for="faculty" class="reg_label">Faculty :</label>
                        <select name="faculty_id" quid>
                            <option value="5" >Faculty of Animal Science and Export Agricultu</option>
                            <option value="3" >Faculty of Applied Sciences</option>
                            <option value="4" >Faculty of Management</option>
                            <option value="6" >Faculty of Technological Studies</option>
                            

                        </select>
                        <span class="text_danger"><?php echo form_error("faculty_id"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_email" class="reg_info">
                        <label for="email" class="reg_label">E-mail :</label>
                        <input type="email" placeholder="xxxxxxxx@std.uwu.ac.lk" name="email" quid>
                        <span class="text_danger"><?php echo form_error("email"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_pwd" class="reg_info">
                        <label for="password" class="reg_label">Password :</label>
                        <input type="password" name="password" quid>
                        <span class="text_danger"><?php echo form_error("password"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_conpwd" class="reg_info">
                        <label for="con_password" class="reg_label" >Confirm Password :</label>
                        <input type="password" name="passwordagain" quid>
                        <span class="text_danger"><?php echo form_error("passwordagain"); ?></span>
                        <br><br>
                    </div>

                    <div id="reg_pno" class="reg_info">
                        <label for="phone_no"class="reg_label" >Phone Number :</label>
                        <input type="tel" name="contact" quid>
                        <span class="text_danger"><?php echo form_error("contact"); ?></span>
                        <br><br>
                    </div>
                    <div id="reg_submit">
                        <input type="submit" value="Submit" name="insert">
                    </div>
                    <div id="reg_cancel">
                        <input type="submit" value="Cancel" name="cancel">
                    </div>
                <?php form_close(); ?>   

            </div>
        </div>   
    </body>


