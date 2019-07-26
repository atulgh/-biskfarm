<?php 
error_reporting(E_ALL); 
session_start();
//require_once('mailer/class.phpmailer.php');
include 'wp-config.php';
require_once( ABSPATH . 'wp-admin/includes/file.php' );
global $wpdb;
$path = site_url();

$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';




/*
exit;



$main = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] .'/wp-content/themes/biskfarm/assets/images/profileframe.png');
$image_parts = explode(";base64,",$_POST['image-data']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);

$jpeg = imagecreatefromstring( base64_decode($image_parts[1]));
//list($width, $height) = getimagesize('./image.jpg');
$width = 200;
$height = 200;

list($newwidth, $newheight) = getimagesize($_SERVER['DOCUMENT_ROOT'] .'/wp-content/themes/biskfarm/assets/images/share-profile.png');
$out = imagecreatetruecolor($newwidth, $newheight);
imagesavealpha( $out, true );
imagecopyresampled($out, $jpeg, 90, 70,0, 0,  $width, $height, $width, $height);

//imagealphablending( $out, true );

	imagecopyresampled($out, $main, 50, 0, 0, 0, $newwidth, $newheight, $newwidth, $newheight);



$targetDir = $_SERVER['DOCUMENT_ROOT'] . "/wp-content/uploads/greeting/". uniqid() . '.png';
 
imagepng( $out,$targetDir, 10 );


echo $targetDir;
exit;
$targetDir = $_SERVER['DOCUMENT_ROOT'] . "/wp-content/uploads/greeting/";
$image_parts = explode(";base64,",$_POST['image-data']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$file =$targetDir. uniqid() . '.png';
file_put_contents($file, $image_base64);





echo "<pre>";

echo $file ;



exit;
print_r($_FILES);
exit;*/
if(isset($_POST['sendgift'])){
$image_type = $_POST['image-type'];	
$prdPath = str_replace('http://biskfarm.reputationindia.in', '', $image_type);



$image_parts = explode(";base64,",$_POST['image-data']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);

$oldimage = imagecreatefromstring( base64_decode($image_parts[1]));

//$oldimage = imagecreatefrompng('5d0c8062dc76a.png');
$oldw = imagesx($oldimage);
$oldh = imagesy($oldimage);
$new_width = '199';
$new_height = '200';
 
 
$target_layer=imagecreatetruecolor($new_width,$new_height);

$white = imagecolorallocate($target_layer, 255, 255, 255);
imagefill($target_layer, 0, 0, $white);

imagecopyresampled($target_layer,$oldimage,0,0,0,0,$new_width,$new_height, $oldw,$oldh);

$oldimage = $target_layer;

$newW = '445';
$newH = '330';

$newimage = imagecreatetruecolor($newW, $newH); // Creates a black image

imagesavealpha($newimage, true);

$trans_colour = imagecolorallocatealpha($newimage, 0, 0, 0, 127);
imagefill($newimage, 0, 0, $trans_colour);
//$white = imagecolorallocate($newimage, 255, 255, 255);
//imagefill($newimage, 0, 0, $white);

 
 
//imagecopy($newimage, $oldimage, 26, (($newH-$new_height)/1.5)+4, 1, 1, $new_width, $new_height);
imagecopy($newimage, $oldimage, 25, 69, 1, 1, $new_width, $new_height);

$image_2 = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] .'/wp-content/themes/biskfarm/assets/images/profileframe-w-rib.png');
imagecopy($newimage, $image_2, 0, 0, 0, 0, 245, 295);

$image_production = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . $prdPath);

imagesavealpha($image_production, true);
imagecopy($newimage, $image_production, 150, 240, 0, 0, 160,73);

 
//imagepng($newimage, 'image_3.png');
$fileName = "/wp-content/uploads/greeting/". uniqid() . '.png';
$targetDir = $_SERVER['DOCUMENT_ROOT'] .$fileName ;

 //header('Content-Type: image/jpeg');
 
//imagepng($newimage);

//exit;
imagepng( $newimage,$targetDir);


	$postData = $_POST;
    $friendname = $_POST['friendname'];
    $biscuitType = $_POST['biscuitType'];
    $yourname = $_POST['yourname'];
	$datenow = date('Y-m-d H:i:s');
	$slug = uniqid(rand(), true);
	$uploaded = $_FILES["profileupload"]["name"];
	// Session data
	
 
       // Check whether submitted data is not empty
    if(!empty($friendname) && !empty($yourname)) {
		// Insert in to Db
		 $wpdb->query("INSERT INTO `bf_greeting_tbl`(`to_username`, `from_name`, `gift_option`, `uploaded_image`, `slug`, `submitted_date`) VALUES ('$friendname','$yourname','$biscuitType','$fileName', '$slug', '$datenow')");
		// Upload attachment file
		$uploadStatus = 1;
		if(!empty($_FILES["profileupload"]["name"])){
			    // File path config
                $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/wp-content/uploads/greeting/";
                $fileName = basename($_FILES["profileupload"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
				// Allow certain file formats
                $allowTypes = array('jpg', 'png', 'jpeg');
				if(in_array($fileType, $allowTypes)){
					if(move_uploaded_file($_FILES["profileupload"]["tmp_name"], $targetFilePath)){
						$uploadedFile = $targetFilePath;
					}
					else {
						$uploadStatus = 0;
						$statusMsg = "Sorry, there was an error uploading your file.";
					}
				}
				else {
					$uploadStatus = 0;
                    $statusMsg = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.';
				}
		}
		if($uploadStatus == 1)
		{
			$toEmail = 'rajesh@repindia.com';
			$from = 'noreply@repindia.com';
			$fromName = 'Send Greetings';
			$emailSubject = 'Contact Request Submitted by '.$yourname;
			// Message 
            $bodyContent = '<h2>Contact Request Submitted</h2>
                    <p><b>Guest Name:</b> '.$friendname.'</p>
                    <p><b>Biscuit Type</b> '.$biscuitType.'</p>
                    <p><b>Name :</b> '.$yourname.'</p>';
            $headers = "From: $fromName"." <".$from.">";
                if(!empty($uploadedFile) && file_exists($uploadedFile)){
					$semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
					$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $bodyContent . "\n\n"; 
					// Preparing attachment
                    if(is_file($uploadedFile)){
						$message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
					}
					$message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $toEmail;
					// Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
				}
				    // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $bodyContent, $headers); 	
		}
		
		if($mail){
			        $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
					$postData = '';
					header("Location:$path/greeting-profile?q=$slug");
		}
		else {
			$statusMsg = 'Your contact request submission failed, please try again.';
		}
	
}
else {
	$statusMsg = 'Please fill all the fields.';
}



}







 

?>