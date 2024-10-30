<?php  	function migcontactmaganer_dynamic_styles(){?>
<!-- Load dynamic styles from backend -->
<?php 
global $mig_contactmanager;
global $post;

?>

<style type="text/css">

<?php if($mig_contactmanager['allow-labels'] == 1):?>
/*label*/
form.wpcf7-form label {
	color:<?php echo $mig_contactmanager['label-color']?>;
	text-transform:<?php echo $mig_contactmanager['label-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['label-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['label-text-align']?>;
	display: block;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-text'] == 1):?>
/*Text*/
form.wpcf7-form input[type="text"] {
	color:<?php echo $mig_contactmanager['text-color']?>;
	text-transform:<?php echo $mig_contactmanager['text-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['text-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['text-text-align']?>;
	background-color:<?php echo $mig_contactmanager['text-background-color']?>;
}
<?php endif;?>


<?php if($mig_contactmanager['allow-email'] == 1):?>
/*Email*/
form.wpcf7-form input[type="email"] {
	color:<?php echo $mig_contactmanager['email-color']?>;
	text-transform:<?php echo $mig_contactmanager['email-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['email-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['email-text-align']?>;
	background-color:<?php echo $mig_contactmanager['email-background-color']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-url'] == 1):?>
/*Url*/
form.wpcf7-form input[type="url"] {
	color:<?php echo $mig_contactmanager['url-color']?>;
	text-transform:<?php echo $mig_contactmanager['url-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['url-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['url-text-align']?>;
	background-color:<?php echo $mig_contactmanager['url-background-color']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-password'] == 1):?>
/*Password*/
form.wpcf7-form input[type="password"] {
	color:<?php echo $mig_contactmanager['password-color']?>;
	text-transform:<?php echo $mig_contactmanager['password-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['password-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['password-text-align']?>;
	background-color:<?php echo $mig_contactmanager['password-background-color']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-search'] == 1):?>
/*Search*/
form.wpcf7-form input[type="searcg"] {
	color:<?php echo $mig_contactmanager['search-color']?>;
	text-transform:<?php echo $mig_contactmanager['search-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['search-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['search-text-align']?>;
	background-color:<?php echo $mig_contactmanager['search-background-color']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-textarea'] == 1):?>
/*Textarea*/
form.wpcf7-form textarea {
	color:<?php echo $mig_contactmanager['textarea-color']?>;
	text-transform:<?php echo $mig_contactmanager['textarea-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['textarea-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['textarea-text-align']?>;
	background-color:<?php echo $mig_contactmanager['textarea-background-color']?>;
}
<?php endif;?>


<?php if($mig_contactmanager['allow-tel'] == 1):?>
/*Tel*/
form.wpcf7-form input[type="tel"] {
	color:<?php echo $mig_contactmanager['tel-color']?>;
	text-transform:<?php echo $mig_contactmanager['tel-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['tel-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['tel-text-align']?>;
	background-color:<?php echo $mig_contactmanager['tel-background-color']?>;
}
<?php endif;?>


<?php if($mig_contactmanager['allow-number'] == 1):?>
/*Number*/
form.wpcf7-form input[type="number"] {
	color:<?php echo $mig_contactmanager['number-color']?>;
	text-transform:<?php echo $mig_contactmanager['number-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['number-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['number-text-align']?>;
	background-color:<?php echo $mig_contactmanager['number-background-color']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-date'] == 1):?>
/*Date*/
form.wpcf7-form input[type="date"] {
	color:<?php echo $mig_contactmanager['date-color']?>;
	text-transform:<?php echo $mig_contactmanager['date-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['date-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['date-text-align']?>;
	background-color:<?php echo $mig_contactmanager['date-background-color']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-dropdown'] == 1):?>
/*Dropdown*/
form.wpcf7-form select.wpcf7-select {
	color:<?php echo $mig_contactmanager['dropdown-color']?>;
	text-transform:<?php echo $mig_contactmanager['dropdown-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['dropdown-font-size']['width']?>;
	background-color:<?php echo $mig_contactmanager['dropdown-background-color']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-checkbox'] == 1):?>
/*Checkbox*/
form.wpcf7-form .wpcf7-checkbox span {
	color:<?php echo $mig_contactmanager['checkbox-color']?>;
	text-transform:<?php echo $mig_contactmanager['checkbox-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['checkbox-font-size']['width']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-radio'] == 1):?>
/*Radio*/
form.wpcf7-form .wpcf7-radio span {
	color:<?php echo $mig_contactmanager['radio-color']?>;
	text-transform:<?php echo $mig_contactmanager['radio-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['radio-font-size']['width']?>;
}
<?php endif;?>


<?php if($mig_contactmanager['allow-submit'] == 1):?>
/*Submit*/
form.wpcf7-form input[type="submit"] {
	color:<?php echo $mig_contactmanager['submit-color']?>;
	text-transform:<?php echo $mig_contactmanager['submit-text-transform']?>;
	font-size:<?php echo $mig_contactmanager['submit-font-size']['width']?>;
	text-align:<?php echo $mig_contactmanager['submit-text-align']?>;
	background-color:<?php echo $mig_contactmanager['submit-background-color']?>;
	transition: all 0.3s;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	-moz-transition: all 0.3s;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-submit-hover'] == 1):?>
form.wpcf7-form input[type="submit"]:hover {
	color:<?php echo $mig_contactmanager['submit-color-hover']?>;
	text-transform:<?php echo $mig_contactmanager['submit-text-transform-hover']?>;
	font-size:<?php echo $mig_contactmanager['submit-font-size-hover']['width']?>;
	text-align:<?php echo $mig_contactmanager['submit-text-align-hover']?>;
	background-color:<?php echo $mig_contactmanager['submit-background-color-hover']?>;
}
<?php endif;?>

<?php if($mig_contactmanager['allow-form'] == 1):?>
/*Form*/
form.wpcf7-form {
	background-color:<?php echo $mig_contactmanager['form-background-color']?>;
	padding: <?php echo $mig_contactmanager['form-dimensions']['height']?> <?php echo $mig_contactmanager['form-dimensions']['width']?>;
}
<?php endif;?>
</style>


<?php } ?>