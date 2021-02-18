import React from 'react';
import Header from './Header';
import Footer from './Footer';

function Error404(){
    return (
        <>
        <Header />
        <div className="main-404-page">
            <div className="container">
                <div className="row">
                    <div className="xs-12 md-12">
                        <div className="error-container">
                            <img itemprop="image" src="<?php echo $base_url; ?>assets/images/404page.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </> 
    );
}

export default Error404;