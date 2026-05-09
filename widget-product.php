<?php if(isset($product_name) && $product_name != ''){?>
<section class="call-to-action-two">
	<div class="auto-container">
		<div class="clearfix">
			<div class="pull-left">
				<h2>Inquiry for <span><q><?php echo $product_name;?></q></span></h2>
			</div>
			<div class="pull-right">
				<a href="contact-us.html?p=<?php echo base64_encode($product_name);?>" class="theme-btn btn-style-five">Inquiry now <span class="icon fa fa-arrow-right"></span></a>
			</div>
		</div>
	</div>
</section>
<?php }?>