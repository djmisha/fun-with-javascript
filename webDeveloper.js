class webDeveloper {
  constructor (name, age, type) {
    this.name = name;
    this.age = age;
    this.type = type;
  };
  greetDeveloper = () => {
    console.log(`${this.name} is a ${this.type}`);
  }
  writeCode = (hours, distractions) => {
    let codeHours = hours;
    codeHours = codeHours * 60; // convert hours to minutes

    let devDistractions = distractions;
    devDistractions = devDistractions * 15; // for every distraction means lost 15 min 
    
    let productivity;
    productivity = codeHours - devDistractions; 
    
    let averageLinesofCode = 50;  // average lines of code written by a dev according to research
    let averageLinesofCodePerMinute = (averageLinesofCode / 6.5) / 60;

    let writtenLinesOfCode = productivity * averageLinesofCodePerMinute;
    writtenLinesOfCode = Math.round(writtenLinesOfCode);
    
    console.log(
     `The developer coded for ${String(codeHours)} minutes
     and had ${String(devDistractions)} minutes of distractions. 
     He wrote about ${String(writtenLinesOfCode)} lines of code,`
     );
  return writtenLinesOfCode;  
  };
} 

const tyler = new webDeveloper("Tyler", 54, "Front End Developer");
tyler;
tyler.greetDeveloper();
tyler.writeCode(6.5, 10)

























