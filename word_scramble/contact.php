<?php require_once('include/header.php'); ?>

<div class="container">
    <div class="breadcrumb breadcrumb-wrap">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a title="Home" itemprop="item" href="<?php echo $base_url; ?>">
                    <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a title="Contact Us" itemprop="item" href="javascript:void(0)" class="current">
                    <span itemprop="name">Contact Us</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ul>
    </div>
</div>
<div class="sub-page">
    <div class="container">
        <div class="row">
            <div class="xs-12 md-8 m-auto">
                <h1 class="h2-title"itemprop="headline">Contact Us</h1>
                <div class="desc-text">
                    <p>We're happy to answer any questions you have. Just send us a message in the form below with any question you may have.</p>
                </div>
            </div>
        </div>    
        <div class="contact-form">
            <form action="" method="get" accept-charset="utf-8">
                <div class="row">
                    <div class="xs-12 md-8 lg-8 m-auto">
                        <div class="form-grp">
                            <label for="">Enter Name*</label>
                            <div class="input-field single-field">
                                <input type="text" class="form-control">
                            </div>
                        </div>      
                    </div>
                    <div class="xs-12 md-8 lg-8 m-auto">
                        <div class="form-grp">
                            <label for="">Enter Subject*</label>
                            <div class="input-field single-field">
                                <input type="text" class="form-control">
                            </div>
                        </div>      
                    </div>
                    <div class="xs-12 md-8 lg-8 m-auto">
                        <div class="form-grp">
                            <label for="">Enter Email*</label>
                            <div class="input-field single-field">
                                <input type="text" class="form-control">
                            </div>
                        </div>      
                    </div>
                    <div class="xs-12 md-8 lg-8 m-auto">
                        <div class="form-grp">
                            <label for="">Enter Message*</label>
                            <div class="input-field single-field">
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                        </div>      
                    </div>
                    <div class="xs-12 md-8 m-auto">
                        <button type="submit" class="sec-btn">Send</button>                                           
                    </div>                                 
                </div>  
            </form>
        </div>
    </div>
</div>

<?php require_once('include/footer.php'); ?>