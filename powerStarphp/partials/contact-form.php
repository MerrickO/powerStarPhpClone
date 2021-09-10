<form action="./mail-handler.php" method="POST">
    <div class="row">
        <div class="col-12">
            <label for="name">Name:</label>
            <input class="form-control pb-2" type="text" name="name"/>
            <br/>
            <label for="surname pb-2">Surname</label>
            <input class="form-control" type="text" name="surname"/>
            <br/>
        </div>
        <div class="col-12">
            <label for="telNo">Contact Number(Cell No.):</label>
            <input class="form-control pb-2" type="telNo" name="contact" pattern="[0-9]{10}"/>
            <br/>
            <label for="email"><span>*</span>Email:</label>
            <input class="form-control pb-2" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
            <input type="hidden" value="<?php $title ?>" name="pageName"/>
        </div>
        <div class="col-12 pb-5">
            <br/>
            <label for="message">Message:</label>
            <textarea class="form-control" name="message"></textarea>
        </div>
        <button 
        data-sitekey="reCAPTCHA_site_key" 
        data-callback='onSubmit' 
        data-action='submit' type="submit" name="submit" class="g-recaptcha btn btn-lg theme-btn">Submit</button>
    </div>
</form>