<!DOCTYPE html>
<html lang="en">
<?php
echo $base_url;
require_once('config.php');
$base_url = 'http://dev.fakedetail.com/projects/word_scramble/';
?>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title><?php echo $title; ?></title>

   <meta name="viewport" content="width=device-width,minimum-scale=1" />

   <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/font-awesome.min.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/style-demo.css"/>

   <link rel="icon" href="<?php // echo $base_url; ?>assets/images/favicon.png" type="image/gif" sizes="20x20">

   <script type="application/ld+json">
    { 
     "@context": "http://schema.org",
     "@type": "Organization",
     "name": "Credit Card Number Generator",
     "url": "http://dev.ccard-generator.com",
     "logo": "http://dev.ccard-generator.com/assets/images/cardlogo.png",
     "description": "Credit Card Number Generator with CVV and other Details. Generate Credit Card Number for Visa, Matsercard, Americal Express, China UnionPay, Diners, JCB & more."
 }
</script>
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Person",
      "name" : "Credit Card Number Generator",
      "url" : "http://dev.ccard-generator.com"
  }
</script>
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "http://dev.ccard-generator.com",
      "name": "Credit Card Generator and Validator | CCard Generator",
      "author": {
      "@type": "Person",
      "name": "Admin"
  },
  "description": "Credit card generator is used to generate valid credit card numbers with complete security details.",
  "publisher": "Admin"
}
</script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <header class="header">
       <div itemscope itemtype="https://schema.org/WPHeader">
        <div class="container">
            <div class="main-header">
                <div class="row">
                   <div class="xs-12 md-3 lg-3">
                      <div class="logo">
                          <a title="Fake Details Online Generator"  itemprop="url" href="<?php echo $base_url; ?>">
                           <img itemprop="image" src="<?php echo $base_url; ?>assets/images/main-logo.png">
                       </a>
                   </div>
               </div>
               <div class="sm-12 md-9 lg-9">
                  <nav class="navigationbar">
                    <button type="button" class="menu-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="menu">
                        <div itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <ul>
                                <li class="active"><a itemprop="url" title="Home" href="<?php echo $base_url; ?>">Home</a></li>
                                <li><a itemprop="url" title="About Us" href="<?php echo $base_url; ?>about.php">About US</a></li>
                                <li><a itemprop="url" title="Contact Us" href="<?php echo $base_url; ?>contact.php">Contact US</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
</header>
<main>

