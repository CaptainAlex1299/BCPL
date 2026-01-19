


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

          console.log('Code after AJAX has run successfully');
            //Monday Fixtures
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
        for (let i = 0; i < Monday1fix.length; i = i +1)
        playerString = playerString + "<p>" + Monday1fix[i] + "</p>";
        let playerStrings = "";
        playerStrings = playerStrings + "<p>" + Monday2fix[i] + "</p>";
        document.getElementById("Mondayfixtures").innerHTML = playerString;
        document.getElementById("Mondayfixtures1").innerHTML = playerStrings;
        };
        function playerfix1(){
          for (let i1 = 0; i1 < Tuesday1fix.length; i1 = i1 +1)
          playerString1 = playerString1 + "<p class=" +'"ms-4"' + ">" + Tuesday1fix[i1] + "" + Tuesday2fix[i1] + "</p>";
          document.getElementById("Tuesdayfixtures").innerHTML = playerString1;
        
        };
        
        function playerfix2(){
        for (let i2 = 0; i2 < Wednesday1fix.length; i2 = i2 +1)
          playerString2 = playerString2 + "<p>" + Wednesday1fix[i2] + "" + Wednesday2fix[i2] + "</p>";
          document.getElementById("Wednesdayfixtures").innerHTML = playerString2;
        }

        function playerfix3(){
        for (let i3 = 0; i3 < Thursday1fix.length; i3 = i3 +1)
          playerString3 = playerString3 + "<p>" + Thursday1fix[i3] + "" + Thursday2fix[i3] + "</p>";
          document.getElementById("Thursdayfixtures").innerHTML = playerString3;
        }
         
        
            playerfix();
            playerfix1();
            playerfix2();
            playerfix3();
            playerfix4();
            playerfix5();
            
        })
        .catch(error => {
          console.error('Error during fetch operation:', error);
        });
    }

    updateElements();
