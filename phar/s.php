<html>
	<head>
		<style>
        	   body{
        			/*background:url(f2.jpg);*/
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
					background-color:blue;
					color:white;
				}
	   		input{
					width:70%;
					outline:none;
					padding:10px 10px;
					border:2px #aaa solid;
					font-size:15px;
					background:#fff;
					display:blue;
					margin:10px auto;
	    		}
	    		
	    		div{
					width:30%;
					height:450px;
					background:rgba(0,0,0,.2);
					box-shadow:5px 4px 43px #000;
					position:absolute;
					top:100px;
					
        	    }
	    		form{
					margin:30px auto;
					text-align:center;

            }
            b{
					font-size:30px;
					color:#fff;
	    		}
	    		 a{
					color:#ffffff;
					font-size:20px;
	     		}
	      	

			</style>

		</head>
	<body>
		<header>

		<nav>
			<ul>
			<li><a href="#" >Home</a></li>
			<li><a href="contacts.php" >Contacts</a></li>
			<li><a href="about.php">About us</a></li>
			</ul>
		</nav>
		</header>
	    	<div>


			<form method="post" action="insert.php">


			 	<b>Sign Up</b>



		    	<input type="username" name="name" placeholder="Username" required/>


			 	<input type="email" name="email" placeholder="Email" required/>


			 	<input type="Password" name="password" placeholder="password" required/>


			 	<input type="Password" name="conformpassword" placeholder="ConfirmPassword" required/>

		    	<input type="submit"name=""value="Sign Up"palceholder=""id="login"/><br>

		    	<a href="login.php">Login</a>

			</form>
	   	</div>
     </body>
</html>
