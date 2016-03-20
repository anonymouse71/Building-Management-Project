<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TermsTableSeeder extends Seeder {

	public function run()
	{
		$terms = [
			[
				'details'      => '
				<p>By using Chaldal.com (also referred to as Chaldal or &ldquo;website&rdquo;) you agree to these conditions. Please read them carefully.</p>

<p><strong>Communication</strong></p>

<p>When you use Chaldal.com, or contact us via phone or email, you consent to receive communication from us. You authorize us to communicate with you by posting disclosures on the site, by email or by phone. &nbsp;Additionally any disclosures posted on the site, or sent to you by email fulfill the legal obligation of communication made in writing.</p>

<p><strong>Eligibility</strong></p>

<p>If you are&nbsp;a minor i.e. under the age of 18 years, you shall not register as a user of the&nbsp;Chaldal.com and shall not transact on or use the website. As a minor if you wish to use or transact on website, such use or transaction may be made by your&nbsp;legal guardian or parents on the website. Chaldal reserves the right to terminate&nbsp;your membership and / or refuse to provide you with access to the website if it is&nbsp;brought to Chaldal&rsquo;s notice or if it is discovered that you are under the age of 18&nbsp;years.</p>

<p><strong>Your Account and Responsibilities</strong></p>

<p>If you use the website, you will be responsible for maintaining the&nbsp;confidentiality of your username and password and you will be responsible&nbsp;for all activities that occur under your username. You agree&nbsp;that if you provide any information that is untrue, inaccurate, not current or&nbsp;incomplete or we have reasonable grounds to suspect that such information is&nbsp;untrue, inaccurate, not current or incomplete, or not in accordance with the this&nbsp;Terms of Use, we have the right to suspend or terminate your membership on the website.</p>

<p><strong>Charges</strong></p>

<p>Membership on the website is free for users. Chaldal does not charge any fee for browsing and buying on the website. Chaldal reserves the right to change its fee policy from time to time. In particular, Chaldal may at its sole discretion introduce new services and modify some or all of the existing services offered on the website. In such an event, Chaldal reserves the right to introduce fees for the new services offered or amend/introduce fees for existing services, as the case may be. Changes to the fee policy will be posted on the website and such changes will automatically become effective immediately after they are posted on the website.</p>

<p><strong>Copyright</strong></p>

<p>The material (including the content, and any other content, software or services) contained on Chaldal.com are the property of Chaldal Limited, its subsidiaries, affiliates and/or third party licensors. No material on this site may be copied, reproduced, republished, installed, posted, transmitted, stored or distributed without written permission from Chaldal Limited.</p>

<p>You may not use any &ldquo;deep-link&rdquo;, &ldquo;page-scrape&rdquo;, &ldquo;robot&rdquo;, &ldquo;spider&rdquo; or other&nbsp;automatic device, program, algorithm or methodology, or any similar or&nbsp;equivalent manual process, to access, acquire, copy or monitor any portion of the&nbsp;website or any content, or in any way reproduce or circumvent the navigational&nbsp;structure or presentation of the website or any content, to obtain or attempt to&nbsp;obtain any materials, documents or information through any means not purposely&nbsp;made available through the website. We reserve our right to bar any such&nbsp;activity.</p>

<p><strong>Cookies</strong>&nbsp;</p>

<p>This site uses cookies, which means that you must have cookies enabled on your computer in order for all functionality on this site to work properly. A cookie is a small data file that is written to your hard drive when you visit certain Web sites. Cookie files contain certain information, such as a random number user ID that the site assigns to a visitor to track the pages visited. A cookie cannot read data off your hard disk or read cookie files created by other sites. Cookies, by themselves, cannot be used to find out the identity of any user.</p>

<p><strong>Product Descriptions</strong></p>

<p>Chaldal attempts to be as accurate as possible. However, Chaldal does not warrant that product descriptions or other content of any Chaldal is accurate, complete, reliable, current, or error-free. If a product offered by Chaldal itself is not as described, your sole remedy is to return it in unused condition.</p>

<p><strong>Pricing</strong></p>

<p>Except where noted otherwise, the list price or suggested price displayed for products on Chaldal represents the full retail price listed on the product itself, suggested by the manufacturer or supplier, or estimated in accordance with standard industry practice; or the estimated retail value for a comparably featured item offered elsewhere. The list price or suggested price is a comparative price estimate and may or may not represent the prevailing price in every area on any particular day.</p>

<p>With respect to items sold by Chaldal, we cannot confirm the price of an item until you order. Despite our best efforts, a small number of the items in our catalog may be mispriced. If the correct price of an item sold by Chaldal is higher than our stated price, we will, at our discretion, either contact you for instructions before shipping or cancel your order and notify you of such cancellation.</p>

			',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			]

		];

		DB::table('terms_condition')->insert($terms);
	}


}