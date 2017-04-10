  var titles = [" Gladiator ", " How to Train your Dragon ", " Lion ", " Ever After "]; 
            document.getElementById("movies").innerHTML = titles;
            function titlesort(){
                titles.sort();
                document.getElementById("movies").innerHTML=titles;
            }

            function submitcard() {

            }

             <script src="/untitled.js">// use this to src to js file when you're connected to MAMP server


              getData() {
                    var data = {
                        description: this.description,
                        price: this.price,
                        quantity: this.qty,
                        url: this.url
                    };
                    return JSON.stringify (data);
                }