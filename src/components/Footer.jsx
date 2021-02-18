import React from 'react';

function Footer(){
    return (
       <>
        <footer className="footer">
            <div className="container" itemscope itemtype="https://schema.org/WPFooter">
                <div className="row">
                    <div className="xs-12 md-6 lg-6">
                        <nav className="footer-links">
                            <div itemscope itemtype="https://schema.org/SiteNavigationElement">
                                <ul>
                                    <li><a itemprop="url" className="active" href="./Disclaimer" title="Disclaimer">Disclaimer</a></li>
                                    <li><a itemprop="url" className="" href="./Privacy" title="Privacy">Privacy</a></li>
                                    <li><a itemprop="url" className="" href="./Faq" title="Faqs">faqs</a></li>
                                    <li className="link_item">
                                    <a className="dropdown-btn web_links" title="Other Links">Projects</a> 
                                        <ul className="list_links project-dropdown">  
                                            <li><a className="projectsLinks" href="https://digitalcoinprice.com/" target="_blank" title="Digital Coin Price"><span className="project_icon digitalcoinprice"></span>Digital Coin Price</a></li>
                                            <li><a className="projectsLinks" href="https://convert-tool.com/" target="_blank" title="Converter Tool"><span className="project_icon convert-tool"></span>Converter Tool</a></li>
                                            <li><a className="projectsLinks" href="https://debitcard-generator.com/" target="_blank" title="Debit Card Generator"><span className="project_icon debitcard-generator"></span>Debit Card Generator</a></li>
                                            <li><a className="projectsLinks" href="https://fakedetail.com/" target="_blank" title="Fake Details Online Generator"><span className="project_icon fakedetail"></span>Fake Details Online Generator</a></li>
                                            <li><a className="projectsLinks" href="https://fakenumber.net/" target="_blank" title="Fake Number Generator"><span className="project_icon fakenumber"></span>Fake Number Generator</a></li>
                                            <li><a className="projectsLinks" href="https://getmypincode.com/" target="_blank" title="Get My Pincode"><span className="project_icon getmypincode"></span>Get My Pincode</a></li>
                                            <li><a className="projectsLinks" href="https://mybankdetail.com/" target="_blank" title="My Bank Detail"><span className="project_icon mybankdetail"></span>My Bank Detail</a></li>
                                            <li><a className="projectsLinks" href="https://mybankswiftcode.com/" target="_blank" title="My Bank Swift Code"><span className="project_icon mybankswiftcode"></span>My Bank Swift Code</a></li>
                                            <li><a className="projectsLinks" href="http://ytubetool.com/" target="_blank" title="YTube Tool"><span className="project_icon ytubetool"></span>YTube Tool</a></li>
                                            <li><a className="projectsLinks" href="https://generatesignature.com/" target="_blank" title="Signature Generate"><span className="project_icon generatesignature"></span>Signature Generate</a></li>
                                            <li><a className="projectsLinks" href="http://getcoupon.co.in/" target="_blank" title="Get Coupon"><span className="project_icon getcoupon"></span>Get Coupon</a></li>
                                            <li><a className="projectsLinks" href="https://wpresource.info/" target="_blank" title="WP Resource"><span className="project_icon wpresource"></span>WP Resource</a></li>
                                            <li><a className="projectsLinks" href="https://globaltimeconverter.com/" target="_blank" title="Global Time Converter"><span className="project_icon globaltimeconverter"></span>Global Time Converter</a></li>
                                            <li><a className="projectsLinks" href="https://digitalcoinprice.com/coins/ripple" target="_blank" title="Ripple Price"><span className="project_icon digitalcoinprice"></span>Ripple Price</a></li> 
                                            <li><a className="projectsLinks" href="https://digitalcoinprice.com/coins/foin" target="_blank" title="foin Price"><span className="project_icon digitalcoinprice"></span>Foin Price</a></li> 
                                            <li><a className="projectsLinks" href="https://digitalcoinprice.com/coins/tron" target="_blank" title="Tron Price"><span className="project_icon digitalcoinprice"></span>Tron Price</a></li>
                                        </ul>
                                    </li>		
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div className="xs-12 md-6 lg-6">
                        <div id="share-buttons" className="social-btn">
                            <a title="Share via Facebook" target="_blank" href="#">
                                <span itemprop="image" className="all-share facebook"></span>
                            </a>
                            <a title="Share via Twitter" target="_blank" href="#">
                                <span itemprop="image" className="all-share twitter"></span>
                            </a>
                            <a title="Share via LinkedIn" target="_blank" href="#">
                                <span itemprop="image" className="all-share linkedin"></span>
                            </a>
                            <a title="Share via Pinterest" target="_blank" href="#">
                                <span itemprop="image" className="all-share pinterest"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
     
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/custom-demo.js"></script>
        
    </>
    
    );
}

export default Footer;