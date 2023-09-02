<form id="frmAuthLogin" name="frmAuthLogin" method="post" action="{{ route('login.handle') }}">
    @csrf

    <div class="control">
        <label for="txtUserEmail">Email</label>
        <input type="text" id="txtUserEmail" name="email" placeholder="user@example.com" />
    </div>

    <div class="control">
        <label for="txtUserPass">Password</label>
        <input type="password" id="txtUserPass" name="password" />
    </div>

    <div class="actions">
        <button id="cmdSubmit" type="submit">Log in</button>
    </div>
</form>
