	<?php include("header.php"); ?>
    <?php require_once('./dao/mailingListDAO.php'); ?>
                    <?php
                    try{
                        $mailingListDAO = new mailingListDAO();
                        $hasError = false;
                        $errorMessages = Array();
                      
                        if (isset($_POST['firstName']) ||
                           isset($_POST['lastName']) || 
                           isset($_POST['phoneNumber']) ||
                           isset($_POST['emailAddress']) ||
                           isset($_POST['username']) ||
                           isset($_POST['referrer'])){
                           
                             if ($_POST['firstName'] == "") {
				               $hasError = true;
				               $errorMessages['firstNameError'] = "Please enter a name.";
					           }elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['firstName'])){
							   $hasError = true;
							   $errorMessages['firstNameError'] = "Only letters and white space allowed";
						       }
                             
                             if ($_POST['lastName'] == "") {
				               $hasError = true;
				               $errorMessages['lastNameError'] = "Please enter a name.";
					           }elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['lastName'])){
							   $hasError = true;
							   $errorMessages['lastNameError'] = "Only letters and white space allowed";
			                 }
                               
                             if (empty($_POST['phoneNumber'])) {
				               $hasError = true;
				               $errorMessages['phoneNumberError'] = "Please enter valide phone number.";
					           }else{
				               if (!preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $_POST['phoneNumber'])){
							   $hasError = true;
							   $errorMessages['phoneNumberError'] = "Only number allowed";
			                }
                            }
                             
                             if (empty($_POST['emailAddress'])) {
				               $hasError = true;
				               $errorMessages['emailAddressError'] = "Please enter valide email address.";
					           }else{
				               if (!filter_var($_POST["emailAddress"], FILTER_VALIDATE_EMAIL)){
							   $hasError = true;
							   $errorMessages['emailAddress'] = "Letters, number... allowed";
						       }
                               }
                               
                             if (empty($_POST['username'])) {
				               $hasError = true;
				               $errorMessages['usernameError'] = "Please enter a name.";
					           }else{
				               if (!preg_match("/^[a-zA-Z ]*$/", $_POST['username'])){
							   $hasError = true;
							   $errorMessages['usernameError'] = "Only letters and white space allowed";
						       }
                               }
                               
                             if (preg_match("/Select referer/",$_POST['referrer'])){
                                    $hasError = true;
											$errorMessages['referrerError'] = "Please select a referrer.";
											}
                           
                             if(!$hasError){
                                   $customer = new Customer($_POST['firstName'], $_POST['lastName'], $_POST['phoneNumber'], $_POST['emailAddress'], $_POST['username'], $_POST['referrer']);
                                   $addSuccess = $mailingListDAO->addCustomer($customer);
                                    echo '<h3>' . $addSuccess . '</h3>';
                                      }         
                     }    
                    ?>
                    <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post" action="contact.php" >
                        <table>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="firstName" id="firstName" size='40'>
                              <?php
                               if(isset($errorMessages['firstNameError'])){
                               echo '<span style=\'color:red\'>' . $errorMessages['firstNameError'] . '</span>';
                               }
                               ?>
                               </td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="lastName" id="lastName" size='40'>
                              <?php
                               if(isset($errorMessages['lastNameError'])){
                               echo '<span style=\'color:red\'>' . $errorMessages['lastNameError'] . '</span>';
                               }
                               ?>
                               </td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'>
                                <?php
                               if(isset($errorMessages['phoneNumberError'])){
                               echo '<span style=\'color:red\'>' . $errorMessages['phoneNumberError'] . '</span>';
                               }
                               ?></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                                <?php
                               if(isset($errorMessages['emailAddressError'])){
                               echo '<span style=\'color:red\'>' . $errorMessages['emailAddressError'] . '</span>';
                               }
                               ?>
                            </tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'>
                                <?php
                               if(isset($errorMessages['usernameError'])){
                               echo '<span style=\'color:red\'>' . $errorMessages['usernameError'] . '</span>';
                               }
                               ?>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referrer" size="1">
                                      <option>Select referer</option>
                                      <option value="newspaper">Newspaper</option>
                                      <option value="radio">Radio</option>
                                      <option value="television">Television</option>
                                      <option value="other">Other</option>
                                   </select>
                                <?php
                               if(isset($errorMessages['referrerError'])){
                               echo '<span style=\'color:red\'>' . $errorMessages['referrerError'] . '</span>';
                               }
                               ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                    </div><!-- End Main -->
            </div><!-- End Content -->
                    <?php
                        }catch(Exception $e){
                               echo '<h3>Error on page.</h3>';
                               echo '<p>' . $e->getMessage() . '</p>';            
                              }
                    ?>
<?php include("footer.php"); ?>
