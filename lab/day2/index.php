<?php
$states=array('AL'=>'Alabama', 'AK'=>'Alaska', 'AZ'=>'Arizona', 'AR'=>'Arkansas', 'CA'=>'California', 'CO'=>'Colorado', 'CT'=>'Connecticut', 'DE'=>'Delaware', 'FL'=>'Florida', 'GA'=>'Georgia', 'HI'=>'Hawaii', 'ID'=>'Idaho', 'IL'=>'Illinois', 'IN'=>'Indiana', 'IA'=>'Iowa', 'KS'=>'Kansas', 'KY'=>'Kentucky', 'LA'=>'Louisiana', 'ME'=>'Maine', 'MD'=>'Maryland', 'MA'=>'Massachusetts', 'MI'=>'Michigan', 'MN'=>'Minnesota', 'MS'=>'Mississippi', 'MO'=>'Missouri', 'MT'=>'Montana', 'NE'=>'Nebraska', 'NV'=>'Nevada', 'NH'=>'New Hampshire', 'NJ'=>'New Jersey', 'NM'=>'New Mexico', 'NY'=>'New York', 'NC'=>'North Carolina', 'ND'=>'North Dakota', 'OH'=>'Ohio', 'OK'=>'Oklahoma', 'OR'=>'Oregon', 'PA'=>'Pennsylvania', 'RI'=>'Rhode Island', 'SC'=>'South Carolina', 'SD'=>'South Dakota', 'TN'=>'Tennessee', 'TX'=>'Texas', 'UT'=>'Utah', 'VT'=>'Vermont', 'VA'=>'Virginia', 'WA'=>'Washington', 'WV'=>'West Virginia', 'WI'=>'Wisconsin', 'WY'=>'Wyoming');

$options= '';
$error = '';
$noform = true;


$values = array('fName'=>'' ,'lName'=>'' ,'address'=>'' ,'city'=>'' ,'zip'=>'' ,'email'=>'' ,'phone'=>'' ,'url'=>'');

if(isset($_POST['submit'])) {
	$values = array('fName'=> $_POST['firstName'], 'lName'=> $_POST['lastName'],'address'=>$_POST['address'] ,'city'=>$_POST['city'] ,'zip'=>$_POST['zip'] ,'email'=>$_POST['email'] ,'phone'=>$_POST['phone'] ,'url'=>$_POST['url']);
	$val = $states[$_POST['state']];
	if(preg_match('^[a-zA-Z]^', $values['fName'])){}else{$error = "Your First Name was typed incorrectly.";}
	if(preg_match('^[a-zA-Z]^', $values['lName'])){}else{$error = "Your Last Name was typed incorrectly.";}
	if(preg_match('^[a-zA-Z0-9-\.]^', $values['address'])){}else{$error = "Your Address was typed incorrectly.";}
	if(preg_match('^[a-zA-Z]^', $values['city'])){}else{$error = "Your City was typed incorrectly.";}
	if(preg_match('^[0-9-]^', $values['zip'])){}else{$error = "Your Zip Code was typed incorrectly.";}
	if(filter_var($values['email'], FILTER_VALIDATE_EMAIL)){}else{$error = "Your Email was typed incorrectly.";}
	if(preg_match('^[0-9-]^', $values['phone'])){}else{$error = "Your Phone Number was typed incorrectly.";}
	if(filter_var($values['url'], FILTER_VALIDATE_URL)){}else{$error = "Your URL was typed incorrectly.";}

	$options = "<option value='".$_POST['state']."'>".$val."</option>";
	if($error == ''){
		$noform = false;
		$body = "<textarea cols='25' rows='4'>".$values['fName']." ".$values['lName']."
".$values['address']."
".$values['city'].", ".$_POST['state']." ".$values['zip']."</textarea><br />"."Email: ".$values['email']."<br />Phone: ".$values['phone']."<br />Url: ".$values['url']."<br />";
	}

}else{
	foreach ($states as $key => $val){
		$options = $options."<option value='$key'>$val</option>";
	};
}
if($noform == true){
	$body = "		<p class='error'>".$error."</p>
		<form method='POST' action='index.php'>
			<label>First Name</label><input type='text' name='firstName' value='".$values['fName']."' /><br />
			<label>Last Name</label><input type='text' name='lastName' value='".$values['lName']."' /><br />
			<label>Address</label><input type='text' name='address' value='".$values['address']."' /><br />
			<label>City</label><input type='text' name='city' value='".$values['city']."' /><br />
			<label>State</label>
			<select name='state'>".$options."
			</select><br />
			<label>Zip:</label><input type='text' name='zip' value='".$values['zip']."' maxlength= '10'/><br />
			<label>Email:</label><input type='text' name='email' value='".$values['email']."' /><br />
			<label>Phone Number:</label><input type='text' name='phone' value='".$values['phone']."' maxlength= '13' /><br />
			<label>Web Url:</label><input type='text' name='url' value='".$values['url']."' /><br />
			<input type='submit' name='submit' value='Submit'/>
		</form>";
}
	$html = "<!DOCTYPE html>
<html>
	<head>
		<title>Lab 2: Form fields</title>
		<style>html{font-family: helvetica, arial, sans-serif;}label{display: block;width: 120px;float: left;}.error{color: #ff0000}</style>
	</head>
	<body>".$body."
	</body>
</html>";

	echo $html;

?>