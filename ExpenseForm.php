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
	<title>Nonprofit Expense-Tracking Web Tool</title>
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
	<h1>Nonprofit Expense-Tracking Web Tool</h1><br>
	<hr>
    <p>This page consist of many forms relating to the Nonprofit Expense-Tracking Web Tool.</p>
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
    
    <h2>Did you incur expenses while lobbying today?</h2>
    <h4>If you have multiple expenses, you will be asked to document each expense separately, so, just report one expense at a time.</h4>
    <p>
            <label for="lobLevel">Did you incur expenses while lobbying today?</label>
            <select id="lobLevel" name="lobbyLevel">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <br>
            <textarea id="lobLevelBox" name="lobLevelBox"></textarea>
        </p>
        <p>Note: Lobbying expenses and compensation should be accounted for using the accrual method.</p>
    <hr>
    <!--End of Form 1 -->
	<h2>What did you incur expenses on?</h2>
    <h4>District or local offices of elected officials for state positions are state-level government.</h4>
    <p>If you have more to select please list all that apply in the text-box below.</p>
    <h3>Examples include:</h3>
    <ul>
                    <li>Advertising-Billboards</li>
                    <li>Advertising-Flyers</li>
                    <li>Advertising - Print Media</li>
                    <li>Advertising - Television/Radio</li>
                    <li>Buses for Lobby Event</li>
                    <li>Cell Phone</li>
                    <li>Computer/Internet Consulting</li>
                    <li>E-advocacy</li>
                    <li>Legislative Bill Tracking</li>
                    <li>Legislative Research</li>
                    <li>Lodging</li>
                    <li>Meals for Lobby Event</li>
                    <li>Photocopies</li>
                    <li>Rallies</li>
                    <li>Rent</li>
                    <li>Social</li>
                    <li>Social Event/Reception/Banquet</li>
                    <li>Social Media – Websites</li>
                    <li>Travel Reimbursement - Train, Airfare, Car, Hotel</li>
                    <li>Lodging</li>
                    <li>Other:</li>
                    </ul>
	<!--Form 2 -->
        <p>
            <label for="govLevel">I encured expenses on : </label>
            <select id="govLevel" name="governtmentLevel">
                <option value="Advertising-Billboards">Advertising-Billboards</option>
                <option value="Advertising-Flyers">Advertising-Flyers</option>
                <option value="Advertising-Print Media">Advertising-Print Media</option>
                <option value="Advertising-Televison/Radio">Advertising-Televison/Radio</option>
                <option value="Buses for Lobby Event">Buses for Lobby Event</option>
                <option value="Cell Phone">Cell Phone</option>
                <option value="Computer/Internet Consulting">Computer/Internet Consulting</option>
                <option value="E-advocacy">E-advocacy</option>
                <option value="Legislative Bill Tracking">Legislative Bill Tracking</option>
                <option value="Legislative Research">Legislative Research</option>
                <option value="Lodging">Lodging</option>
                <option value="Meals for Lobby Event">Meals for Lobby Event</option>
                <option value="Photocopies">Photocopies</option>
                <option value="Rallies">Rallies</option>
                <option value="Rent">Rent</option>
                <option value="Social">Social</option>
                <option value="Social Event/Reception/Banquet">Social Event/Reception/Banquet</option>
                <option value="Social Media – Websites">Social Media – Websites</option>
                <option value="Travel Reimbursement - Train, Airfare, Car, Hotel">Travel Reimbursement - Train, Airfare, Car, Hotel</option>
                <option value="Lodging">Lodging</option>
                <option value="Other:">Other:</option>
            </select>
            <br>
            <textarea id="govLevelBox" name="govLevelBox"></textarea>  
        </p>
		<!--End of Form 2 -->
		<hr>
        <h2>What was the cost of those expenses?</h2>
        <!--Form 3 -->
            <p>
                <label for="lobbyLocation">My organization spent $ </label>
                <input id="lobbyLocation" type="text" name="lobbyLocation">
                <label for="lobbyExpense">on the expense of : </label>
                <input id="lobbyExpense" type="text" name="lobbyExpense">
            </p>	
		<!--End of Form 3 -->
            <hr>
            <!--Form 4-->
            <h2>Who or what was the expense paid to?</h2>
            <p>
                <label for="orgExpense">My organization paid the expense of (</label>
                <input id="orgExpense" type="text" name="orgExpense">
                <label for="orgExpenseLast">) to </label>
                <input id="orgExpenseLast" type="text" name="orgExpenseLast">
           
            </p>
			<!--End of Form 4-->
			<hr>
			<!--Form 5-->
            <h2>Did you incur any reportable compensation today?</h2>
            <p>Reportable Compensation- Any salary, fee, gift, payment, benefit, loan, advance, or any other thing of value paid, owed, given, or promised to the Lobbyist by the Client, or employer, in exchange for Lobbying or services that are otherwise in furtherance of Lobbying Activity, including year-end or other bonuses, but not fringe benefits</p>
            <p>Once again – report just one instance of compensation paid at a time.  You will be asked to submit another report at the conclusion of your submission of this report</p>
            <p>If answer is "No" please leave text-box empty.</p>
            <p>
                <label for="expenseLevel">Did you incur any reportable compensation today?</label>
                <select id="expenseLevel" name="expenseLevel">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <br>
                <textarea id="expenseLevelBox" name="expenseLevelBox"></textarea>
            </p>
            <p>Note: Lobbying expenses and compensation should be accounted for using the accrual method.</p>

            <!--End of Form 5-->
            <hr>
            <!--Form 6-->
			<h2>What are the details of compensation received?</h2>
            <p>
                <label for="amountExp">Amount $ :</label>
                <input id="amountExp" type="text" name="amountExp"><br>
                <label for="paidExp">Paid from :</label>
                <input id="paidExp" type="text" name="paidExp"><br>
                <label for="paymentExp">Payment method : </label>
                <input id="paymentExp" type="text" name="paymentExp"><br>
                <label for="paynumExp">Payment number :</label>
                <input id="paynumExp" type="text" name="paynumExp"><br>
                <label for="compensationExp">Type of Compensation : </label>
                <input id="compensationExp" type="text" name="compensationExp"><br>
            </p>
            <p>Payment methods- includes cash, check, ACH / electronic funds transfer, card, etc.</p>
            <p>Payment number- the check number, transfer number, etc.</p>
            <p>Types of compensation- includes salary, fee, gift, payment, benefit, loan, advance, or any other thing of value.</p>
            <!--End of Form 6-->
				<hr>
                <h2>Thank you!</h2>
                <p>Remember to return when you are ready to use the Prepare Information for Reporting Lobbying Activity Tool.</p>
                <p>The New York Joint Commission on Public Ethics (JCOPE) requires public disclosure about lobbying through reports that can be filed online.</p>
                <input type="submit" name="submit" value="Submit All Content & Generate Report"> <input type="reset" value="Reset Form">
            </form>
        </div>
            <!--PHP Report -->
            <?php
                $reportReady = false;
                if (isset($_POST['submit'])) {  // Checking to see if the form was submitted
                $nameLobby = $_POST['nameLobby'];
                $dateLobby = $_POST['dateLobby'];
                $lobbyLevel = $_POST['lobbyLevel'];
                $lobLevelBox = $_POST['lobLevelBox'];
                $governtmentLevel = $_POST['governtmentLevel'];
                $govLevelBox = $_POST['govLevelBox'];
                $lobbyLocation = $_POST['lobbyLocation'];
                $lobbyExpense = $_POST['lobbyExpense'];
                $orgExpense = $_POST['orgExpense'];
                $orgExpenseLast = $_POST['orgExpenseLast'];
                $expenseLevel = $_POST['expenseLevel'];
                $expenseLevelBox = $_POST['expenseLevelBox'];
                $amountExp = $_POST['amountExp'];
                $paidExp = $_POST['paidExp'];
                $paymentExp = $_POST['paymentExp'];
                $paynumExp = $_POST['paynumExp'];
                $compensationExp = $_POST['compensationExp'];                

                //Report PHP
                $report = "Generating Report... Loading... ( ͡° ͜ʖ ͡°) " . "<hr> Name :" . $nameLobby . "<hr> Date :" . $dateLobby .  "<hr> Form 1: Did you incur expenses while lobbying today? <br> " . $lobbyLevel . "<br>Text-box : " . $lobLevelBox . "<hr> Form 2: What did you incur expenses on?    I encured expenses on : " . $governtmentLevel . "<br>Text-Box : " . $govLevelBox . "<hr>Form 3: What was the cost of those expenses? <br>" . $lobbyLocation . " on the expense of : ". $lobbyExpense . "<hr>Form 4: Who or what was the expense paid to?" . "<br>My organization paid the expense of   " . $orgExpense . " to " . $orgExpenseLast . "." . "<hr> Form 5: Did you incur any reportable compensation today? <br>" . $expenseLevel . "<br>Text-Box :" . $expenseLevelBox . "<hr>Form 6: What are the details of compensation received? " . "<br>Amount $: " . $amountExp . "<br>Paid from : " . $paidExp . "<br>Payment Method : " . $paymentExp . "<br>Type of Compensation : "  . $compensationExp;
                
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