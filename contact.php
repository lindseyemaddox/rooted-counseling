<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section>

	<h3>Rooted Counseling</h3>

	<p>4205 Hillsboro Pike Suite 202 Nashville, TN 37215</p>

	<br/>

	<article class="two">
		
		<div class="form">

		    <?php
		        $name = $_REQUEST['name'] ;
		        $email = $_REQUEST['email'] ;
		        $phone = $_REQUEST['phone'] ;
		        $desc = $_REQUEST['desc'] ;
		        if (isset($_POST['submit'])) {
		          $to = 'lindseyemaddox@gmail.com';
		          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		          $headers .= "MIME-Version: 1.0\r\n";
		          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		          $message = '<html><body>';
		          $message .= 'Name: '.$name.'<br>';
		          $message .= 'Email: '.$email.'<br>';
		          $message .= 'Phone: '.$phone.'<br>';
		          $message .= 'How May We Help You: '.$desc.'<br>';
		          $message .= '</body></html>';
		          $subject = 'new form submission';

		    mail($to, $subject, $message, $headers);
		    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center;'><label>Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
		  }
		else
		  { echo "
		        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
		        <div class='left'>
			        <label for='name'>Name (required)</label><input type='text' required name='name' id='name' size='10'>
			        <label for='phone'>Phone (required)</label><input type='text' required name='phone' id='phone' size='10'>
			        <label for='email'>Email (required)</label><input type='text' required name='email' id='email' size='10'>
		    	</div><!--left-->
		    	<div class='right'>
			        <button class='submit' type='submit' name='submit'>Request an Appointment</button>
				</div><!--right-->
		      </form>";
		      }
		    ?>

		</div><!--form-->

	</article>

	<article class="two">

		<div class="img no-shadow"><img src="/_assets/img/map.png" alt="map"></div>

	</article>

	<p>Rooted is located in the Hobbs Building on the south side of Green Hills. The Hobbs Building is on the corner of Hillsboro Road and Hobbs Road. Coming from I-440, take the US-431 South/Hillsboro Road exit and travel 1.7 miles to Hobbs Road (diagonally across from Exxon). To avoid Hillsboro traffic, you may wish to use Harding Place (off of I-65) to access Hillsboro Road during high traffic times.</p>

	<p>Rooted is on the second floor of the Hobbs Building. For easiest access to suite 202, park adjacent to Hillsboro Road and use the stairs to the right of the street level entrance facing Hillsboro Pike. Upon entering on the second floor, our suite is the first door on the right, suite 202.</p>

	<h3><a href="/pdf/directions.pdf">Downloadable Directions</a></h3>

	<h4>You can contact a therapist directly to make an appointment:</h4>

	<br/>

	<article class="two">

		<p>Ashley Colclasure<br/>
		<a href="tel:16157727979">615-772-7979</a><br/>
		<a href="mailto:Ashley@RootedCounseling.com">Ashley@RootedCounseling.com</a></p>

	</article>

	<article class="two">

		<p>Jessi Bewley<br/>
		<a href="tel:16152758233">615-275-8233</a><br/>
		<a href="mailto:Jessi@RootedCounseling.com">Jessi@RootedCounseling.com</a></p>

	</article>

</section>

</div><!--container-->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>