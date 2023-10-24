<html>
    <head>
        <title>
Edit Entry
        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
            .h1{
                text-align:center;
              
                border:3px solid black;
                
                background-color:#334a57;
                color:white;
            }
            body{
               background-color:#f4efec;
               
               
               color:#201813;
            }
            .top{
                padding-left:100px;
                padding-top:80px;
            }

            .label1{
                padding-right:20px;
            }

            .input1{
                padding:5px 5px 5px 5px ;
            }

            .input2{
                padding:5px 5px 5px 5px ;
                background-color:#998f99;
                color:black;
            }

.input3{

padding:5px 2px 2px 2px;


}

            .input4{
                
              padding-top:700px;
              padding-left:460px;
           
              
            }
            .h2{
                text-align:center;
              
              border:3px solid black;
              
              background-color:white;
              color:black;;
            }
           .label2{
            padding-left:100px;
             
            border:3px solid black;
              
              background-color:lightgray;
              color:black;
              margin-right:700px;
              margin-left:70px;
              margin-top:40px;
              
              padding:30px;
              float:left;
              position:absolute;

               
           }
           .label3{
            float:right;
             background-color:lightgray;
              color:black;
            margin-left:70px;
              margin-top:40px;
              margin-right:100px;
              padding:30px;
           }
           .h3{
            padding:30px;
            background-color: limegreen;
            border:2px solid black;
           }

           .h4{
              padding:30px;
            background-color:dodgerblue;
            border:2px solid black;
           }

           hr{
           border:5px solid aquamarine;
           
           }
           input[type=submit] {
  background-color:#0d1615;
  color:white;
  border:1px solid black;
  width: 100px;
  height:30px;
}
            </style>
    </head>
   <body>
    <div class="h1">
    <h2>
      DELETING DATA
    </h2>
    </div>
    <div class="top">
    <form method="POST"><h3>
        <label class="label1"> Enter the code for Entry</label>
      
      
        <input class="input1" type="text" name="item_code" required>
        
       <input  class="input2" formaction="deleteback.php"type ="submit" name="Go" value="Go" target="_self">
   
        </h3>
        </form>
        </div>
        <br>

</body>
</html>