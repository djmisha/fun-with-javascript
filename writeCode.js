const writeCode = (hours, distractions) => {
  let codeHours = hours;
  codeHours = codeHours * 60; // convert hours to minutes

let devDistractions = distractions;
  devDistractions = devDistractions * 15; // for every distraction means lost 15 min 
   
	let productivity;
  productivity = codeHours - devDistractions; 

  let averageLinesofCode = 50;  // average lines of code written by a dev according to research
  let averageLinesofCodePerMinute = (averageLinesofCode / 6.5) / 60;

  let writtenLinesOfCode;
  writtenLinesOfCode = productivity * averageLinesofCodePerMinute;
  writtenLinesOfCode = Math.round(writtenLinesOfCode);
  
  console.log(
    `The developer coded for ${codeHours} minutes, and had ${devDistractions} minutes of disctrations. He wrote ${writtenLinesOfCode} lines of code,`
   )

  return writtenLinesOfCode;  
}

const misha = writeCode(6.5,3);

misha;
























