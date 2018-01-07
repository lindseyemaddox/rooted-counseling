<?php require_once('_assets/inc/head.php'); // HTTP head?>
<title>Contact | Rooted Counseling</title>
<?php require_once('_assets/inc/navigation.php'); //navigation?>

<section>

	<article class="two">

		<h3>Rooted Counseling</h3>

		<p><a href="https://goo.gl/maps/SLfSNKqrdFN2" target="_blank" rel="nofollow">4219 Hillsboro Pike, Suite 208 <br/>Nashville, TN 37215</a></p>

		<br/><br/>

		<div class="img no-shadow"><img src="/rootedcounseling.com/_assets/img/map.png" alt="map"></div>

	</article>

	<article class="two">
		
		<div class="form">

		    <?php
		        $name = $_REQUEST['name'] ;
		        $email = $_REQUEST['email'] ;
		        $phone = $_REQUEST['phone'] ;
		        $desc = $_REQUEST['desc'] ;
		        if (isset($_POST['submit'])) {
		          $to = 'Ashley@RootedCounseling.com';
		          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		          $headers .= "MIME-Version: 1.0\r\n";
		          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		          $message = '<html><body>';
		          $message .= 'Name: '.$name.'<br>';
		          $message .= 'Phone: '.$phone.'<br>';
		          $message .= 'Email: '.$email.'<br>';
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
			        <label for='desc'>How may we help you?</label><textarea name='desc' id='desc' ></textarea>
		    	</div><!--left-->
		    	<div class='right'>
			        <button class='submit' type='submit' name='submit'>Request an Appointment</button>
				</div><!--right-->
		      </form>";
		      }
		    ?>

		</div><!--form-->

	</article>

	<p>Rooted Counseling is located in the Hillsboro Building on the south side of Green Hills. The Hillsboro Building is on the corner of Hillsboro Road and Hobbs Road. Coming from I-440, take the US-431 South/Hillsboro Road exit and travel 1.7 miles to Hobbs Road (diagonally across from Exxon). The Hillsboro Building entrance is the second entrance past Hobbs Road on the right. To avoid Hillsboro traffic, you may wish to use Harding Place (off of I-65) to access Hillsboro Road during high traffic times. Rooted Counseling is on the second floor of the Hillsboro Building. For easiest access to suite 208, park adjacent to Hillsboro Road and use the stairs behind the “Hillsboro Building” sign. Upon entering on the second floor door, turn left at the hallway intersection, and our suite is the first door on the right, suite 208.</p>

	<h3><a href="/rootedcounseling.com/pdf/directions.pdf" target="_blank">Downloadable Directions</a></h3>

	<h4>You can contact a therapist directly to make an appointment:</h4>

	<br/>

	<article>

		<p><a href="/rootedcounseling.com/lane-beatty.php">Lane Beatty</a><br/>
		<a href="tel:16156361821">615-636-1821</a><br/>
		<a href="mailto:lane@rootedcounseling.com">Lane@RootedCounseling.com</a></p>

	</article>

	<article>

		<p><a href="/rootedcounseling.com/ashley-colclasure.php">Ashley Colclasure</a><br/>
		<a href="tel:16157727979">615-772-7979</a><br/>
		<a href="mailto:ashley@rootedcounseling.com">Ashley@RootedCounseling.com</a></p>

	</article>

	<article>

		<p><a href="/rootedcounseling.com/courtney-mcinturff.php">Courtney McInturff</a><br/>
		<a href="tel:16158049567">615-804-9567</a><br/>
		<a href="mailto:courtney@rootedcounseling.com">Courtney@RootedCounseling.com</a></p>

	</article>

	<article>

		<p><a href="/rootedcounseling.com/michael-randolph.php">Michael Randolph</a><br/>
		<a href="tel:16156695734">615-669-5734</a><br/>
		<a href="mailto:michael@rootedcounseling.com">Michael@RootedCounseling.com</a></p>

	</article>

	<article>

		<p><a href="/rootedcounseling.com/jessi-bewley.php">Jessi Schlachter</a><br/>
		<a href="tel:16152758233">615-275-8233</a><br/>
		<a href="mailto:jessi@rootedcounseling.com">Jessi@RootedCounseling.com</a></p>

	</article>

</section>

</div><!--container-->

<?php require_once('_assets/inc/footer.php'); // footer, close body and html?>