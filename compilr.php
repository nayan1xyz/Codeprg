<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("button").click(function(){

		    var to_compile = {
			    "LanguageChoice": colorVal,
			    "Program": $("#code").val(),
			    "Input": "",
			    "CompilerArgs" : ""
		    };

		    $.ajax ({
			        url: "https://rextester.com/rundotnet/api",
			        type: "POST",
			        data: to_compile
			    }).done(function(data) {
                    document.getElementById("Result").innerHTML ="<br><b>Compiled Results!!</b><br>"+"<b>Result</b> : " + data.Result  + "<br>" + "<b>Warnings</b> : " + data.Warnings + "<br>"+ "<b>Error</b> : " + data.Errors+ "<br><b>Status</b> : " + data.Stats;
                    // document.getElementById("Warnings").innerHTML =data.Warnings;
                    // document.getElementById("Errors").innerHTML =data.Errors;
			        // alert(JSON.stringify(data));
			    }).fail(function(data, err) {
			        alert("fail " + JSON.stringify(data) + " " + JSON.stringify(err));
		        });
	    });
    });
    </script>
    <script type="text/javascript">
        var colortxt;
        var colorVal;
        var eID;
        function changeColor() {
         eID = document.getElementById("languageID");
         colorVal = eID.options[eID.selectedIndex].value;
        //  colortxt = eID.options[eID.selectedIndex].text;
        // document.getElementById('colorDiv').innerHTML=colorVal;
        }
        </script>
    </head>
<body>
    <div class="container">
    
        <select  class="form-control mt-5" id="languageID" onchange="changeColor()">
            <option value="1">C#</option>
            <option value="2">VB.NET</option>
            <option value="3" >F#</option>
            <option value="4">Java</option>
            <option value="5">Python</option>
            <option value="6">C (gcc)</option>
            <option value="7">C++ (gcc)</option>
            <option value="8" >Php</option>
            <option value="9">Pascal</option>
            <option value="10">Objective-C</option>
            <option value="11">Haskell</option>
            <option value="12" >Ruby</option>
            <option value="13">Perl</option>
            <option value="14">Lua</option>
            <option value="15">Nasm</option>
            <option value="16">Sql Server</option>
            <option value="17">Javascript</option>
            <option value="18" >Lisp</option>
            <option value="19">Prolog</option>
            <option value="20">Go</option>
            <option value="21">Scala</option>
            <option value="22">Scheme</option>
            <!-- -------------------------------------- -->
            <option value="23">Node.js</option>
            <option value="24">Python 3</option>
            <option value="25" >Octave</option>
            <option value="26">C (clang)</option>
            <option value="27">C++ (clang)</option>
            <option value="28">C++ (vc++)</option>
            <option value="29">C (vc)</option>
            <option value="30" >D</option>
            <option value="31">R</option>
            <option value="32">Tcl</option>
            <option value="33">MySQL</option>
            <option value="34" >PostgreSQL</option>
            <option value="35">Oracle</option>
            <!-- <option value="36">Lua</option> -->
            <option value="37">Swift</option>
            <option value="38">Bash</option>
            <option value="39">Ada</option>
            <option value="40" >Erlang</option>
            <option value="41">Elixir</option>
            <option value="42">Ocaml</option>
            <option value="43">Kotlin</option>
            <option value="44">Brainf***</option>
            <option value="45">Fortran</option>
            <option value="46">Rust</option>
            <option value="47">Clojure</option>
            <option value="0" selected="selected">Choose Language</option>
          </select>
          <br>
       
       
       
          <center>
<textarea id="code" class="form-control" placeholder=" // Write your code here" class="mt-4" rows="18" cols="90" style="background-color: #2d2e2d; font-style: monospace; font-size: 20px; color: blanchedalmond;"></textarea>
	
<br>



	<button class="btn btn-success pl-5 pr-5 mb-5" id="run">Run</button>
</center>
</div>
<div class="container">
    <!-- <div class="text-center"> -->
        
        <span id="Result">
        
                <!-- </div> -->
</div>
</body>
</html>