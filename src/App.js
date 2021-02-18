import './App.css';
import {useState} from "react";
import Axios from "axios";

import Header from './components/Header';
import Footer from './components/Footer';
import levenshtein from "js-levenshtein";


function App() {

  const [userinput, getWord] = useState("");
  const [nowordfounds, nowordfound] = useState("");
  const [total_word, total_word_found] = useState("");

  /* UseState For Print Data Character Wise */

  const two_char = [];
  const three_char = [];
  const four_char = [];
  const five_char = [];
  const six_char = [];
  const seven_char = [];
  const eight_char = [];
  const nine_char = [];
  const ten_char = [];



  var two_count = 0;
  var three_count = 0;
  var four_count = 0;
  var five_count = 0;
  var six_count = 0;
  var seven_count = 0;
  var eight_count = 0;
  var nine_count = 0;
  var ten_count = 0;

  const [two_characters, two_character] = useState("");
  const [three_characters, three_character] = useState("");
  const [four_characters, four_character] = useState("");
  const [five_characters, five_character] = useState("");
  const [six_characters, six_character] = useState("");
  const [seven_characters, seven_character] = useState("");
  const [eight_characters, eight_character] = useState("");
  const [nine_characters, nine_character] = useState("");
  const [ten_characters, ten_character] = useState("");

  const [two_counts, two_word_count] = useState("");
  const [three_counts, three_word_count] = useState("");
  const [four_counts, four_word_count] = useState("");
  const [five_counts, five_word_count] = useState("");
  const [six_counts, six_word_count] = useState("");
  const [seven_counts, seven_word_count] = useState("");
  const [eight_counts, eight_word_count] = useState("");
  const [nine_counts, nine_word_count] = useState("");
  const [ten_counts, ten_word_count] = useState("");

  /* On Button Click Call Function */

  const getWords = (event) =>{

    const inputText = document.getElementsByName("userinput")[0].value;
    const startwith = document.getElementsByName("startwith")[0].value;
    const endwith = document.getElementsByName("endwith")[0].value;
    const inputText_length = inputText.length;

    //post data to the node/express for data

    Axios.post('http://localhost:8000/create',{name:inputText,startwith:startwith,endwith:endwith}).then((Response) => {
     
    // console.log(Response.data);
   
    /* Condition For Print Data Character Wise  START */

    if(Response.data.length != 0){

      /*  Print Total Finded Word */

      const total_words = Response.data.length;
      total_word_found(total_words);
      
      
      /* Print Data Character Wise */
      Response.data.forEach((product) => {
       
        
          if(product.word.length == 2 && product.word.length <= inputText_length){

             two_char.push( <p> {product.word} </p> )
             two_count++;

             if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
             }
            
            }
          if(product.word.length == 3 && product.word.length <= inputText_length){

            three_char.push( <p>{product.word} </p>)
            three_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
            }
          }
          if(product.word.length == 4 && product.word.length <= inputText_length){

            four_char.push(<p> {product.word} </p> )
            four_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
                
            }
          }
          if(product.word.length == 5 && product.word.length <= inputText_length){

             five_char.push(<p> {product.word}</p>)
             five_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
            }

          }
          if(product.word.length == 6 && product.word.length <= inputText_length){

            six_char.push( <p> {product.word}</p>)
            six_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
            }
          }
          if(product.word.length == 7 && product.word.length <= inputText_length){

            seven_char.push( <p> {product.word}</p>)
            seven_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
            }
          }
          if(product.word.length == 8 && product.word.length <= inputText_length){

            eight_char.push( <p> {product.word}</p>)
            eight_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
            }
          }
          if(product.word.length == 9 && product.word.length <= inputText_length){

             nine_char.push( <p> {product.word}</p>)
             nine_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
            }
          }
          if(product.word.length == 10 && product.word.length <= inputText_length){

            ten_char.push( <p> {product.word}</p>)
            ten_count++;

            if(product.word.length == inputText_length){
                var compare_wrd = levenshtein(product.word, inputText);
                console.log(compare_wrd);
            }
          }

      })
        
        two_character(two_char);
        three_character(three_char);
        four_character(four_char);
        five_character(five_char);
        six_character(six_char);
        seven_character(seven_char);
        eight_character(eight_char);
        nine_character(nine_char);
        ten_character(ten_char);

        two_word_count(two_count);
        three_word_count(three_count);
        four_word_count(four_count);
        five_word_count(five_count);
        six_word_count(six_count);
        seven_word_count(seven_count);
        eight_word_count(eight_count);
        nine_word_count(nine_count);
        ten_word_count(ten_count);
      
    }else{

        total_word_found("No Word Found");
      
    }


    getWord(inputText);

    });
  }

  return (
    <>

    <div className="App">
        <h1>Scrabble Letter Generator and Word Finder</h1>
        <br/><label>Enter Letters</label>
        <br/>
        <br/>
        <input type="text" name="userinput" id="userinput" placeholder="ENTER LETTERS"  />
        <br/><br/>
        
        <input type="text" name="startwith" id="startwith" placeholder="START WITH"  />
        <br/><br/>
        <input type="text" name="endwith" id="endwith" placeholder="END WITH"  />
        <br/><br/>
        <button className="btn btn-primary" onClick={event => getWords()}>Get Words</button>
        <br/><br/>
        <h1>INPUTED WORD</h1>
       
        <p>{userinput}</p>
        <h1>TOTAL WORDS</h1>
        <p>{total_word}</p>
        <br/><br/>
        <h1>WORDS</h1>
        <div>

         
        </div>

        <div className="w3-panel w3-card w3-red">
            <h2>2 letters word ({two_counts})</h2>
            {two_characters}
        </div>
        <div className="w3-panel w3-card w3-red">
            <h2>3 letters word ({three_counts})</h2>
            {three_characters}
        </div>
        <div className="w3-panel w3-card w3-red">
            <h2>4 letters word ({four_counts})</h2>
            {four_characters}
        </div>
        <div className="w3-panel w3-card w3-red">
            <h2>5 letters word ({five_counts})</h2>
            {five_characters}
        </div>
        <div className="w3-panel w3-card w3-red">  
            <h2>6 letters word ({six_counts})</h2>
            {six_characters}
        </div>           
        <div className="w3-panel w3-card w3-red">
            <h2>7 letters word ({seven_counts})</h2>
            {seven_characters}
        </div>
        <div className="w3-panel w3-card w3-red">
            <h2>8 letters word ({eight_counts})</h2>
            {eight_characters}
        </div>
        <div className="w3-panel w3-card w3-red">
            <h2>9 letters word ({nine_counts})</h2>
            {nine_characters}
        </div>
        <div className="w3-panel w3-card w3-red">
            <h2>10 letters word ({ten_counts})</h2>
            {ten_characters}
        </div>
        
        <p>{nowordfounds}</p>
    
    </div>
   
    </>
  );
}

export default App;
