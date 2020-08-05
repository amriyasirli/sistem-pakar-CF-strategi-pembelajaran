<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title;?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets/multistep/')?>assets/img/image10.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= base_url()?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url()?>assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/demo.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/animsition/css/animsition.min.css">

<!-- Froala Editor -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/froala_editor.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/froala_style.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/code_view.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/colors.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/emoticons.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/image_manager.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/image.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/line_breaker.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/table.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/char_counter.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/video.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/fullscreen.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/quick_insert.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/plugins/file.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/froala/css/themes/royal.css">

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css"> -->
</head>