function updateElements1() {
  // Fetch returns a Promise
  fetch('update_numeric_value.php')
    .then(response => {
      // Check if the request was successful (status code 200)
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      // Parse the response as JSON
      return response.json();
    })
    .then(data => {

      
      // Access the values from the JSON data and update multiple elements
     var leaderboardData = data;

      // Run additional code here, as needed
      console.log('Code after AJAX has run successfully');


      // Function to sort the leaderboard data based on scores
function sortLeaderboard() {
leaderboardData.sort((a, b,) => b.score - a.score );
}
      // Function to sort the leaderboard data based on kd
function sortLeaderboardkd() {
leaderboardData.sort((a, b,) => b.kd - a.kd);
}

// Function to update the HTML table with the sorted leaderboard
function updateLeaderboard() {
const leaderboardBody = document.getElementById("leaderboardBody");

// Clear existing content
leaderboardBody.innerHTML = "";

// Sort the leaderboard data
sortLeaderboardkd();
sortLeaderboard();


// Update the HTML table with sorted data
leaderboardData.forEach((player, index) => {
  const row = leaderboardBody.insertRow();
  const rankCell = row.insertCell(0);
  const nameCell = row.insertCell(1);
  const scoreCell = row.insertCell(2);
  const playedCell = row.insertCell(3);
  const kdCell = row.insertCell(4);
  const wonCell = row.insertCell(5);
  const drawnCell = row.insertCell(6);
  const lostCell = row.insertCell(7);

  rankCell.textContent = index + 1;
  nameCell.textContent = player.name;

  scoreCell.textContent = player.score;
  scoreCell.classList.add("textContent");

  playedCell.textContent = player.played;
  playedCell.classList.add("textContent");

  kdCell.textContent = player.kd;
  kdCell.classList.add("textContent");

  wonCell.textContent = player.won;
  wonCell.classList.add("textContent");

  drawnCell.textContent = player.drawn;
  drawnCell.classList.add("textContent");

  lostCell.textContent = player.lost;
  lostCell.classList.add("textContent");

  if (index < 4) {
            row.classList.add("topplayer");
        }
  
  if (index > 15) {
            row.classList.add("bottomplayer");
        }
});
}

// Initial update when the page loads
updateLeaderboard();
      
    })
    .catch(error => {
      // Handle errors here
      console.error('Error during fetch operation:', error);
    });
}

updateElements1();