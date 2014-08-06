<?php /*
***************************************************************
This script below allows us to redirect to the /thanks page. 
Leave it.

Also make sure to edit your form tag: 
target="hidden_iframe" onsubmit="submitted=true;"

More here:
http://stackoverflow.com/questions/6077054/google-docs-form-redirect-after-submission


****
UPDATE 07.2014
Chrome and Firefox now asking: 
	Are you sure you want to leave this page? Data you entered may be lost
	Users may freak out. So now we're just keeping them on this page

1. Amend the form and iframe
2. Add class name "validate" to all inputs and textareas (.ss-q-short validate and .ss-q-long validate), 
so that my validate script (in ppmn.js) would work for them all
3. Add in the below checkbox, before the end of the form

***************************************************************
*/ ?>



<!--
********
FORM
********
-->

			<script type="text/javascript">var submitted=false;</script>
			    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"     
			onload="if(submitted) {
				$('h1').html('Got it. Thanks!');
				$('p, form').hide();
				$('#socialcontainer').show();
				// window.location='/thanks';  Causing issues now
			}"></iframe>
			
			

		<form action="https://docs.google.com/forms/d/1-mJwsRcpKxMr1HLTCdG7_JzYzwBCre61g2LhfrCiCUo/formResponse" method="POST" id="ss-form" target="hidden_iframe" onsubmit="submitted=true;">
			
			


	
	<ol role="list" class="ss-question-list" style="padding-left: 0">
	<div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_688803774"><div class="ss-q-title">Company name (Proposed).  
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 25) </div></label>
	<input type="text" name="entry.688803774" value="" class="ss-q-short validate" id="entry_688803774" dir="auto" aria-label="Company name (Proposed).   (Word limit 25)  Must contain " aria-required="true" required="" pattern=".*.*" title="Must contain ">
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_11396171"><div class="ss-q-title">What is your business  value proposition?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 30) </div></label>
	<textarea name="entry.11396171" rows="8" cols="0" class="ss-q-long validate" id="entry_11396171" dir="auto" aria-label="What is your business  value proposition? (Word limit 30)  Max Length Exceeded" aria-required="true" required=""></textarea>
	<div class="error-message" id="778579428_errorMessage">Max Length Exceeded</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1035901024"><div class="ss-q-title">Who are the founding members? 
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"> First Name   - Last Name  -  Email  - Phone #  - Qualification  - Experience</div></label>
	<textarea name="entry.1035901024" rows="8" cols="0" class="ss-q-long validate" id="entry_1035901024" dir="auto" aria-label="Who are the founding members?   First Name   - Last Name  -  Email  - Phone #  - Qualification  - Experience " aria-required="true" required=""></textarea>
	<div class="error-message" id="912288106_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_835974261"><div class="ss-q-title">City
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" name="entry.835974261" value="" class="ss-q-short validate" id="entry_835974261" dir="auto" aria-label="City  " aria-required="true" required="" title="">
	<div class="error-message" id="1229085339_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1979864504"><div class="ss-q-title">Company domain: 
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices" role="radiogroup" aria-label="Company domain:   "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1482196432" value="E-Commerce" id="group_1482196432_1" role="radio" class="ss-q-radio" aria-label="E-Commerce" required="" aria-required="true"></span>
	<span class="ss-choice-label">E-Commerce</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1482196432" value="Mobile" id="group_1482196432_2" role="radio" class="ss-q-radio" aria-label="Mobile" required="" aria-required="true"></span>
	<span class="ss-choice-label">Mobile</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1482196432" value="Sports" id="group_1482196432_3" role="radio" class="ss-q-radio" aria-label="Sports" required="" aria-required="true"></span>
	<span class="ss-choice-label">Sports</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1482196432" value="Manufacturing" id="group_1482196432_4" role="radio" class="ss-q-radio" aria-label="Manufacturing" required="" aria-required="true"></span>
	<span class="ss-choice-label">Manufacturing</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1482196432" value="Finance" id="group_1482196432_5" role="radio" class="ss-q-radio" aria-label="Finance" required="" aria-required="true"></span>
	<span class="ss-choice-label">Finance</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1482196432" value="Entertainment" id="group_1482196432_6" role="radio" class="ss-q-radio" aria-label="Entertainment" required="" aria-required="true"></span>
	<span class="ss-choice-label">Entertainment</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1482196432" value="__other_option__" id="group_1482196432_7" role="radio" class="ss-q-radio ss-q-other-toggle" required="" aria-required="true"></span>
	<span class="ss-choice-label">Other:</span></label>
	<span class="ss-q-other-container goog-inline-block"><input type="text" name="entry.1482196432.other_option_response" value="" class="ss-q-other" id="entry_1482196432_other_option_response" dir="auto" aria-label="Other"></span>
	</li></ul>
	<div class="error-message" id="1979864504_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1198184883"><div class="ss-q-title">Company Website?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" name="entry.1198184883" value="" class="ss-q-short validate" id="entry_1198184883" dir="auto" aria-label="Company Website?  " aria-required="true" required="" title="">
	<div class="error-message" id="1352511731_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_90830429"><div class="ss-q-title">What is your team size?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" name="entry.90830429" value="" class="ss-q-short validate" id="entry_90830429" dir="auto" aria-label="What is your team size?  " aria-required="true" required="" title="">
	<div class="error-message" id="749556127_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1446366327"><div class="ss-q-title">Why is your idea unique /innovative?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 200) </div></label>
	<textarea name="entry.1446366327" rows="8" cols="0" class="ss-q-long validate" id="entry_1446366327" dir="auto" aria-label="Why is your idea unique /innovative? (Word limit 200)  Max Length exceeded" aria-required="true" required=""></textarea>
	<div class="error-message" id="2000884933_errorMessage">Max Length exceeded</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1081190803"><div class="ss-q-title">Do you have a working prototype?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices" role="radiogroup" aria-label="Do you have a working prototype?  "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.2098776518" value="Yes" id="group_2098776518_1" role="radio" class="ss-q-radio" aria-label="Yes" required="" aria-required="true"></span>
	<span class="ss-choice-label">Yes</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.2098776518" value="No" id="group_2098776518_2" role="radio" class="ss-q-radio" aria-label="No" required="" aria-required="true"></span>
	<span class="ss-choice-label">No</span>
	</label></li></ul>
	<div class="error-message" id="1081190803_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1890491188"><div class="ss-q-title">Details about Technology used
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 750) </div></label>
	<textarea name="entry.1890491188" rows="8" cols="0" class="ss-q-long validate" id="entry_1890491188" dir="auto" aria-label="Details about Technology used (Word limit 750)  Max Length Exceeded" aria-required="true" required=""></textarea>
	<div class="error-message" id="771055774_errorMessage">Max Length Exceeded</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_985808400"><div class="ss-q-title">Describe about your product, services and idea briefly.
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 750) </div></label>
	<textarea name="entry.985808400" rows="8" cols="0" class="ss-q-long validate" id="entry_985808400" dir="auto" aria-label="Describe about your product, services and idea briefly. (Word limit 750)  Max Length Exceeded" aria-required="true" required=""></textarea>
	<div class="error-message" id="569446799_errorMessage">Max Length Exceeded</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1607859969"><div class="ss-q-title">Who are your competitors?
	</div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 50) </div></label>
	<textarea name="entry.1607859969" rows="8" cols="0" class="ss-q-long validate" id="entry_1607859969" dir="auto" aria-label="Who are your competitors? (Word limit 50)  Max Length Exceeded"></textarea>
	<div class="error-message" id="246515620_errorMessage">Max Length Exceeded</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_731091623"><div class="ss-q-title">Have you acquired any customers?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices" role="radiogroup" aria-label="Have you acquired any customers?  "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1982582864" value="Yes" id="group_1982582864_1" role="radio" class="ss-q-radio" aria-label="Yes" required="" aria-required="true"></span>
	<span class="ss-choice-label">Yes</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1982582864" value="No" id="group_1982582864_2" role="radio" class="ss-q-radio" aria-label="No" required="" aria-required="true"></span>
	<span class="ss-choice-label">No</span>
	</label></li></ul>
	<div class="error-message" id="731091623_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_590182573"><div class="ss-q-title">Is the Company Incorporated? 
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices" role="radiogroup" aria-label="Is the Company Incorporated?   "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1378240163" value="Yes" id="group_1378240163_1" role="radio" class="ss-q-radio" aria-label="Yes" required="" aria-required="true"></span>
	<span class="ss-choice-label">Yes</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1378240163" value="No" id="group_1378240163_2" role="radio" class="ss-q-radio" aria-label="No" required="" aria-required="true"></span>
	<span class="ss-choice-label">No</span>
	</label></li></ul>
	<div class="error-message" id="590182573_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item  ss-date"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_298042925"><div class="ss-q-title">If Yes,  Date of Incorporation of Company
	</div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="date" name="entry.298042925" value="" class="ss-q-date" dir="auto" id="entry_298042925" aria-label="If Yes,  Date of Incorporation of Company  ">
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_594964241"><div class="ss-q-title"> Who are your potential customers?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 50) </div></label>
	<textarea name="entry.594964241" rows="8" cols="0" class="ss-q-long validate" id="entry_594964241" dir="auto" aria-label=" Who are your potential customers? (Word limit 50)  Max Length Exceeded" aria-required="true" required=""></textarea>
	<div class="error-message" id="472586101_errorMessage">Max Length Exceeded</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_353727885"><div class="ss-q-title">Briefly describe your revenue model.
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 750) </div></label>
	<textarea name="entry.353727885" rows="8" cols="0" class="ss-q-long validate" id="entry_353727885" dir="auto" aria-label="Briefly describe your revenue model. (Word limit 750)  Max Length" aria-required="true" required=""></textarea>
	<div class="error-message" id="91694338_errorMessage">Max Length</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1299133507"><div class="ss-q-title"> Do you have initial revenue?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices" role="radiogroup" aria-label=" Do you have initial revenue?  "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.775464730" value="Yes" id="group_775464730_1" role="radio" class="ss-q-radio" aria-label="Yes" required="" aria-required="true"></span>
	<span class="ss-choice-label">Yes</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.775464730" value="No" id="group_775464730_2" role="radio" class="ss-q-radio" aria-label="No" required="" aria-required="true"></span>
	<span class="ss-choice-label">No</span>
	</label></li></ul>
	<div class="error-message" id="1299133507_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-select"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1880696699"><div class="ss-q-title">Funding stage
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<select name="entry.1880696699" id="entry_1880696699" aria-label="Funding stage  " aria-required="true" required=""><option value=""></option>
	<option value="Not Funded">Not Funded</option> <option value="Seed Funded">Seed Funded</option> <option value="Angel Funded">Angel Funded</option> <option value="Venture Funded">Venture Funded</option></select>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1204766857"><div class="ss-q-title">Current Partnerships/ Engagements?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<textarea name="entry.1204766857" rows="8" cols="0" class="ss-q-long validate" id="entry_1204766857" dir="auto" aria-label="Current Partnerships/ Engagements?  " aria-required="true" required=""></textarea>
	<div class="error-message" id="1645962421_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1232032146"><div class="ss-q-title">Growth plans for next  12 to 18 months:  
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">Head count, revenue target, Investment Plan, Market segment, Product portfolio. Market Size</div></label>
	<textarea name="entry.1232032146" rows="8" cols="0" class="ss-q-long validate" id="entry_1232032146" dir="auto" aria-label="Growth plans for next  12 to 18 months:   Head count, revenue target, Investment Plan, Market segment, Product portfolio. Market Size " aria-required="true" required=""></textarea>
	<div class="error-message" id="1471921013_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item  ss-checkbox"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_641015500"><div class="ss-q-title">Do you have any of the following: 
	</div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices" role="group" aria-label="Do you have any of the following:   "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1248481769" value="Patents" id="group_1248481769_1" role="checkbox" class="ss-q-checkbox"></span>
	<span class="ss-choice-label">Patents</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1248481769" value="Trademarks" id="group_1248481769_2" role="checkbox" class="ss-q-checkbox"></span>
	<span class="ss-choice-label">Trademarks</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1248481769" value="Copy rights" id="group_1248481769_3" role="checkbox" class="ss-q-checkbox"></span>
	<span class="ss-choice-label">Copy rights</span>
	</label></li></ul>
	<div class="error-message" id="641015500_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_2065487978"><div class="ss-q-title">Do you have any mentors? 
	</div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"> Name  - Designation  - Email  - Phone #</div></label>
	<textarea name="entry.2065487978" rows="8" cols="0" class="ss-q-long validate" id="entry_2065487978" dir="auto" aria-label="Do you have any mentors?   Name  - Designation  - Email  - Phone # "></textarea>
	<div class="error-message" id="379474837_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_758017123"><div class="ss-q-title"> What benefits/support do you anticipate if incubated at Start  Tank Chennai?
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">(Word limit 750) </div></label>
	<textarea name="entry.758017123" rows="8" cols="0" class="ss-q-long validate" id="entry_758017123" dir="auto" aria-label=" What benefits/support do you anticipate if incubated at Start  Tank Chennai? (Word limit 750)  Max Length Exceeded" aria-required="true" required=""></textarea>
	<div class="error-message" id="426972664_errorMessage">Max Length Exceeded</div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1944369778"><div class="ss-q-title">Expectation from Start Tank, if Incubated
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices ss-choices-required" role="group" aria-label="Expectation from Start Tank, if Incubated  "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1745632680" value="Technology Mentorship" id="group_1745632680_1" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
	<span class="ss-choice-label">Technology Mentorship</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1745632680" value="Business Mentorship" id="group_1745632680_2" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
	<span class="ss-choice-label">Business Mentorship</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1745632680" value="Investor Connects" id="group_1745632680_3" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
	<span class="ss-choice-label">Investor Connects</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1745632680" value="Networking" id="group_1745632680_4" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
	<span class="ss-choice-label">Networking</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1745632680" value="__other_option__" id="group_1745632680_5" role="checkbox" class="ss-q-checkbox ss-q-other-toggle" aria-required="true"></span>
	<span class="ss-choice-label">Other:</span></label>
	<span class="ss-q-other-container goog-inline-block"><input type="text" name="entry.1745632680.other_option_response" value="" class="ss-q-other" id="entry_1745632680_other_option_response" dir="auto" aria-label="Other"></span>
	</li></ul>
	<div class="error-message" id="1944369778_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_767789350"><div class="ss-q-title">Provide professional references: 
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">Name  - Designation - Email  - Phone #</div></label>
	<textarea name="entry.767789350" rows="8" cols="0" class="ss-q-long validate" id="entry_767789350" dir="auto" aria-label="Provide professional references:  Name  - Designation - Email  - Phone # " aria-required="true" required=""></textarea>
	<div class="error-message" id="1509968557_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_2008641587"><div class="ss-q-title">Are you willing to be incubated at Chennai?  
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

	<ul class="ss-choices ss-choices-required" role="group" aria-label="Are you willing to be incubated at Chennai?    "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1321448626" value="Yes" id="group_1321448626_1" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
	<span class="ss-choice-label">Yes</span>
	</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1321448626" value="No" id="group_1321448626_2" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
	<span class="ss-choice-label">No</span>
	</label></li></ul>
	<div class="error-message" id="2008641587_errorMessage"></div>
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1269971031"><div class="ss-q-title">Any awards/ recognition for company/founder/product/service?  
	</div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<textarea name="entry.1269971031" rows="8" cols="0" class="ss-q-long validate" id="entry_1269971031" dir="auto" aria-label="Any awards/ recognition for company/founder/product/service?    "></textarea>
	<div class="error-message" id="1363547369_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1285931960"><div class="ss-q-title">Previous entrepreneurial ventures
	</div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<textarea name="entry.1285931960" rows="8" cols="0" class="ss-q-long validate" id="entry_1285931960" dir="auto" aria-label="Previous entrepreneurial ventures  "></textarea>
	<div class="error-message" id="1236657700_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_551036280"><div class="ss-q-title">Have you been incubated earlier? 
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<textarea name="entry.551036280" rows="8" cols="0" class="ss-q-long validate" id="entry_551036280" dir="auto" aria-label="Have you been incubated earlier?   " aria-required="true" required=""></textarea>
	<div class="error-message" id="889785170_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_1932966836"><div class="ss-q-title">Additional references
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">Facebook, Twitter, Linkedin &amp; Bio page</div></label>
	<textarea name="entry.1932966836" rows="8" cols="0" class="ss-q-long validate" id="entry_1932966836" dir="auto" aria-label="Additional references Facebook, Twitter, Linkedin &amp; Bio page " aria-required="true" required=""></textarea>
	<div class="error-message" id="685631003_errorMessage"></div>
	
	</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
	<div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
	<label class="ss-q-item-label" for="entry_2111307235"><div class="ss-q-title">Primary Contact Details
	<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
	<span class="ss-required-asterisk">*</span></div>
	<div class="ss-q-help ss-secondary-text" dir="ltr">Name            # Mobile Phone 	#Land Line Phone     #Email ID   	# Address</div></label>
	<textarea name="entry.2111307235" rows="8" cols="0" class="ss-q-long validate" id="entry_2111307235" dir="auto" aria-label="Primary Contact Details Name            # Mobile Phone 	#Land Line Phone     #Email ID   	# Address " aria-required="true" required=""></textarea>
	<div class="error-message" id="1234812100_errorMessage"></div>
	
	</div></div></div>
	
	<ul><li><label><input type="checkbox" role="checkbox" class="ss-q-checkbox" aria-required="true" id="privacy">
I agree and consent to the terms of the <a href="/privacy" target="_blank">Privacy Policy.</a> I consent to PayPal processing and disclosing my data (including outside the EEA) and communicating with me according to that policy. I also consent to the use of website tracking methods, including cookies and similar technology.
	</label></li></ul>
	
	
	<input type="hidden" name="draftResponse" value="[,,&quot;3566563064317883291&quot;]
	">
	<input type="hidden" name="pageHistory" value="0">


	<input type="hidden" name="fbzx" value="3566563064317883291">

	<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
	<input type="submit" name="submit" value="Submit" id="ss-submit">
</td>
	</tr></tbody></table></div></ol>
	
	
	
	</form>
		
			<script type="text/javascript">_initFormViewer();</script>