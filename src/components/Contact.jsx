import React from 'react';
import Header from './Header';
import Footer from './Footer';

function Contact(){
    return (
        <>
        <Header />
        <div className="container">
            <div className="breadcrumb breadcrumb-wrap">
                <ul itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a title="Home" itemprop="item" href="<?php echo $base_url; ?>">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a title="Contact Us" itemprop="item" href="javascript:void(0)" className="current">
                            <span itemprop="name">Contact Us</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ul>
            </div>
        </div>
        <div className="sub-page">
            <div className="container">
                <div className="row">
                    <div className="xs-12 md-8 m-auto">
                        <h1 className="h2-title"itemprop="headline">Contact Us</h1>
                        <div className="desc-text">
                            <p>We're happy to answer any questions you have. Just send us a message in the form below with any question you may have.</p>
                        </div>
                    </div>
                </div>    
                <div className="contact-form">
                    <form action="" method="get" accept-charset="utf-8">
                        <div className="row">
                            <div className="xs-12 md-8 lg-8 m-auto">
                                <div className="form-grp">
                                    <label for="">Enter Name*</label>
                                    <div className="input-field single-field">
                                        <input type="text" className="form-control" />
                                    </div>
                                </div>      
                            </div>
                            <div className="xs-12 md-8 lg-8 m-auto">
                                <div className="form-grp">
                                    <label for="">Enter Subject*</label>
                                    <div className="input-field single-field">
                                        <input type="text" className="form-control" />
                                    </div>
                                </div>      
                            </div>
                            <div className="xs-12 md-8 lg-8 m-auto">
                                <div className="form-grp">
                                    <label for="">Enter Email*</label>
                                    <div className="input-field single-field">
                                        <input type="text" className="form-control" />
                                    </div>
                                </div>      
                            </div>
                            <div className="xs-12 md-8 lg-8 m-auto">
                                <div className="form-grp">
                                    <label for="">Enter Message*</label>
                                    <div className="input-field single-field">
                                        <textarea name="message" className="form-control"></textarea>
                                    </div>
                                </div>      
                            </div>
                            <div className="xs-12 md-8 m-auto">
                                <button type="submit" className="sec-btn">Send</button>                                           
                            </div>                                 
                        </div>  
                    </form>
                </div>
            </div>
        </div>
        <Footer />
    </> 
    );
}

export default Contact;