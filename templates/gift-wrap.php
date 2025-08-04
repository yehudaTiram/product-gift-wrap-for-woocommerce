<style>
	/* The switch - the box around the slider */
	.switch {
		position: relative;
		display: inline-block;
		padding: 0 70px 0 0;
	}

	/* Hide default HTML checkbox */
	.switch input {
		position: absolute;
		opacity: 0;
		width: 0;
		height: 0;
	}

	/* The slider */
	.slider {
		position: absolute;
		cursor: pointer;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #ccc;
		-webkit-transition: .4s;
		transition: .4s;
		width: 60px;
		height: 34px;
	}

	.slider:before {
		position: absolute;
		content: "";
		height: 26px;
		width: 26px;
		left: 4px;
		bottom: 4px;
		background-color: white;
		-webkit-transition: .4s;
		transition: .4s;
	}

	input:checked+.slider {
		background-color: #2196F3;
	}

	input:focus+.slider {
		box-shadow: 0 0 1px #2196F3;
	}

	input:checked+.slider:before {
		-webkit-transform: translateX(26px);
		-ms-transform: translateX(26px);
		transform: translateX(26px);
	}

	/* Rounded sliders */
	.slider.round {
		border-radius: 34px;
	}

	.slider.round:before {
		border-radius: 50%;
	}
</style>
<p class="gift-wrapping" style="clear:both; padding-top: .5em;">
	<label class="switch" for="gift_wrap"><input type="checkbox" id="gift_wrap" name="gift_wrap" value="yes" <?php checked($current_value, 1, false); ?>><span class="slider round"></span> <?php echo str_replace('{price}', $price_text, wp_kses_post($product_gift_wrap_message)); ?></label>
</p>