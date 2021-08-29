<div class="col-12">
    <label for="name">Name:</label>
    <input class="form-control pb-2" type="text" name="name"/>
    <label for="surname pb-2">Surname</label>
    <input class="form-control" type="text" name="surname"/>
</div>
<div class="col-12">
    <label for="telNo">Telephone:</label>
    <input class="form-control pb-2" type="telNo" name="telNo" pattern="[0-9]{10}"/>
    <label for="email"><span>*</span>Email:</label>
    <input class="form-control pb-2" type="email" name="email" required/>
    <input type="hidden" value="<?php $title ?>" name="pageName"/>
</div>
<div class="col-12 pb-5">
    <label for="message">Message:</label>
    <textarea class="form-control" name="message"></textarea>
</div>
<button class="btn btn-lg theme-btn">Submit</button>