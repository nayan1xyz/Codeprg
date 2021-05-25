var x = '<?php echo $gendr?>';
console.log(x);
        if('male' === x){
            document.getElementById("male").checked = true;
        } else{
            document.getElementById("male").checked = false;
        }
        if('female' === x){
            document.getElementById("female").checked = true;
        } else{
            document.getElementById("female").checked = false;
        }
        if('other' === x){
            document.getElementById("other").checked = true;
        } else{
            document.getElementById("other").checked = false;
        }