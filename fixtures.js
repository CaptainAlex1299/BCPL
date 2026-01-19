function updateElements() {
  // Fetch returns a Promise
  fetch('playerNames.php')
    .then(response => {
      // Check if the request was successful (status code 200)
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      // Parse the response as JSON
      return response.json();
    })
    .then(data => {

      // Run additional code here, as needed
      console.log('Code after AJAX has run successfully');
        
    let playerString = ""; 
    let playerString1 = "";
    let playerString2 = "";
    let playerString3 = "";
    let playerString4 = "";
    let playerString5 = "";
    let playerString6 = "";
    var Monday1fix = data.Monday1;
    var Monday2fix = data.Monday2;
    var Tuesday1fix = data.Tuesday1;
    var Tuesday2fix = data.Tuesday2;
    var Wednesday1fix = data.Wednesday1;
    var Wednesday2fix = data.Wednesday2;
    var Thursday1fix = data.Thursday1;
    var Thursday2fix = data.Thursday2;
    var Friday1fix = data.Friday1;
    var Friday2fix = data.Friday2;
    var Saturday1fix = data.Saturday1;
    var Saturday2fix = data.Saturday2;
    var Sunday1fix = data.Sunday1;
    var Sunday2fix = data.Sunday2;
    
    
    function playerfix(){
    for (var i = 0; i < Monday1fix.length; i = i +1)
    playerString = playerString + "<div class='d-flex flex-row bd-highlight mb-3 justify-content-center'>" + Monday1fix[i] + Monday2fix[i] + "</div>";
    document.getElementById("Mondayfixtures").innerHTML = playerString;
    };
    function playerfix1(){
      for (let i1 = 0; i1 < Tuesday1fix.length; i1 = i1 +1)
      playerString1 = playerString1 + "<div class='d-flex flex-row bd-highlight mb-3 justify-content-center'>" + Tuesday1fix[i1] + "" + Tuesday2fix[i1] + "</div>";
      document.getElementById("Tuesdayfixtures").innerHTML = playerString1;
    
    };
    
    function playerfix2(){
    for (let i2 = 0; i2 < Wednesday1fix.length; i2 = i2 +1)
      playerString2 = playerString2 + "<div class='d-flex flex-row bd-highlight mb-3 justify-content-center'>" + Wednesday1fix[i2] + "" + Wednesday2fix[i2] + "</div>";
      document.getElementById("Wednesdayfixtures").innerHTML = playerString2;
    }

    function playerfix3(){
    for (let i3 = 0; i3 < Thursday1fix.length; i3 = i3 +1)
      playerString3 = playerString3 + "<div class='d-flex flex-row bd-highlight mb-3 justify-content-center'>" + Thursday1fix[i3] + "" + Thursday2fix[i3] + "</div>";
      document.getElementById("Thursdayfixtures").innerHTML = playerString3;
    }

    function playerfix4(){
    for (let i4 = 0; i4 < Friday1fix.length; i4 = i4 +1)
      playerString4 = playerString4 + "<div class='d-flex flex-row bd-highlight mb-3 justify-content-center'>" + Friday1fix[i4] + "" + Friday2fix[i4] + "</div>";
      document.getElementById("Fridayfixtures").innerHTML = playerString4;
    }

    function playerfix5(){
    for (let i5 = 0; i5 < Saturday1fix.length; i5 = i5 +1)
      playerString5 = playerString5 + "<div class='d-flex flex-row bd-highlight mb-3 justify-content-center'>" + Saturday1fix[i5] + "" + Saturday2fix[i5] + "</div>";
      document.getElementById("Saturdayfixtures").innerHTML = playerString5;
    }

    function playerfix6(){
    for (let i6 = 0; i6 < Sunday1fix.length; i6 = i6 +1)
      playerString6 = playerString6 + "<div class='d-flex flex-row bd-highlight mb-3 justify-content-center'>" + Sunday1fix[i6] + "" + Sunday2fix[i6] + "</div>";
      document.getElementById("Sundayfixtures").innerHTML = playerString6;
    }
     
    
        playerfix();
        playerfix1();
        playerfix2();
        playerfix3();
        playerfix4();
        playerfix5();
        playerfix6();
    })
    .catch(error => {
      console.error('Error during fetch operation:', error);
    });
}

updateElements();