<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class= container>
        <h2>Masukan Data Siswa</h2>
    <form action="" method="post">
            <label><b>Nama</b></label><br>
            <input type="text" id="nama" name="nama" required><br>
            <label><b>Nis</b></label><br>
            <input type="number" id="nis" name="nis" required><br>
            <label><b>Rayon</b></label><br>
            <input type="text" id="nama" name="rayon" required><br>
            <button type= "submit" value="kirim"><b>Kirim</b></button>
            <button type= "submit" value="cetak"><a href= 'edit.php'>cetak</a></button>
            <button type= "submit" value="cetak"><a href = hasil.php>hapus data</a></button>  
    </form>

   


<style>
  /* Container */
 .container {
    width: 80%;
    margin: 40px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  /* Form */
  form {
    margin-bottom: 20px;
    margin-right: 15rem;
  }

  label {
    display: block;
    margin-bottom: 10px;
  }

  input[type="text"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
  }

  button[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #3e8e41;
  }

  /* Table */
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f0f0f0;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  tr:hover {
    background-color: #ccc;
  }

  /* Links */
  a {
    text-decoration: none;
    color: #337ab7;
  }

  a:hover {
    color: #23527c;
  }
</style>
</style>
<!-- <style>
    body {
       font-family: Arial, sans-serif;
       margin: 20px;
       padding: 0;
       text-align: center;
       background-image: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);
   }
   
   .container{
     background-color:#ededed91;
     border-radius: 8px;
     padding: 40px;
     box-shadow: 0 0 20px rgb(255, 250, 250);
     width: 100%;
     max-width: 700px;
     margin-left: 17rem;
     margin-top: 7rem;
   
   }
   
   h2{
     color: #fff;
     margin-bottom: 30px;
     text-align: center;
   
   }
   
   form {
       padding: 20px;
       text-align: center;
       border-radius: 50px 10 50px 10;
       margin-bottom: 20px; 
       background-color: #dc3545;
   }
   
   label {
       display: inline-block;
       font-size: 15px;
       color: #fff;
   
   }
   
   input {
     background:transparent;
     color: rgb(255, 255, 255);
     border: 1px solid #ffffff;
     border-radius: 10px;
     padding: 5px;
     margin-bottom: 30px;
     width: 50%;
   
   }
   
   
   button {
     background-color: transparent;
     /* text-align: center; */
     margin-left: 90px;
     border: none;
     font-size: 14px;
   }
   
   table {
       /* border-collapse: collapse; */
       /* width: 70%; */
       /* margin-left: 14%; */
       margin-left:200px;
   
   }
   
   th, td {
       border: 1px solid black;
       padding: 8px;
       text-align: left;
   }
   
   th {
       background-color: black;
       font-size: 14px;
       color: white;
   }
   
   tr {
     background-image: transparent;
     color: rgb(255, 255, 255);
   }
   
   a.btn-danger {
       color: #fff;
       background-color: #dc3545;
       border-color: #dc3545;
       padding: 5px 10px;
       border-radius: 3px;
       text-decoration: none;
   }
   
   a.btn-danger:hover {
       color:transparent;
       /* background-color: #c82333; */
       /* border-color: #bd2130; */
   }
   
       </style> -->
</div>
</body>
</html>