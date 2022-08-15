


<link rel="stylesheet" href={{ asset("css/login.css") }}>

<body>
    <div class="full-page">
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>سجل دخول</button>
                    <button type='button'onclick='register()'class='toggle-btn'>أنشئ حساب</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='البريد الإلكتروني' required >
		    <input type='password'class='input-field'placeholder='كلمة السر' required>
		    <input type='checkbox'class='check-box'><span>تذكر كلمة السر</span>
		    <button type='submit'class='submit-btn'>سجل دخول</button>
		 </form>
		 <form id='register' class='input-group-register'>
		     <!-- <input type='text'class='input-field'placeholder='First Name' required> -->
		     <input type='text'class='input-field'placeholder='اسم المستخدم ' required>
		     <input type='email'class='input-field'placeholder='البريد الإلكتروني' required>
		     <input type='password'class='input-field'placeholder='كلمة السر ' required>
		     <input type='password'class='input-field'placeholder='تأكيد كلمة السر'  required>
		     <input type='checkbox'class='check-box'><span>أوافق على الشروط</span>
                    <button type='submit'class='submit-btn'>أنشئ الحساب</button>
	         </form>
            </div>
        </div>
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>

    </script>
</body>




