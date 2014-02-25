	<section class="col-md-8">
		<form id='form' class="col-md-7" method='get' action='index.php'>
			<h3>Sign Up</h3>
			<ul id='signUp'>
				<li class='col-md-6 alpha'>
					<label>First Name:</label>
					<input type='text' name='fname' required='required' class='form-control' placeholder='Your First Name'/>
				</li>
				<li class='col-md-6 alpha omega'>
					<label>Last Name:</label>
					<input type='text' name='lname' required='required' class='form-control' placeholder='Your Last Name'/>
				</li>
				<li>
					<label>Email:</label>
					<input type='text' name='email' required='required' class='form-control' placeholder='Your Email' />
				</li>
				<li>
					<label>Password:</label>
					<input type='password' name='password' required='required' class='form-control' placeholder='Desiered Password' />
				</li>
			</ul>
			<button class='btn btn-primary'>Sign Up</button>
		</form>
	</section>
	<aside class="col-md-4">
		<form method='get' action='index.php'>
			<input type='hidden' name='controller' value='users' />
			<h3>Log In</h3>
			<ul>
				<li>
					<label>Email</label>
					<input type='text' name='email' class='form-control' placeholder='Email'/>
				</li>
				<li>
					<label>Pasword</label>
					<input type='password' name='password' class='form-control' placeholder='Password'/>
				</li>
			</ul>
			<button class='btn btn-primary'>Login</button>
		</form>
	</aside>
</div>