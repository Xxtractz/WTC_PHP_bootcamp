<form action="" method="post" autocomplete="on">
        <div class="form">
                <p>Fisrt Name: </p>
                <input type="text" name="fname" placeholder="Enter your first Name" maxlegnth="32" required/>
                <br>
                <p>Middle Name: </p>
                <input type="text" name="mname" placeholder="Enter your middle Name" maxlegnth="32"/>
                <br>
                <p>Surname Name: </p>
                <input type="text" name="surname" id="" placeholder="Enter your Surname" maxlegnth="32" required/>
                <br>
                <p>Email Address: </p>
                <input type="email" name="email" id="" placeholder="example@example.com" maxlegnth="56" required/>
                <br>
                <p>Address: </p>
                <input type="text" name="address" id="" placeholder="street number,street name, suburb, city" />
                <br>
                <p >Province: </p>
                <select name="province">
                        <option value="gauteng">Gauteng</option>
                        <option value="limpopo">Limpopo</option>
                        <option value="kwaZulu-natal">KwaZulu-Natal</option>
                        <option value="mpumalanga">Mpumalanga</option>
                        <option value="western_cape">Western Cape</option>
                        <option value="eastern_cape">Eastern Cape</option>
                        <option value="north_west">North West</option>
                        <option value="free_state">Free State</option>
                        <option value="northern_cape">Northern Cape</option>
                </select>
                <p>Tel: </p>
                <input type="tel" name="phone" id="" placeholder="000-000-0000" maxlegnth="12" required/>
                <br>
                <p >Gender</p>
                <select name="gender">
                        <option value="other">-</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                </select>
                <br>
                <p>Username: </p>
                <input type="text" name="username" placeholder="Enter your username" required/>
                <br>
                <p>Password: </p>
                <input type="password" name="password" id="" placeholder="Enter Password" maxlegnth="32" required/>
                <br>
                <input type="submit" value="Submit">
        </div>
</form>