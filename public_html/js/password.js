function showpassword(){
    password.type="text"
    buttonPassword.setAttribute('onclick', 'hidepassword()')
}

function hidepassword(){
    password.type="password"
    buttonPassword.setAttribute('onclick', 'showpassword()')

}