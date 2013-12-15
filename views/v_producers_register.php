<!--

-->
<div class = 'center02'>
    <div>사이트등록</div>
    <!-- sign up interface page -->
    <form method='POST' action='/producers/p_sites_register' class='form-standard'>
        Name <span class = 'required'>*</span><br>
        <input type='text' name='name' required><br><br>
        Site name <span class = 'required'>*</span><br>
        <input type='text' name='domain_address' required><br><br>
        Email <span class = 'required'>*</span><br>
        <input type='text' name='email' required><br><br>
        Password <span class = 'required'>*</span><br>
        <input type='password' name='password' required><br><br>
        <select name = 'local'>
            <option value='강원도'>강원도</option>
            <option value='경기도'>경기도</option>
            <option value='충청북도'>충청북도</option>
            <option value='충청남도'>충청남도</option>
            <option value='경상북도'>경상북도</option>
            <option value='경상남도'>경상남도</option>
            <option value='전라북도'>전라북도</option>
            <option value='전라남도'>전라남도</option>
            <option value='제주도'>제주도</option>
        </select><br>

        <?php if($error == 'error'): ?>
        <div class='error'>
            Sign up failed. Please fill out all the fields.
        </div><br>
        <?php endif; ?>
        <?php if($error == 'failed'): ?>
        <div class='error'>
            Sign up failed. Your email is already registered.
        </div><br>
        <?php endif; ?>
        
        <input type='submit' value = 'submit'>
    </form>
</div>