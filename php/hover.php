<html>
<head>
<style>


.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: red;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>


</body>

<head>
<style>


.dropdown-content {
    display: none;
}

.dropdown:hover .dropdown-content {
display: block;
}


</style>
</head>
<body>
<div class="dropdown">
  <img src="img_fjords.jpg" width="100" height="50">
  <div class="dropdown-content">
    <img src="img_fjords.jpg" width="200" height="200">
   
  </div>
</div>

</body>


</html>
