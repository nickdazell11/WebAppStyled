<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px;
  font-size: 30px;
}

.item1 {
  grid-column: 1 / span 3;
  grid-row: 1;
}

.item2 {
    grid-column: 1 / span 3;
    grid-row: 2;

    width: 100%;
    height: 100%;
    display: grid;
    margin: 0;
    grid-template-columns: auto auto auto auto;
    grid-template-rows: auto auto auto auto;
    gap: 10px;
    background-color: greenyellow;
    padding: 10px;
    text-align: center;
}

.item5 {
  grid-column: 1 / span 3;
  grid-row: 3;
}
.photo {
    width: 150px;
    height: auto;
}
</style>
</head>
<body>

<div class="grid-container">
  <div class="grid-item item1"><img src="1024.png" alt="App Logo" class="photo"></div>
  <div class="grid-item item2">
    <nav>
      <ul>
        <li><a href="http://localhost/PitchDataPHP/homepage.php">Home</a></li>
        <li><a href="http://localhost/PitchDataPHP/dailyLog.php">Daily Log</a></li>
        <li><a href="http://localhost/PitchDataPHP/calendar.php">Calendar</a></li>
        <li><a href="http://localhost/PitchDataPHP/about.php">About</a></li>
        <li class="logout"><a href="http://localhost/PitchDataPHP/signIn.php">Log Out</a></li>
      </ul>
    </nav>
  </div>
  <div class="grid-item item3">3</div>  
  <div class="grid-item item4">4</div>
  <div class="grid-item item5">5</div>
  <div class="grid-item item6">6</div>
</div>

<p>Direct child elements(s) of the grid container automatically becomes grid items.</p>

<p>Item 1, 2, and 5 are set to span multiple columns or rows.</p>

</body>
</html>