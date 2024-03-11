
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        /* .vcolumn{
    display: flex;
    flex-wrap: wrap;
    width: 80%;
}
.lable{
    
    padding: 6%;
    text-align: left;
    font-size: 20px;
}
ul{
    display:flex;
    column-gap: 30px;
    list-style-type: none;
}
li{
    display: flex;
    flex-direction:row;
} */
ul {
    display: inline-table;
      list-style-type: none;
      padding: 0;
      margin: 0;
      
      
    }

    /* Style for list items */
    li {
        font-weight: bold;
        color: #005993;
        display: inline-block; /* Display items horizontally for larger screens */
        width: 48%; /* Two columns with a small gap */
      box-sizing: border-box; /* Include padding and border in the element's total width and height */
      margin-bottom: 20px; /* Add some space between list items */
    }

    /* Style for form input fields (optional) */
    li input {
        
      padding: 10px;
      width: 95%; /* Full width of the list item */
      box-sizing: border-box; /* Include padding and border in the element's total width and height */
    }

    /* Create two columns for larger screens */
    

    </style>
</head>
<body >
    
    <ul style="margin-left: 5%;">
  <li>
    <label for="" >title:</label><br>
    <input type="text" >
  </li>
  <li>
    <label for="">Initials:</label>
    <input type="text" >
  </li>
  <li>
    <label for="">First Name:</label><br>
    <input type="text" >
  </li>
  <li>
    <label for=""> Last Name:</label>
    <input type="text" >
  </li>
  <li>
    <label for="">Date of birth:</label>
    <input type="date">
  </li>
  <li>
    <label for="">Age:</label>
    <input type="text">
  </li>
  <li>
    <label for="">Gender</label>
    
         <select name="gender" id="Gender"  required style="width: 95%;padding:10px;">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Custom">Custom</option>
        </select>
  </li>
  <li>
    <label for="">Civil Status</label>
    <select name="" id="" style="width: 95%;padding:10px;" >
        <option value="single">Single</option>
        <option value="married">Married</option>
    </select>
  </li>
  <li>
    <label for="">Mobile Phone:</label>
    <input type="text">
  </li>
  <li>
    <label for="">Land Phone:</label>
    <input type="text">
  </li>
  <li>
    <label for="">Email:</label>
    <input type="email" name="" id="">
  </li>
  <li>
    <label for="">NIC</label><br>
    <input type="number" name="" id="">
  </li>
  <li>
    <label for="">Height(cm):</label>
    <input type="number" name="" id="">
  </li>
  <li>
    <label for="">Weight(Kg):</label>
    <input type="number" name="" id="">
  </li>
</ul
    </div>
    <h4>If age is under 18 years, the Guardian's information must be entered.</h4>
    
</body>
</html>