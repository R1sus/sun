	
	<div class = "wrapper">
	<div id = "steps">
			<form id="orderForm" name = "orderForm">
				<fieldset class ="step">
				<h1>IHR JäHRLICHER STROMVERBRAUCH</h1>
				<div class="peopleIcon">
					<div class="itemPerson">
						<div class="girl-active" data-value="1200"></div>
					</div>
					<div class="itemPerson">
						<div class="family1" id="second" data-value="2400"></div>
					</div>
					<div class="itemPerson">
						<div class="family2" id="third" data-value="3600"></div>
					</div>
					<div class="itemPerson">
						<div class="family3" id="fourth" data-value="4800"></div>
					</div>
					<div class="itemPerson">
						<div class="family4" id="fifth" data-value="6000"></div>
					</div>
				</div>
				<div id="scrollbar">
					<div id="blueSlider"></div>
					<p><input type="text" id="amount" readonly>
						<label for="amount">KWh</label>
						<img src="<?php echo get_template_directory_uri() ?>/images/homepage/info-icon.svg" id="info-img" /></p>
				</div>
				<div class="person-ident">
					<ul>
						<li><a href="#">1 Person</a></li>
						<li><a href="#">2 Personen</a></li>
						<li> <a href="#">3 Personen</a></li>
						<li> <a href="#">4 Personen</a></li>
						<li><a href="#">5 Personen</a></li>
					</ul>
				</div>
				</fieldset>
		<fieldset class ="step">
		<h1>Wird unter der woche tagsüber bei ihnen strom verbraucht?</h1>
		<div class="radio-form">
			<div id="check-yes" class="check"></div>
			<p>Ya</p>
			<div id="check-no" class="check"></div>
			<p>Nein</p>
		</div>
		</fieldset>
		<fieldset class ="step">
		<h1>Weclhes dach haben sie?</h1>
		<div class="star-block">
			<div class="item-block">
				<img src="<?php echo get_template_directory_uri() ?>/images/homepage/star.svg">
				<h5>Lorem ipsum</h5>
			</div>
			<div class="item-block">
				<img src="<?php echo get_template_directory_uri() ?>/images/homepage/star.svg">
				<h5>Lorem ipsum</h5>
			</div>
			<div class="item-block">
				<img src="<?php echo get_template_directory_uri() ?>/images/homepage/star.svg">
				<h5>Lorem ipsum</h5>
			</div>
			<div class="item-block">
				<img src="<?php echo get_template_directory_uri() ?>/images/homepage/star.svg">
				<h5>Lorem ipsum</h5>
			</div>
			<div class="item-block">
				<img src="<?php echo get_template_directory_uri() ?>/images/homepage/star.svg">
				<h5>Lorem ipsum</h5>
			</div>
		</div>
	
			<div class="submit-button">
				<button id="orderButton" type="submit" >&lt; Jetzt Berechnen</button>
			</div>
		</fieldset>
		</form>
		</div>
		<div id = "navigation">
			<ul>
			<li class = "selected"><a href = "#">Step 1</a></li>
			<li><a href = "#">Step 2</a></li>
			<li><a href = "#">Step 3</a></li>
			<!--<li><a href = "#">Step 4</a></li>-->
			</ul>
		</div>
		</div>

	<?php do_action( 'homepage_slider_assets' ); ?>