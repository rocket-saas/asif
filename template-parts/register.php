<?php
/**
 * Template Name: Register
 *
 * @subpackage Dawn
 */

function pr($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

if(isset($_POST['submit'])) {
	$errors = array();
	
		
	$user_name= trim($_POST['user_name']);
    $email = trim($_POST['email']);
	$contact_no = trim($_POST['contact_no']);
    $url= trim($_POST['url']);
    $country1= trim($_POST['country_user']);
	$password = trim($_POST['password']);
	$confirm_password = trim($_POST['confirm_password']);
	$recatcha = trim($_POST['g-recaptcha-response']);
	
	
	if($user_name== '') {
		$errors[] = 'Please enter your name';
	}
     if($email == '') {
		$errors[] = 'Please enter your email';
	}
 else {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $errors[] = "Please enter a valid email"; 
		}
	}
	if($contact_no == '') {
		$errors[] = 'Please enter your contact number';
	}
	
      if($url== '') {
		$errors[] = 'Please enter your website';
	}
   if($country1== '') {
		$errors[] = 'Please enter your country';
	}
		
	if($password == '') {
		$errors[] = 'Please enter your password';
	}
	
	if($confirm_password == '') {
		$errors[] = 'Please enter your confirm password';
	}
	
	if($password != '' && $confirm_password != '') {
		if($password != $confirm_password) {
			$errors[] = 'Password don\'t match';
		}
	}
	if($recatcha == '') {
		$errors[] = 'Please click on the reCAPTCHA box.';
	}
	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6LejA7cUAAAAABGHUCSwRuKFvDraWXA9n0wxlYN7';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){
	

		

	if(count( $errors ) == 0) {
	
		global $wpdb;
		
		$email_parts = explode('@', $email);
		
		$username = $email_parts[0];
		$userData = array(
			'user_login' => $username,
			'user_nicename' => $user_name,
			'display_name' => $email ,
			'user_pass' => $password,
			'user_email' => $email,
            'user_url' => $url
			
		);

		$user_info = wp_insert_user( $userData );
		if( is_wp_error($user_info) ) {
			foreach( $user_info->errors as $key => $val ){
				foreach( $val as $k => $v ) {
					$errors[] = $v;
				}
			 }
		}
		else {
			
			
			update_user_meta($user_info, 'disabled', 1);
			
			update_user_meta($user_info, 'country', $country1);
			add_user_meta($user_info, 'contact', $contact_no);
			update_user_meta($user_info, 'contact', $contact_no);
			
			//send email code starts
			$subject = 'User Details';
									
			$admin_email ='office@asif.info';
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $headers .= 'From: ASIF  <'.$email.'>';
			//'office@asif.info'; //get_option('admin_email');
			$message .= '<strong>Name : </strong> '.$username.'<br />';
            $message .= '<strong>Email : </strong> '.$email .'<br />';
			$message .= '<strong>Contact number : </strong> '.$contact_no .'<br />';
            $message .= '<strong>Company Website : </strong> '.$url.'<br />';
            $message .= '<strong>country : </strong> '.$country1 .'<br />';
			
			$success = mail($admin_email, $subject, $message, $headers);
			if($success) {
				/*$creds = array(
					'user_login'    => $username,
					'user_password' => $password,
					'remember'      => true
				);

				$user = wp_signon($creds, false);

				if(is_wp_error($user)) {
					$errors[] = $user->get_error_message();
				}
				else {
					header('location:' . home_url('/my-account/'));
				}*/
                 wp_redirect('http://asif.info/thank-you');
				//$success_message = '“Thank you for registering. We will review your details and verify your account shortly.”';
			}
			else {
				$errors[] = 'Problem, while sending email, please contact admin!';
			}
		}
		
	}
		}
	else{
        $errors[] = 'Please click on the reCAPTCHA box.';
	}
	}
}

while ( have_posts() ) : the_post();  
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); 
endwhile;

wp_reset_query();

get_header();

?>
    <div class="wi-full contact-page content-offset page-text text-size text-title">
<div class="title-blue">
                             <h1>Registration</h1>
                            </div>
        <div class="container">

          <div class="row justify-content-center">
			
				<div id="primary" class="content-area col-md-12">

					<div id="content" class="site-content" role="main">
               	         
                        <form action="" method="post" enctype="multipart/form-data">
								<?php 
									if(count($errors) > 0) { 
										$html_error = '<div id="login_error">
														<ul>';
										foreach($errors as $error) {
											$html_error .= '<li style="color:red;font-weight:550">'.$error.'</li>';
										}
										$html_error .= '</ul>
													   </div>';
										echo $html_error;
									} ?>
								
									
                            
                        <div class="form-contactpage personal-detail">
                           
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <span class="error">*</span></label>
                                <input type="text" name="user_name" class="form-control" value="<?php echo $_POST['user_name']; ?>"/>
                            </div>
                            </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email Address <span class="error">*</span></label>
                                <input type="email" name="email" class="form-control" value="<?php echo $_POST['email']; ?>"/>
                            </div>
                            </div>
                     
                      <div class="col-sm-6">
                            <div class="form-group">
                                <label>Contact No <span class="error">*</span></label>
                                <input type="text" name="contact_no" class="form-control" value="<?php echo $_POST['contact_no']; ?>"/>
                            </div>
                            </div>
      <div class="col-sm-6">
                            <div class="form-group">
                                <label>Company Website <span class="error">*</span></label>
                                <input type="text" name="url" class="form-control" value="<?php echo $_POST['url']; ?>"/>
                            </div>
                            </div>
      <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country <span class="error">*</span></label>
                                <input type="text" name="country_user" class="form-control" value="<?php echo $_POST['country_user']; ?>"/>
                            </div>
                            </div>
          					
							<div class="col-sm-6">
								<div class="form-group">
									<label>Password <span class="error">*</span></label>
									<input type="password" name="password" class="form-control" value="<?php echo $_POST['password']; ?>"/>
								</div>
                            </div>
                            <div class="col-sm-6">
								<div class="form-group">
									<label>Confirm Password <span class="error">*</span></label>
									<input type="password" name="confirm_password" class="form-control" value="<?php echo $_POST['confirm_password']; ?>"/>
								</div>
                            </div>
					   
                        </div>    
                        <div class="col-sm-12 col-xs-12"> 
                        <div class="form-group">						
                         <div class="g-recaptcha" data-sitekey="6LejA7cUAAAAAKlAdTNytAox6hpXKxGwszIV30eS"></div>
						  </div>
                        </div>
                        <div class="col-sm-12 col-xs-12"> 
                            <div class="form-group">							
								<input type="submit" class="btn mt-3 btn-blue" name="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
<?php get_footer(); ?>         

