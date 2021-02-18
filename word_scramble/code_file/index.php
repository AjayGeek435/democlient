<?php 
	$conn = mysqli_connect('localhost','root','','words');
	if(isset($_POST['submit']) && !empty($_POST['submit'])){
		$word_scrabble = $_POST['word_scrabble'];
		$word_scrabble1 = $_POST['word_scrabble1'];
		echo $word_scrabble1;
		$array = explode(',', $word_scrabble1);
		// $array1 = array();
		// foreach($array as $key => $value) {
		// 	$sql = 'SELECT * FROM words WHERE word LIKE "%'.$value.'%"';
		// 	$query = mysqli_query($conn,$sql);
		// 	if(mysqli_num_rows($query) > 1){
		// 		while($row = mysqli_fetch_assoc($query)) {
		// 		   	if(strlen($row["word"]) == 7) {
		// 		   		array_push($array1, $row["word"]);
		// 		   	}
		// 		}
		// 	}
		// }
		echo '<pre>'; print_r($array);exit();
	}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Word Scrabble Generator</title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
 </head>
 <body class="container-fluid">
 	<form method="Post" accept-charset="utf-8" id="word_scrabble_form">
 		<div class="form-row align-items-center">
		    <div class="col-auto">
		      	<label for="word_scrabble" class="sr-only">Word Scrabble :</label>
		      	<input type="text" class="form-control mb-2" id="word_scrabble" name="word_scrabble" placeholder="Enter Word Scrabble :">
		      	<input type="hidden" class="form-control mb-2" id="word_scrabble1" name="word_scrabble1" placeholder="Enter Word Scrabble :">
		    </div>
		    <div class="col-auto">
 				<input type="submit" class="btn btn-primary mb-2" name="submit" value="Search" id="submit_btn">
		    </div>
		</div>
 	</form>
	<div>
		<?php if(isset($_POST['submit']) && !empty($_POST['submit'])) {?>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($query)) {
				    echo "<tr><td>".$row["id"]."</td><td>".$row["word"]."</td></tr>";
				  }?>
		</table>
		<?php } ?>
	</div>

	<footer>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
		</script>
		<script>
			$('#word_scrabble_form').submit(function(){
				var a = $("#word_scrabble").val();
				var arr1 = mail_listing(a);
				var arr2 = mail_listing(ReverseString(a));
				$('#word_scrabble1').val(cleanArray(arr2));
				return true;
			});
			function cleanArray(actual)
			{
			    var newArray = new Array();
			    for(var i = 0; i<actual.length; i++)
			    {
			        if(actual[i] && actual[i] != '')
			        {
			        	if(actual[i].length > 1){
			        		for (var k = 0; k < actual[i].length; k++){
			            		newArray.push(actual[i][k]);
			        		}
			        	}else{
			            	newArray.push(actual[i][0]);
			        	}
			        }
			    }
			    return unique(newArray);
			}
			function ReverseString(str) { 
				if(!str || str.length < 2 || typeof str!== 'string') { 
					return 'Not valid'; 
				} 
				const revArray = []; 
				const length = str.length - 1; 
				for(let i = length; i >= 0; i--) { 
					revArray.push(str[i]); 
				} 
				return revArray.join(''); 
			} 
			function unique(list) {
			    var result = [];
			    $.each(list, function(i, e) {
			        if ($.inArray(e, result) == -1) result.push(e);
			    });
			    return result;
			}
			function substr_replace(str, replace, start, length) {
			    if (start < 0) {
			        start = start + str.length;
			    }
			    length = length !== undefined ? length : str.length;
			    if (length < 0) {
			        length = length + str.length - start;
			    }
			    return [str.slice(0, start), replace.substr(0, length), replace.slice(length), str.slice(start + length)].join("");
			}
			var result = [];
			var start = 1;
			var s_point = 1;
			var e_point = 1000;
			function mail_listing(a) {
			    if (a) {
			        result.push(a);
			        var strlen = a.length;
			        for (var i = 0; i < strlen; i++){
			            var pos = i + 1;
			            if (pos < strlen) {
			                var n1 = substr_replace(a, ".", pos, 0);
			                if ((start >= s_point) & (start <= e_point)) {
			                    result.push(n1);
			                }
			                if (start > e_point) {
			                    break;
			                }
			                start++;
			                abc(n1, pos);
			            }
			        }
			      	// console.log(result);
			      	var array_val1 = []; 
			        $.each(result,function(i,v){
			      		var array_val = []; 
			        	var val = v.split('.');
						$.each(val,function(inedx,value){
			        		if(value.length > 1){
			        			array_val.push(value);
			        		}
						});
						array_val1.push(unique(array_val));
			        	// console.log(unique(array_val));
			        });
			        return (unique(array_val1));
			    }
			}
			function abc(s, pos) {
			    for (var j = 0; j < s.length; j++) {
			        var p = pos + j + 2;
			        if (p < s.length) {
			            var str = substr_replace(s, ".", p, 0);
			            if ((start) => s_point && start <= e_point) {
			                result.push(str);
			            }
			            if (start > e_point) {
			                break;
			            }
			            start++;
			            abc(str, p);
			        }
			    }
			}
		</script>
 	</footer> 	
 </body>
 </html>
