import React from 'react';
import Header from './Header';
import Footer from './Footer';

function Privacy(){
    return (
        <>
        <Header />
        <div className="container">
            <div className="breadcrumb breadcrumb-wrap">
                <ul itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a title="Home" itemprop="item" href="javascript:void(0)">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a title="Privacy" itemprop="item" href="javascript:void(0)" className="current">
                            <span itemprop="name">Privacy</span>
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
                        <h1 className="h2-title" itemprop="headline">Privacy</h1>
                        <div className="desc-text">
                            <p>Credit Card Generator is committed to respecting the privacy of its users. However, we do collect and use various bits of information about you through your use of this website, and this policy sets out the basis on which your personal data will be collected, stored and processed. Please note that this policy only addresses our activities, and other websites to which this website links may have their own privacy policies and practices, which we do not control.</p>
                            <p>For each visitor to our webpage, our web server automatically recognizes information of your browser, IP address, and city/state/country. We collect only the domain name, but not the e-mail address of visitors to our webpage, the e-mail addresses of those who communicate with us via e-mail. The information we collect is used for internal review and is then discarded, used to improve the content of our webpage, used to customize the content and/or layout of our page for each individual visitor.</p>
                            <p>You should be aware that if we are requested by the police or any regulatory or government authority investigating suspected illegal activities to access and disclose individually identifiable information concerning your activities whilst using our website, we shall do so. We also reserve the right to disclose individually identifiable information to third parties where a complaint arises concerning your use of our website, and that use is deemed by us inconsistent with these conditions.</p>
                            <p>You should be aware that if we are requested by the police or any regulatory or government authority investigating suspected illegal activities to access and disclose individually identifiable information concerning your activities whilst using our website, we shall do so. We also reserve the right to disclose individually identifiable information to third parties where a complaint arises concerning your use of our website, and that use is deemed by us inconsistent with these conditions.</p>
                            <p>You should be aware that if we are requested by the police or any regulatory or government authority investigating suspected illegal activities to access and disclose individually identifiable information concerning your activities whilst using our website, we shall do so. We also reserve the right to disclose individually identifiable information to third parties where a complaint arises concerning your use of our website, and that use is deemed by us inconsistent with these conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </> 
    );
}

export default Privacy;