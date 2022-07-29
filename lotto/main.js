let array_of_nums = [];
let count = 0;

function fill_table(){

    for(let i=0; i<3*6; i++){
        let number = Math.floor(Math.random() * 98) + 1;

        if(array_of_nums.indexOf(number) == -1){
            array_of_nums.push(number);
            document.getElementById(i).innerHTML = number;
        }else{
            i--;  // if number exists try to get number for the current index
        }    
    }

    console.log(array_of_nums);
    btn.textContent = "Get";      // change start button to get
    document.getElementById('btn').onclick = function() {ajax_request();};  // change function for button click

}

function ajax_request(){
   
    $.get("get_number.php",

        function(data){
            console.log(data);
            document.getElementById("get_num").innerHTML = data;
            
            // for testing the win you could comment the first <if> condition in <while> loop in get_numbers.php
            if(data == -1){ //the play is stoped and suggested to play again
                document.getElementById("get_num").innerHTML = "Oops!";
                document.getElementById("winner").innerHTML = "Sorry, you can try again.";
                document.getElementById("btn").textContent = "Play again";      
                document.getElementById('btn').onclick = function() { window.location.href = "index.html";};

            }else{

                document.getElementById("get_num").innerHTML = data;
                
                check_number(data);
                if(count == 18){ // if the 18 element change color get winner
                    document.getElementById("btn").textContent = "Play again";      
                    document.getElementById('btn').onclick = function() { window.location.href = "index.html";};

                    $.get("winner.php",

                    function(data){
                        document.getElementById("winner").innerHTML = data;
                    })
                } 
            }    
        }
    )
}

function check_number(num){
    num = parseInt(num);  // the argumet is string parse int for function indexOf

    if(array_of_nums.indexOf(num) != -1){ // check if number exists in lotto
        
        let index = array_of_nums.indexOf(num);
        // console.log("index = " +index);
        document.getElementById(index.toString()).style.backgroundColor = "green";
        count++;
        console.log("count = " + count);
    }else{
        console.log("not");
    }   
}

