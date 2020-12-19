<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: sans-serif;
  }

  header {

  background: #FCEA10;
margin: 0px 0px 30px 0px;
text-align: center;

  }
  nav ul li {
    display: inline;
  }
  nav a {
    text-decoration: none;
    color: #FCEA10;
    background: black;
    padding: 5px 4px;

  }

  section {
    padding: 20px;

    margin: 20px;
  }


.title {
  background: black;
  margin: 20px;
  border-radius: 4px;
  text-align: center;

}

  .guval {
    width: 100px;
    margin: 15px 25px;
    text-align: center;
  }

  .yo {
    width: 300px;
    margin: 10px;
    float:left;
    transition: 1s;
  }

  .bolt {
  position: absolute;
  width: 8%;
  margin: 10px;
  top:500px;
  animation-name: shock;
  animation-duration: 3s;
  animation-delay: 0s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
  animation-direction: alternate;

  }

  .yo:hover {
    width: 500px;
    transition: 1s;

  }

  p {
    font-size: 18px;
  }

  @keyframes shock {
    from {
      transform: translateY(-320px);
    }
    to {
      transform: translateY(-150px);
    }

  }

.bottom {
  background: #FCEA10;
  width: 8.5%;
  margin: 10px;
  padding: 5px;
  position: fixed;
  left: 50%;
  bottom: 0;

  }

  .contact-form {
    background: #FCEA10;
    padding: 20px;
    max-width: 500px;
    border-radius: 4px;
    margin: 20px auto;
    text-align: left;


  }

  .label_input_wrap {
    display: block;
  }

  .reset input {
    background: black;
    color: white;
    padding: 5px 20px;
  }
  .submit input {

    background: black;
    color: white;
    padding: 5px 20px;
  }

.submit,
.reset {
  display: inline;
}

.input-section {
  margin-bottom: 10px;
}

input {
    padding: 5px 10px;
    border-radius: 4px;
}

textarea {
    font-family: sans-serif;
    padding: 10px 10px;
    border-radius: 4px;
}

select {
    width: 185px;
    padding: 8px 0;
    border-radius: 4px;
}

label {
  font-weight: bold;
}

.container {
    text-align: center;
    max-width: 900px;
    margin: 40px auto 80px;
}

@keyframes shock2 {
  from {
    transform: translateY(-520px);
  }
  to {
    transform: translateY(-100px);
  }

}

.bolt2 {
position: absolute;
width: 8%;
margin: 10px;
top:1750px;
left: 50px;
animation-name: shock2;
animation-duration: 3s;
animation-delay: 0s;
animation-iteration-count: infinite;
animation-timing-function: ease-in-out;
animation-direction: alternate;

}

footer {
  background: black;
  color: #FCEA10;
  text-align: center;
  padding: 20px 0;

}

header nav a:hover {
  background: white;
}
</style>

<header id="top">
  <img class="guval" src="./images/black.png" alt="Guval" title="Guval" />
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<div class="container">
<h1>Thank you for your enquiry</h1>
<p>Thanks for your interest. I recieved your message, let me check it out and i'll get back to you.</p>

</div>

<footer>
  <p>This page was designed by Guval</p>
</footer>
