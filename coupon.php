<?php


?>
<div style="text-align:center">
    <input type="text" name="coupon" id="coupon" value="">
    <p id="show_code"></p>
    <button id="gencode">Generate Code</button>
</div>
<script>
    class generateCouponCode {

            
            //This are the listof alphabeth which the text generate from 
            alphabeth = [
                "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            ];
        getGenerateText(){
            var firstAlphabeth = Math.floor(Math.random() * 26);
            var secondAlphabeth = Math.floor(Math.random() * 26);
            var thirdAlphabeth = Math.floor(Math.random() * 26);
            //call the text generator with the random number gotten
            return this.setGeneratedText(firstAlphabeth,secondAlphabeth,thirdAlphabeth);
        }

        //this function receives the random numbers and return the text
        setGeneratedText(firstAlphabeth,secondAlphabeth,thirdAlphabeth){
            var text1 = this.alphabeth[firstAlphabeth].concat(this.alphabeth[secondAlphabeth], this.alphabeth[thirdAlphabeth]);
            return text1;
        }
         
        //this method helps to generate 4 random numbers
        generateFourRandomNumber(){
        var number = Math.floor(Math.random() * 9000);
        return number;
        }

        //this function prints the coupon code to be used
        usableCouponCode(){
            var code = this.getGenerateText()+this.generateFourRandomNumber()+ this.getGenerateText();
            return code;
        }

        //this shows the output of the result
        showCode(){
           return this.usableCouponCode();
        }
    }
    

    // + Math.random().toString(36).slice(1)
    
   
    var Gen = new generateCouponCode();

    //this is to generate three unique alphabeth


    // //this will randomly pick three letters
    // var text1 = alphabeth[firstAlphabeth].concat(alphabeth[secondAlphabeth], alphabeth[thirdAlphabeth]);

    // console.log(text1);

    // var shufflestring = "EGH";
    // // var strings = 
    // var coupon = document.getElementById('coupon');
    // var gencode = document.getElementById('gencode');
    var showcode = document.getElementById('show_code');
    var genbtn = document.getElementById('gencode');
    genbtn.addEventListener('click', function () {
        
        showcode.innerHTML = Gen.showCode();
    });

</script>