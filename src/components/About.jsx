import React from 'react';
import Header from './Header';
import Footer from './Footer';

function About(){
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
                        <a title="About Us" itemprop="item" href="javascript:void(0)" className="current">
                            <span itemprop="name">About Us</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ul>
            </div>
        </div>
        <div className="sub-page">
            <div className="container">
                <div className="row">
                    <div className="md-12">
                        <h1 className="h2-title" itemprop="headline">About Us</h1>
                        <div className="desc-text">
                            <p>We are offering are random credit card details. These details are 100% fake and do not hold any value in real life. We do not offer any kind of credit card numbers that has money on it. This whole website is dedicated only for programming purposes.</p>
                            <p>We are generating Credit card details in bulk too. You can download bulk details of credit card in JSON, CSV and XML. Test your ecommerce website and validate tests using our generated fake credit card numbers.</p>
                            <p>We also have a valid credit card checker which you can check credit card number online simply enter the credit card validate the generated credit card values and check their major industry identifier and Personal Account Number of PAN.</p>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <Footer />
    </> 
    );
}

export default About;