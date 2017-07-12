var fs  = require("fs");
var output = "";
fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (line !== "") {
        // cache the length of the line
        var intLineLength = line.length;
        var outputLine = "";
        // more than 40 cx?
        if (intLineLength < 55 ) {
            outputLine = line.trim();
        } else {
            // trim to 40 cx and trim whitespaces
            outputLine = line.slice(0, 39);
            // test for space character
            if (/\s/.test(outputLine)) {
                // initialise last index
                var intLast = 39;
                while (outputLine[intLast] !== ' ') {
                    outputLine = outputLine.slice(0, intLast--);
                }
            }
            // trim and add
            outputLine = outputLine.trim() + '... <Read More>';
        }
        // add to final output
        output += outputLine + '\n';
    }
});
// output final answer
console.log(output);
