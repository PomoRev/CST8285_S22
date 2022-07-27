// Example of JavaScript bound to an HTML element


const inspiration = {
    "quotes": [
        {"quote":  "potatoe", "author": "someone"},
        {"quote":  "carrot", "author": "somelse"},
        {"quote":  "cucumber", "author": "sometwo"},
        {"quote":  "beet", "author": "somethree"},
    ]
};

function helloWorld() {


    console.log("inside helloworld()");
    int rndQuote = (Math.random() * inspiration.quotes.length)

    alert(rndQuote);

}