<html>
	<head>
	<style>
           body{
				/*background:url(f1.jpg);*/
				background-color: white;
				background-size:cover;
				margin:0;
           }
		header{
	background-color:#511674;
	color:black;
	width:100%;
	margin-left:auto;
	margin-right:auto;
	padding:0%;
	overflow:hidden;
}
h1{
	line-height:5px;
	font-size:2.0em;
}
hgroup h1{
	font-size:2.5em;
}
hgroup{
	width:60%;
	float:left;
}
nav{
	width:30%;
	float:right;
}
nav ul{
	list-style-type:none;
}
nav li{
	float:left;
	margin-right:10px;
}
li a{
	text-decoration:none;
	color:white;
	padding:10px;
	display:block;
}
li a:hover{
	background-color:green;
	color:white;
}
	   input{
		width:70%;
		outline:none;
		padding:10px 11px;
		border:2px #aaa solid;
		font-size:20px;
		background:#fff;
		display:blue;
		margin:20px auto;
	    }
	    #login{
		background:#511674;
		color:#fff;
		border:none;
	    }
	    div{
		width:30%;
		height:450px;
		background:rgba(0,0,0,.2);
		box-shadow:5px 4px 43px #000;
		position:absolute;
		top:130px;
		
            }
	    form{
		margin:30px auto;
		text-align:center;

            }
            b{
		font-size:30px;
		color:#fff;
	     }
	     select{
	     	color:black;
	     	font-size:20px;
	     }
	     a{
		color:#ffffff;
		font-size:20px;
	      }
	      

	</style>

	</head>
	<header>

	<nav>
		<ul>
		<li><a href="#">Home</a></li>
		<li><a href="contacts.php">Contacts</a></li>
		<li><a href="about.php">About us</a></li>
		</ul>
	</nav>
	</header>
<body>
	<div>
	 <form action="12.php"method="post">
	 <b>Login Form</b><br>
	  	<select class="w3-select" name="option1"  required>
            <option value=""  disabled selected>---Select Login Type---</option>
            <option value="user" name="user" >user</option>
            <option value="admin" name="admin" >admin</option>
        </select><br>
	 <input type="username"name="name" placeholder="Username"required/><br>
	 <input type="Password"name="password" placeholder="password" required /><br>
	 <input type="submit"name=""value="LOGIN" palceholder=""id="login"/><br>
	 <a href="s.php">Signup</a>
	</form>
	</div>
</body>
</html>
