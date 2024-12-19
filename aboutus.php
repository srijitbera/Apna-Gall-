<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  height: auto;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Meet Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/madhu.png" alt="Madhurima Das" style="width:100%">
      <div class="container">
        <h2>Madhurima Das</h2>
        <p class="title">Group Leader, Planner & Front-end Designer</p>
        <p>Pursuing BCA at Brainware University</p>
        <p>jane@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/pritam.png" alt="Pritam Saha" style="width:100%">
      <div class="container">
        <h2>Pritam Saha</h2>
        <p class="title">Planner & Front-end Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/rohit.png" alt="Rohit Ghosh" style="width:100%">
      <div class="container">
        <h2>Rohit Ghosh</h2>
        <p class="title">Back-end Developer & Website Admin</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/srijit.png" alt="Srijit Bera" style="width:100%">
      <div class="container">
        <h2>Srijit Bera</h2>
        <p class="title">Back-end Developer & Database Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/subhadeep.png" alt="Subhadeep Mondal" style="width:100%">
      <div class="container">
      <h2>Subhadeep Mondal</h2>
        <p class="title">Testing & Content Writer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/rimjhim.png" alt="Rimjhim Saha" style="width:100%">
      <div class="container">
        <h2>Rimjhim Saha</h2>
        <p class="title">Testing & Documentation</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>