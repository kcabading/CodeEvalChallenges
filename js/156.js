
var fs  = require("fs");

var output = "";

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {
        // initialise
        var bUpperCase = true;
        // loop through each text
        for (var letter of line){
            if (letter !== " " && /[a-zA-Z]/.test(letter) ) {
                if (bUpperCase) {
                        output += letter.toUpperCase();
                } else {
                        output += letter.toLowerCase();
                }
                bUpperCase = !bUpperCase;
            } else {
                output += letter;
            }
        }
        output += '\n';
    }
});

console.log(output);


// var fs  = require("fs");
// var lines = [];
// var content = fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function(line) {
//         var cnt = 0;
//         lines.push(
//                 line.replace(/[a-z]/gi, function(c) {
//                         return ( 0 === cnt++ % 2
//                                 ? c.toUpperCase()
//                                 : c.toLowerCase()
//                         );
//                 })
//         );
// });

// process.stdout.write(lines.join("\n"));

