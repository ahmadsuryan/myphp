<form action="/welcome">
    <h1>Buat Account Baru</h1>

    <h2>Sign Up Form</h2>

    <label>First Name</label>
    <input type="text" name="fname"/><br>

    <label>Last Name</label>
    <input type="text" name="lname"/><br>

    <label>Gender</label><br>
    <input type="radio" name="gender"/>Man<br>
    <input type="radio" name="gender"/>Woman<br>
    <input type="radio" name="gender"/>Other<br>

    <label>Nationality</label>
    <select name="" id="">
        <option value="">Indonesian</option>
        <option value="">Malaysian</option>
        <option value="">Australian</option>
    </select>
    <br>
    <label>Language Spoken</label><br>
    <input type="checkbox" name="language"/>Bahasa Indonesia<br>
    <input type="checkbox" name="language"/>English<br>
    <input type="checkbox" name="language"/>Arabic<br>
    <input type="checkbox" name="language"/>Japanese<br>

    <label>Bio</label>
    <textarea name="" id="" cols="30" rows="5"></textarea><br>

    <input type="submit" value="Sign Up"/>
</form>
