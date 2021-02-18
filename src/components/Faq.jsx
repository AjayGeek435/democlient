import React from 'react';
import Header from './Header';
import Footer from './Footer';

function Faq(){
    return (
        <>
        <Header />
        <div class="container">
            <div class="breadcrumb breadcrumb-wrap">
                <ul itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a title="Home" itemprop="item" href="#">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a title="FAQ" itemprop="item" href="#" class="current">
                            <span itemprop="name">FAQ</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="sub-page">
            <div class="container">
                <div class="row">
                    <div class="md-12">
                        <h1 class="h2-title" itemprop="headline">Frequently Asked Questions</h1>
                        <div class="desc-text">
                            <h3>How are we generating credit card numbers with details?</h3>
                            <p>The number that a particular credit card carries can only be deemed legitimate or valid if it has been generated with the help of a luhn algorithm. luhn algorithm is an MOD 10 algorithm. The beauty of this algorithm is that it completely nullifies the chance of any errors or accidents from ever taking place. Once the Major Industry Identifier and the Issuer Identification Number are known to the concerned person, in charge of generating the number of your particular credit card, it is quite easy to obtain a random card number that is in accordance with the norms of the aforementioned algorithm.</p>
                            <h3>What is a Credit Card?</h3>
                            <p>A credit card allows anyone to borrow money from your bank instantly. You can almost buy anything with a credit card well as long as the store accepts it. Buy anything you want as long as you do not exceed your credit limit. Of course, this borrowed amount comes with interest. At the end of the month you should pay the principal amount if not you will have to pay the principal together with the interest after the due date.
                            </p>
                            <p>A credit card is a rectangular piece of plastic that is issued to cardholders by banks. While it may not be money, per se, holders can use it to purchase items and services. The card, then, acts as a promise that the holder will clear his or her dues to the bank, which has paid for them at the moment, at a fixed date along with other applicable charges. Credit cards have an economic advantage in that it increases the rate of transactions in a country, due to the credit facilities, thereby, increasing the productivity levels, which increases the GDP.</p>
                            <p>After the cashier punched every item you bought and ask for payment, give you credit card and identification. They will swipe your credit card and type the total amount due makes sure they type the write amount. They will produce 3 copies of the transaction made by the terminal one for the merchant copy, the bank copy and your copy the customer. You will ask to sign the merchant and bank copy and get your copy of the slip.</p>

                            <h3 id="how-to-generate">How generates credit cards?</h3>
                            <p>Anyone can generate their own credit card as long as you follow the formula on doing it. We have luhn algorithm which basically checks the validity of the credit card number. A credit card number consists of a prefix which is the Major Industry Identifier, the 6-digit Issuer identification number and the 7 to final digits as Personal Account Number. Credit card generated should be validated using Mod10 algorithm to avoid errors.</p>

                            <h3 id="cvv">What is CVV?</h3>
                            <p>CVV stands for Card Verification Value. It is, usually, printed on the back side of a credit or debit card. Normally, it consists of three numeric digits, however, on a credit or debit card that belongs to American Express, it consists of 4 digits. It is a security kink in order to ensure that your card is physically present with you, and no unethical transaction is being set into motion. It is a way to sort of obstruct a fraudulent activity or card theft from taking place, even if temporarily. While entering your CCV online for authentication, make sure that it is hidden by asterisks.</p>

                            <h3 id="valid">What do you mean by a Valid Credit Card?</h3>
                            <p>When we say <strong>Valid credit card number</strong> we are simply saying that the credit card number generated are valid ones because they follow all the rule formula to acquire a credit card number just like an actual credit card number but you should take in mind that only the 16-digit credit card numbers are valid the other data generated together with it such as the name, address, expiration date, credit limit and etc. are completely random details which do not hold any real value.</p>

                            <h3 id="luhn_algorithm">What is Luhn Algorithm or Mod 10?</h3>
                            <p>The Luhn algorithm or Luhn formula, also known as the "modulus 10" or "mod 10" algorithm, is a simple checksum formula used to validate a variety of identification numbers, such as credit card numbers, IMEI numbers, National Provider Identifier numbers in the United States, Canadian Social Insurance Numbers, Israel ID Numbers and Greek Social Security Numbers (ΑΜΚΑ). It was created by IBM scientist Hans Peter Luhn and described in U.S. Patent No. 2,950,048, filed on January 6, 1954, and granted on August 23, 1960.</p>
                            <p>Assume an example of an account number "7992739871" that will have a check digit added, making it of the form 7992739871x:</p>
                            <p>The sum of all the digits in the third row is 67+x.</p>
                            <p>The check digit (x) is obtained by computing the sum of the non-check digits then computing 9 times that value modulo 10 (in equation form, ((67 × 9) mod 10)). In algorithm form:</p>
                            <ol>
                                <li>Compute the sum of the non-check digits (67).</li>
                                <li>Multiply by 9 (603).</li>
                                <li>The units digit (3) is the check digit. Thus, x=3.</li>
                            </ol>
                            <p>(Alternative method) The check digit (x) is obtained by computing the sum of the other digits (third row) then subtracting the units digit from 10 (67 =&gt; Units digit 7; 10 − 7 = check digit 3). In algorithm form:</p>
                            <ol>
                                <li>Compute the sum of the non-check digits (67).</li>
                                <li>Take the units digit (7).</li>
                                <li>Subtract the units digit from 10.</li>
                                <li>The result (3) is the check digit. In case the sum of digits ends in 0 then 0 is the check digit.</li>
                            </ol>
                            <p>This makes the full account number read 79927398713. </p>

                            <h3 id="best">Which is the best credit card company?</h3>
                            <p>If you are looking for the best credit card company probably because you are simply looking for a credit card company or a banking institution that gives a very low insterest rate plus the other perks like points on every purchases. On this day of modern banking there are tons of banks that offers the tremendous promos but at the end of the day you will simply need to pay your used credits in worst case together with the high interests..</p>

                            <h3 id="use">What's the use of these credit card numbers?</h3>
                            <p>All credit card numbers generated from <a title="Home" href="#">Home</a> are completely valid credit card numbers generated along with Name, Country origin, Expiration Date and security details such as CVV/CVV2. However, all the provided details are DO NOT HOLD any real value. They are completely random and 100% fake! You cannot use the credit card generated on making actual online payments since the CVV and card number cannot be integrated as a one. And merchants will perform a series of validations to check the credit card entered if they are valid ones. Since these credit cards do not have any real value you simply cannot do that.</p>
                            <p>However, you can use these credit card details if you do not want to disclose your real credit card information if you are checking out products on certain websites that requires you to enter your financial details. Because we believe asking for such sensitive information does not really matter if you are just checking the product out unless you really intended to buy the product.</p>

                            <h3 id="buy">Can I buy something using these credit cards?</h3>
                            <p>No! Credit Credit card generated does not hold any real value. They are completely made up and random. Unless you are using it for verification purposes then it could be used for that. Otherwise, it's a big no. You can still try though.</p>

                            <h3>Is this Legal?</h3>
                            <p>Very much so. Credit cards have not only been accepted by the monetary institutions and financial governance authorities of every country, but they have also been accepted by international monetary giants like the IMF and World Bank as legitimate substitutes for monetary transactions. When a bank or some monetary institution issues you a card that corresponds to their bank, you are required to sign a contract, stating all the rules on the basis of which your partnership will be formed. This includes a predetermined date of payment, additional charges and EMIs, among others. Read the contract carefully before signing it.</p>
                        </div>
                        <meta itemprop="mainEntityOfPage" content="#" />
                        <meta itemprop="headline" content="Credit Card Generator" />
                        <div itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <meta itemprop="name" content="Credit Card Generator" />
                        </div>
                        <meta itemprop="alternativeHeadline" content="" />
                        <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="./assets/images/cardlogo.png" />
                            <meta itemprop="width" content="740" />
                            <meta itemprop="height" content="393" />
                        </div>
                        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                <meta itemprop="url" content="./assets/images/cardlogo.png" />
                                <meta itemprop="width" content="250" />
                                <meta itemprop="height" content="60" />
                            </div>
                            <meta itemprop="name" content="Reliablesoft" />
                        </div>
                        <meta itemprop="description" content="" />
                        <meta itemprop="datePublished" content="May 7, 2015" />
                        <meta itemprop="dateModified" content="November 08, 2018" />
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </> 
    );
}

export default Faq;