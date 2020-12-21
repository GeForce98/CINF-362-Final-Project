<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/FinalProject.css" rel="stylesheet">
	<!--Title for Main Page. -->
	<title>Nonprofit Lobbying Web Tool</title>
</head>
<body>
    <!--Navigation Bar Scrollable. -->
	<div id="navbar">
		<a href="Home.html">Home</a> 
		<a href="ActivityForm.php">Activity Form</a> 
		<a href="ExpenseForm.php">Expense Form</a> 
		<a href="Disclaimers.html">Disclaimers</a>
        <a href="Modules.html">Modules</a>
        <a href="Contact.html">Contact Us</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
	<div class="container">
	<h1>Nonprofit Lobbying Web Tool</h1><br>
	<hr>
	<p>This web-tool will help you keep track of your organization's lobbying activity in real time.</p>
	<p>It is designed to help you keep track of your nonprofit organization’s activity.</p>
	<p>This page consist of many forms relating to the Nonprofit Lobbying Web Tool.</p>
	<hr>
	
    <!--All one Form (using this for guidance)-->
    <!--Form 1-->
    <form class="form" name="form" action="#" method="post">
        <p>
                <label for="nameLobby">Name: </label>
                <input id="nameLobby" type="text" name="nameLobby">
                <label for="dateLobby">Date: </label>
                <input id="dateLobby" type="text" name="dateLobby">
        </p>
    <hr>
    <h2>Did you lobby today?</h2>
    <h4>Lobbying is an attempt to influence government decision-making.</h4>
    <p>If you answered yes, please report on each instance of lobbying separately. You will be invited to submit additional reports as needed once you have concluded your first report.</p><br>
        <p>
            <label for="lobLevel">Did you lobby today?</label>
            <select id="lobLevel" name="lobbyLevel">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </p>
    <hr>
    <!--End of Form 1 -->
	<h2>What level of government did you lobby?</h2>
	<h4>District or local offices of elected officials for state positions are state-level government.</h4>
	<!--Form 2 -->
        <p>
            <label for="govLevel">What level of government did you lobby?</label>
            <select id="govLevel" name="governtmentLevel">
                <option value="State">State</option>
                <option value="Municipality">Muncipality</option>
                <option value="Both">State and Municipality</option>
            </select>
        </p>
		<!--End of Form 2 -->
		<hr>
        <h2>Did you lobby at the office of an individual or state entity?</h2>
        <p>An individual is a state person including statewide elected officials; members of the legislature and legislative employees; heads of State departments and their deputies and assistants, other than members of the board of regents of the university of the State of New York who receive no compensation or are compensated on a per diem basis; officers and employees of statewide elected officials; officers and employees of State departments, boards, bureaus, divisions, commissions, councils, or other State agencies; and employees of public authorities (other than multi-state authorities), public benefit corporations and commissions at least one of whose members is appointment by the governor, and members or directors of such authorities, corporations, and commissions who are compensated other than on a per diem basis.</p>
        <!--Form 3 -->
            <p>
                <label for="lobbyLocation">Did you lobby at the office of an individual or state entity?</label>
                <select id="lobbyLocation" name="lobbyLocation">
                    <option value="Individual">Individual</option>
                    <option value="State Entity">State Entity</option>
                </select>
            </p>	
		<!--End of Form 3 -->
            <hr>
            <!--Form 4-->
            <h2>What office did you lobby?</h2>
            <p>
                <label for="office">
                    What office did you lobby?
                </label>
                <input id="office" type="text" name="office">
            </p>
			<!--End of Form 4-->
			<hr>
			<!--Form 5-->
            <h2>Who did you meet with?</h2>
            <p>
                <label for="meet">
                    Who did you meet with?
                </label>
                <input id="meet" type="text" name="meet">
            </p>
            <!--End of Form 5-->
            <hr>
            <!--Form 6-->
			<h2>Did you lobby for legislation or funding?</h2>
            <p>If other was selected please enter information in text-box below.</p>
            <p>
            <label for="legisOrFunding">Did you lobby for legislation or funding?</label>
                <select id="legisOrFunding" name="legisOrFunding">
                    <option value="Legislation">Legislation</option>
                    <option value="Funding">Funding</option>
                    <option value="Both">Legislation &amp; Funding</option>
                    <option value="Other">Other</option>
                </select>
                <br>
                <textarea id="fundingBox" name="fundingBox"></textarea>
            </p>
                <p>Legislation includes action by Congress, any state legislature, any local council, or similar governing body, with respect to acts, bills, resolutions, or similar items (such as legislative confirmation of appointive office), or by the public in referendum, ballot initiative, constitutional amendment, or similar procedure. It does not include actions by executive, judicial, or administrative bodies.</p>
				<p>Funding includes solicitation, award, or administration of a grant, loan, or agreement involving the Disbursement of Public Monies.</p>
				<!--End of Form 6-->
				<hr>
				<!--Form 7-->
				<h2>What did you lobby for?</h2>
                <h3>Provide topic title and applicable number.  Examples include:</h3>
                <ul>
                    <li>State Bill</li>
                    <li>Municipal Bill</li>
                    <li>State Executive Order</li>
                    <li>Municipal Executive Order</li>
                    <li>State Law</li>
                    <li>Municipal Law</li>
                    <li>State Procurement</li>
                    <li>State Resolution</li>
                    <li>Municipal Resolution</li>
                    <li>State Regulation/ Rate-making/Rule</li>
                    <li>Municipal Regulation/ Rate-making/ Rule</li>
                    </ul>
                <p>
                <label for="lobbFor">I lobbied for:</label><br>
                <textarea id="lobbFor" name="lobbiedFor"></textarea>
                <br>
                <input type="submit" name="submit" value="Submit All Content & Generate Report"> <input type="reset" value="Reset Form">
                </p>
            </form>
            <!--End of Form 7-->
        </div>
            <!--PHP Report -->
            <?php
                $reportReady = false;
                if (isset($_POST['submit'])) {  // Checking to see if the form was submitted
                $nameLobby = $_POST['nameLobby'];
                $dateLobby = $_POST['dateLobby'];
                $lobbyLevel = $_POST['lobbyLevel'];
                $governtmentLevel = $_POST['governtmentLevel'];
                $lobbyLocation = $_POST['lobbyLocation'];
                $office = $_POST['office'];
                $meet = $_POST['meet'];
                $legisOrFunding = $_POST['legisOrFunding'];
                $fundingBox = $_POST['fundingBox'];
                $lobbiedFor = $_POST['lobbiedFor'];
                

                //Report PHP
                $report = "Generating Report... Loading... ( ͡° ͜ʖ ͡°) " . "<hr> Name :" . $nameLobby . "<hr> Date :" . $dateLobby .  "<hr> Form 1: Did you lobby today? " . $lobbyLevel . "<hr>Form 2: What level of government did you lobby? " . $governtmentLevel . "<hr>Form 3: Did you lobby at the office of an individual or state entity? " . $lobbyLocation . "<hr>Form 4: What office did you lobby? " . $office . "<hr>Form 5: Who did you meet with? " .$meet . "<hr>Form 6: Did you lobby for legislation or funding? " .$legisOrFunding . "  Text-Box: " .$fundingBox .  "<hr>Form 7: What did you lobby for?  I lobbied for: " .$lobbiedFor;
                $reportReady = true;

                }
                ?>

                <?php
                if($reportReady){
                ?>
                <div class="report">
                <h3>Generated Report</h3>
                <p><?php echo $report ?> </p>
                <button id="printReport" type="submit">Print Report</button>
                </div>

                <?php }

                ?>
        <script src="js/QuincyJS.js"></script>
        <script src="js/printJS.js"></script>
</body>
</html>